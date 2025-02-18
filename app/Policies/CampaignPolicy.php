<?php

namespace App\Policies;

use App\Facades\CampaignCache;
use App\Facades\EntityPermission;
use App\Facades\Identity;
use App\Facades\UserCache;
use App\Models\CampaignPermission;
use App\Traits\AdminPolicyTrait;
use App\User;
use App\Models\Campaign;
use Illuminate\Auth\Access\HandlesAuthorization;

class CampaignPolicy
{
    use AdminPolicyTrait;
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the campaign.
     *
     */
    public function view(User $user, Campaign $campaign): bool
    {
        return $this->access($user, $campaign);
    }

    /**
     * Determine whether the user can access the campaign
     *
     */
    public function access(User $user, Campaign $campaign): bool
    {
        if ($campaign->isPublic()) {
            return true;
        }
        return true;
    }

    /**
     * Can't create a campaign while impersonating another user. Should be handled in the controller?
     */
    public function create(): bool
    {
        return !Identity::isImpersonating();
    }

    /**
     * Determine whether the user can update the campaign.
     *
     */
    public function update(User $user, Campaign $campaign): bool
    {
        return
            $campaign->userIsMember($user) && (
                UserCache::user($user)->admin() || $this->checkPermission(CampaignPermission::ACTION_MANAGE, $user)
            );
    }

    /**
     * Determine whether the user can manage the roles of the campaign.
     *
     */
    public function roles(User $user, Campaign $campaign): bool
    {
        return
            $campaign->userIsMember($user) && (
                UserCache::user($user)->admin()
            );
    }

    /**
     * Determine whether the user can delete the campaign.
     *
     */
    public function delete(User $user, Campaign $campaign): bool
    {
        return
            $campaign->userIsMember($user) &&
            UserCache::user($user)->admin() &&
            CampaignCache::members()->count() == 1;
    }

    /**
     */
    public function invite(User $user, Campaign $campaign): bool
    {
        return $campaign->userIsMember($user) && (
            UserCache::user($user)->admin() || $this->checkPermission(CampaignPermission::ACTION_MEMBERS, $user, $campaign)
        );
    }

    /**
     */
    public function setting(User $user, Campaign $campaign): bool
    {
        return UserCache::user($user)->admin();
    }

    /**
     */
    public function recover(User $user, Campaign $campaign): bool
    {
        return UserCache::user($user)->admin();
    }

    /**
     */
    public function history(User $user, Campaign $campaign): bool
    {
        return $this->recover($user, $campaign);
    }

    /**
     */
    public function dashboard(User $user, Campaign $campaign): bool
    {
        return UserCache::user($user)->admin() || $this->checkPermission(CampaignPermission::ACTION_DASHBOARD, $user, $campaign);
    }

    /**
     */
    public function stats(User $user, Campaign $campaign): bool
    {
        return (UserCache::user($user)->admin() || $campaign->userIsMember());
    }

    /**
     */
    public function search(User $user, Campaign $campaign): bool
    {
        return UserCache::user($user)->admin();
    }

    /**
     * Determine whether the user can leave the campaign
     *
     * @return bool
     */
    public function leave(User $user, Campaign $campaign)
    {
        if (Identity::isImpersonating()) {
            return false;
        }
        if (!$campaign->userIsMember()) {
            return false;
        }
        return

            // If we are not the owner, or that we are an owner but there are other owners
            (!UserCache::user($user)->admin() || $campaign->adminCount() > 1);
    }

    /**
     * Determine if a user can follow a campaign
     * @return bool
     */
    public function follow(?User $user, Campaign $campaign)
    {
        if (empty($user)) {
            return false;
        }

        if (!$campaign->isPublic()) {
            return false;
        }

        return !$campaign->userIsMember();
    }
    /**
     *
     * Determine if a user can apply to a campaign
     * @return bool
     */
    public function apply(?User $user, Campaign $campaign)
    {
        if (empty($user)) {
            return false;
        }

        if (!$campaign->isPublic() || !$campaign->is_open) {
            return false;
        }

        return !$campaign->userIsMember();
    }

    /**
     * Permission to view the members of a campaign
     * @return bool
     */
    public function members(?User $user, Campaign $campaign)
    {
        if (!$user) {
            return false;
        }
        return (UserCache::user($user)->admin() || $this->checkPermission(CampaignPermission::ACTION_MEMBERS, $user, $campaign)) ||
            !($campaign->boosted() && $campaign->hide_members);
    }

    /**
     * Permission to view the campaign submissions
     * @return bool
     */
    public function submissions(?User $user)
    {
        return $user && UserCache::user($user)->admin();
    }

    /**
     */
    public function gallery(?User $user, Campaign $campaign): bool
    {
        return $user && (
            UserCache::user($user)->admin() ||
            $this->checkPermission(CampaignPermission::ACTION_GALLERY, $user, $campaign) ||
            $this->checkPermission(CampaignPermission::ACTION_GALLERY_BROWSE, $user, $campaign)
        );
    }

    /**
     */
    public function relations(?User $user): bool
    {
        return $user && UserCache::user($user)->admin();
    }


    /**
     */
    public function mapPresets(?User $user): bool
    {
        return $user && UserCache::user($user)->admin();
    }

    /**
     * Check if a user can unboost a campaign
     */
    public function unboost(?User $user, Campaign $campaign): bool
    {
        $boost = $campaign->boosts->first();
        return $user && $boost && $boost->user_id === $user->id;
    }

    public function galleryManage(?User $user, Campaign $campaign): bool
    {
        return $user && (
                UserCache::user($user)->admin() ||
                $this->checkPermission(CampaignPermission::ACTION_GALLERY, $user, $campaign)
            );
    }

    public function galleryBrowse(?User $user, Campaign $campaign): bool
    {
        return $user && (
                UserCache::user($user)->admin() ||
                $this->checkPermission(CampaignPermission::ACTION_GALLERY, $user, $campaign) ||
                $this->checkPermission(CampaignPermission::ACTION_GALLERY_BROWSE, $user, $campaign)
            );
    }

    public function galleryUpload(?User $user, Campaign $campaign): bool
    {
        return $user && (
                UserCache::user($user)->admin() ||
                $this->checkPermission(CampaignPermission::ACTION_GALLERY, $user, $campaign) ||
                $this->checkPermission(CampaignPermission::ACTION_GALLERY_UPLOAD, $user, $campaign)
            );
    }


    /**
     * @return bool
     */
    protected function checkPermission(int $action, User $user, Campaign $campaign = null)
    {
        return EntityPermission::hasPermission(0, $action, $user, null, $campaign);
    }
}
