<?php

namespace App\Http\Controllers\Crud;

use App\Datagrids\Filters\CalendarFilter;
use App\Http\Controllers\CrudController;
use App\Http\Requests\StoreCalendar;
use App\Models\Calendar;
use App\Models\Campaign;
use App\Sanitizers\CalendarSanitizer;
use App\Traits\TreeControllerTrait;

class CalendarController extends CrudController
{
    use TreeControllerTrait;

    /**
     */
    protected string $view = 'calendars';
    protected string $route = 'calendars';
    protected $module = 'calendars';


    /** @var string */
    protected $model = \App\Models\Calendar::class;

    /**  */
    protected string $filter = CalendarFilter::class;

    protected string $sanitizer = CalendarSanitizer::class;

    /**
     * Store the new calendar in the db
     */
    public function store(StoreCalendar $request, Campaign $campaign)
    {
        return $this->campaign($campaign)->crudStore($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Campaign $campaign, Calendar $calendar)
    {
        return $this->campaign($campaign)->crudShow($calendar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campaign $campaign, Calendar $calendar)
    {
        return $this->campaign($campaign)->crudEdit($calendar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCalendar $request, Campaign $campaign, Calendar $calendar)
    {
        return $this->campaign($campaign)->crudUpdate($request, $calendar);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign, Calendar $calendar)
    {
        return $this->campaign($campaign)->crudDestroy($calendar);
    }

    /**
     */
    public function monthList(Campaign $campaign, Calendar $calendar)
    {
        return response()->json([
            'months' => $calendar->months(),
            'current' => [
                'year' => $calendar->currentDate('year'),
                'month' => $calendar->currentDate('month'),
                'day' => $calendar->currentDate('date')
            ],
            'recurring' => $calendar->recurringOptions(true),
        ]);
    }

    /**
     * Set the day as today
     */
    public function today(Campaign $campaign, Calendar $calendar)
    {
        $this->authorize('update', $calendar);

        $date = request()->get('date', null);
        if ($date) {
            $calendar->update([
                'date' => $date
            ]);
        }

        return redirect()->back()
            ->with('success', __('calendars.edit.today'));
    }
}
