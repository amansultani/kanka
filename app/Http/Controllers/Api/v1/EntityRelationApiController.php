<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Campaign;
use App\Models\Entity;
use App\Http\Requests\StoreRelation as Request;
use App\Http\Resources\RelationResource as Resource;
use App\Services\Entity\RelationService;
use App\Models\Relation;

class EntityRelationApiController extends ApiController
{
    protected RelationService $relationService;

    public function __construct(RelationService $relationService)
    {
        $this->relationService = $relationService;
    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Campaign $campaign, Entity $entity)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $entity->child);
        return Resource::collection($entity->relationships()->has('target')->paginate());
    }

    /**
     * @return Resource
     */
    public function show(Campaign $campaign, Entity $entity, Relation $relation)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $entity->child);
        return new Resource($relation);
    }

    /**
     * @return Resource
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);

        [$new, $count] = $this->relationService->campaign($campaign)->createRelations($request);

        if ($request->has('targets')) {
            $entities = $request->get('targets');
        } else {
            $entities = [$request->get('target_id')];
        }

        return Resource::collection($entity->relationships()->has('target')->whereIn('target_id', $entities)->paginate());
    }

    /**
     * @return Resource
     */
    public function update(Request $request, Campaign $campaign, Entity $entity, Relation $relation)
    {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $relation->update($request->all());

        return new Resource($relation);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(
        \Illuminate\Http\Request $request,
        Campaign $campaign,
        Entity $entity,
        Relation $relation
    ) {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $relation->delete();

        return response()->json(null, 204);
    }
}
