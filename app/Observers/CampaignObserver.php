<?php

namespace App\Observers;

use App\Facades\Mentions;
use App\Facades\UserCache;
use App\Models\Campaign;
use App\Models\CampaignUser;
use App\Models\CampaignRole;
use App\Models\Genre;
use App\Models\CampaignRoleUser;
use App\Models\CampaignSetting;
use App\Models\RpgSystem;
use App\Models\UserLog;
use App\Notifications\Header;
use App\Services\EntityMappingService;
use App\Services\ImageService;
use App\Services\Users\CampaignService;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CampaignObserver
{
    use PurifiableTrait;

    /**
     * Service used to build the map of the entity
     */
    protected EntityMappingService $entityMappingService;

    protected CampaignService $campaignService;

    public function __construct(EntityMappingService $entityMappingService, CampaignService $campaignService)
    {
        $this->entityMappingService = $entityMappingService;
        $this->campaignService = $campaignService;
    }

    /**
     *
     */
    public function saving(Campaign $campaign)
    {
        // Purity text
        $campaign->name = $this->purify($campaign->name);
        $campaign->entry = $this->purify(Mentions::codify($campaign->entry));
        $campaign->excerpt = $this->purify(Mentions::codify($campaign->excerpt));

        //$campaign->slug = Str::slug($campaign->name, '');
        $campaign->updated_by = auth()->user()->id;

        if (request()->has('is_public')) {
            $previousVisibility = $campaign->getOriginal('visibility_id');
            $isPublic = request()->get('is_public', null);
            if (!empty($isPublic) && $previousVisibility == Campaign::VISIBILITY_PRIVATE) {
                $campaign->visibility_id = Campaign::VISIBILITY_PUBLIC;
            // Default to public for now. Later will have REVIEW mode.
            } elseif (empty($isPublic) && $previousVisibility != Campaign::VISIBILITY_PRIVATE) {
                $campaign->visibility_id = Campaign::VISIBILITY_PRIVATE;
            }
        }

        // Handle image. Let's use a service for this.
        ImageService::handle($campaign, 'campaigns');
        ImageService::handle($campaign, 'campaigns', 'header_image');
    }

    /**
     */
    public function creating(Campaign $campaign)
    {
        $campaign->created_by = auth()->user()->id;
        //$campaign->is_featured = false;
        $campaign->entity_visibility = false;
        $campaign->entity_personality_visibility = false;
        $campaign->follower = 0;
    }

    /**
     */
    public function created(Campaign $campaign)
    {
        $role = new CampaignUser([
            'user_id' => auth()->user()->id,
            'campaign_id' => $campaign->id,
        ]);
        $role->save();

        // Make sure we save the last campaign id to avoid infinite loops
        $this->campaignService
            ->user(auth()->user())
            ->campaign($campaign)
            ->set();

        $role = CampaignRole::create([
            'campaign_id' => $campaign->id,
            'name' => __('campaigns.members.roles.owner'),
            'is_admin' => true,
        ]);

        CampaignRole::create([
            'campaign_id' => $campaign->id,
            'name' => __('campaigns.members.roles.public'),
            'is_public' => true,
        ]);

        CampaignRole::create([
            'campaign_id' => $campaign->id,
            'name' => __('campaigns.members.roles.player'),
        ]);

        CampaignRoleUser::create([
            'campaign_role_id' => $role->id,
            'user_id' => Auth::user()->id
        ]);

        // Settings
        $setting = new CampaignSetting([
            'campaign_id' => $campaign->id,
            'dice_rolls' => 0,
            'conversations' => 0,
        ]);
        $setting->save();

        $campaign->slug = (string) $campaign->id;
        $campaign->saveQuietly();

        UserCache::clear();

        auth()->user()->log(UserLog::TYPE_CAMPAIGN_NEW);
    }

    /**
     */
    public function saved(Campaign $campaign)
    {
        // If the posts's entry has changed, we need to re-build it's map.
        if ($campaign->isDirty('entry')) {
            $this->entityMappingService->mapCampaign($campaign);
        }

        $this->saveGenres($campaign);
        $this->saveRpgSystems($campaign);

        foreach ($campaign->members()->with('user')->get() as $member) {
            UserCache::user($member->user)->clear();
        }

        // Whenever a campaign is changed, clear the cache for followers.
        // This can be for the name, image, public status etc which needs to be reflected
        // in the user's sidebar.
        foreach ($campaign->followers as $follow) {
            UserCache::user($follow)->clear();
        }
    }

    /**
     */
    public function deleted(Campaign $campaign)
    {
        ImageService::cleanup($campaign);
        UserCache::clear();
    }

    /**
     * Deleting the campaign
     *
     */
    public function deleting(Campaign $campaign)
    {
        // Technically, only a campaign with a single user can be deleted.
        foreach ($campaign->members as $member) {
            $member->user->notify(new Header(
                'campaign.deleted',
                'trash',
                'yellow',
                [
                    'campaign' => $campaign->name
                ]
            ));
            $member->delete();
        }

        // Delete the campaign setting
        $campaign->setting->delete();

        ImageService::cleanup($campaign, 'header_image');
    }

    /**
     */
    protected function saveRpgSystems(Campaign $campaign): void
    {
        if (!request()->has('rpg_systems')) {
            return;
        }

        $ids = request()->post('rpg_systems', []);

        // Only use tags the user can actually view. This way admins can
        // have tags on entities that the user doesn't know about.
        $existing = [];
        foreach ($campaign->rpgSystems as $system) {
            $existing[] = $system->id;
        }
        $new = [];

        foreach ($ids as $id) {
            if (!empty($existing[$id])) {
                unset($existing[$id]);
            } else {
                $system = RpgSystem::find($id);
                if (empty($system)) {
                    continue;
                }
                $new[] = $system->id;
            }
        }
        $campaign->rpgSystems()->attach($new);

        // Detach the remaining
        if (!empty($existing)) {
            $campaign->rpgSystems()->detach($existing);
        }
    }

    /**
     * Save the sections/categories
     */
    protected function saveGenres(Campaign $campaign)
    {
        if (!request()->has('campaign_genre')) {
            return;
        }

        $ids = request()->post('genres', []);

        $existing = [];
        /** @var Genre $genre */
        foreach ($campaign->genres as $genre) {
            $existing[$genre->id] = $genre->slug;
        }
        $new = [];

        foreach ($ids as $id) {
            if (!empty($existing[$id])) {
                unset($existing[$id]);
            } else {
                $genre = Genre::find($id);
                if (!empty($genre)) {
                    $new[] = $genre->id;
                }
            }
        }
        $campaign->genres()->attach($new);

        // Detatch the remaining
        if (!empty($existing)) {
            $campaign->genres()->detach(array_keys($existing));
        }
    }
}
