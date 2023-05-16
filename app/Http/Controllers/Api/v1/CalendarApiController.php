<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Campaign;
use App\Models\Calendar;
use App\Http\Requests\StoreCalendar as Request;
use App\Http\Resources\CalendarResource as Resource;
use App\Sanitizers\CalendarSanitizer;

class CalendarApiController extends ApiController
{
    protected CalendarSanitizer $sanitizer;

    public function __construct(CalendarSanitizer $sanitizer)
    {
        $this->sanitizer = $sanitizer;
    }

    /**
     * @param Campaign $campaign
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Campaign $campaign)
    {
        $this->authorize('access', $campaign);
        return Resource::collection($campaign
            ->calendars()
            ->filter(request()->all())
            ->withApi()
            ->lastSync(request()->get('lastSync'))
            ->paginate());
    }

    /**
     * @param Campaign $campaign
     * @param Calendar $calendar
     * @return Resource
     */
    public function show(Campaign $campaign, Calendar $calendar)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $calendar);
        return new Resource($calendar);
    }

    /**
     * @param Request $request
     * @param Campaign $campaign
     * @return Resource
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, Campaign $campaign)
    {
        $this->authorize('access', $campaign);
        $this->authorize('create', Calendar::class);

        /** @var Calendar $model */
        $request->merge($this->sanitizer->request($request)->sanitize());
        $data = $request->all();
        $data['campaign_id'] = $campaign->id;
        $model = Calendar::create($data);
        $this->crudSave($model);
        return new Resource($model);
    }

    /**
     * @param Request $request
     * @param Campaign $campaign
     * @param Calendar $calendar
     * @return Resource
     */
    public function update(Request $request, Campaign $campaign, Calendar $calendar)
    {
        $this->authorize('access', $campaign);
        $this->authorize('update', $calendar);
        $request->merge($this->sanitizer->request($request)->sanitize());
        $calendar->update($request->all());
        $this->crudSave($calendar);

        return new Resource($calendar);
    }

    /**
     * @param Request $request
     * @param Campaign $campaign
     * @param Calendar $calendar
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Request $request, Campaign $campaign, Calendar $calendar)
    {
        $this->authorize('access', $campaign);
        $this->authorize('delete', $calendar);
        $calendar->delete();

        return response()->json(null, 204);
    }
}
