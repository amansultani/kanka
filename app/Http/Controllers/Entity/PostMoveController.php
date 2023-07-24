<?php

namespace App\Http\Controllers\Entity;

use App\Exceptions\TranslatableException;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovePostRequest;
use App\Models\Entity;
use App\Models\PostLayout;
use App\Facades\CampaignLocalization;
use App\Models\Post;
use App\Services\Entity\PostService;

class PostMoveController extends Controller
{
    protected PostService $service;

    /**
     * AbilityController constructor.
     * @param PostService $service
     */
    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    /**
     */
    public function index(Entity $entity, Post $post)
    {
        $this->authorize('view', $entity->child);
        $campaign = CampaignLocalization::getCampaign()->entities()->get();

        return view('entities.pages.posts.move.index', compact(
            'entity',
            'post',
            'campaign',
        ));
    }

    /**
     */
    public function move(MovePostRequest $request, Entity $entity, Post $post)
    {
        $this->authorize('update', $entity->child);
        /** @var Entity|null $newEntity */
        $newEntity = Entity::where(['id' => $request['entity']])->first();
        $this->authorize('update', $newEntity->child);
        try {
            if ($post->layout_id) {
                $layouts = PostLayout::where('entity_type_id', null)->orWhere('entity_type_id', $newEntity->type_id)->pluck('id')->toArray();
                if (!in_array($post->layout_id, $layouts)) {
                    throw new TranslatableException('Invalid post layout');
                }
            }
            $newPost = $this->service
                ->post($post)
                ->handle($request);
            $success = 'move_success';
            if (isset($request['copy'])) {
                $success = 'copy_success';
            }
            return redirect()
                ->route($newEntity->pluralType() . '.show', [$newEntity->child->id, '#post-' . $newPost->id])
                ->with('success', __('entities/notes.move.' . $success, ['name' => $newPost->name,
                    'entity' => $newEntity->name
                ]));
        } catch (TranslatableException $ex) {
            return redirect()
                ->route($entity->pluralType() . '.show', [$entity->child->id, '#post-' . $post->id])
                ->with('error', __($ex->getMessage(), ['name' => $entity->name]));
        }
    }
}
