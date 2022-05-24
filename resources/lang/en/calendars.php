<?php

return [
    'actions'       => [
        'add_epoch'         => 'Add an epoch',
        'add_intercalary'   => 'Add intercalary days',
        'add_month'         => 'Add a month',
        'add_moon'          => 'Add a moon',
        'add_reminder'      => 'Add a reminder',
        'add_season'        => 'Add a season',
        'add_weather'       => 'Set weather effect',
        'add_week'          => 'Add a named week',
        'add_weekday'       => 'Add a week day',
        'add_year'          => 'Add a named year',
        'set_today'         => 'Set as current day',
        'today'             => 'Today',
        'update_weather'    => 'Update weather',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Takes place every year',
    ],
    'create'        => [
        'success'   => 'Calendar \':name\' created.',
        'title'     => 'New Calendar',
    ],
    'destroy'       => [
        'success'   => 'Calendar \':name\' removed.',
    ],
    'edit'          => [
        'success'   => 'Calendar \':name\' updated.',
        'title'     => 'Edit Calendar :name',
        'today'     => 'Calendar date updated.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Existing Entity',
            'new'       => 'New Event',
            'switch'    => 'Change choice',
        ],
        'create'    => [
            'success'   => 'Calendar event created.',
            'title'     => 'Add a Calendar Event to :name',
        ],
        'destroy'   => 'Reminder removed from calendar \':name\'.',
        'edit'      => [
            'success'   => 'Reminder updated.',
            'title'     => 'Update Reminder for :name',
        ],
        'helpers'   => [
            'add'               => 'Add an existing event to this calendar.',
            'new'               => 'Or create a new event by simply providing a name.',
            'other_calendar'    => 'You are editing a reminder that is on the :calendar calendar.',
        ],
        'modal'     => [
            'title' => 'Add an event to the calendar',
        ],
        'success'   => 'Reminder \':event\' added to the calendar.',
    ],
    'events'        => [
        'filters'   => [
            'show_after'    => 'Show today and after',
            'show_all'      => 'Show all',
            'show_before'   => 'Show before today',
        ],
        'title'     => 'Calendar :name Events',
    ],
    'fields'        => [
        'calendar'              => 'Parent Calendar',
        'calendars'             => 'Calendars',
        'colour'                => 'Colour',
        'comment'               => 'Comment',
        'current_day'           => 'Current Day',
        'current_month'         => 'Current Month',
        'current_year'          => 'Current Year',
        'date'                  => 'Current Date',
        'day'                   => 'Day',
        'default_layout'        => 'Default layout',
        'has_leap_year'         => 'Has leap years',
        'intercalary'           => 'Intercalary Days',
        'is_incrementing'       => 'Advancing date',
        'is_recurring'          => 'Recurring',
        'leap_year_amount'      => 'Add Days',
        'leap_year_month'       => 'Month',
        'leap_year_offset'      => 'Every',
        'leap_year_start'       => 'Leap Year',
        'length'                => 'Event Length',
        'length_days'           => ':count day|:count days',
        'month'                 => 'Month',
        'months'                => 'Months',
        'moons'                 => 'Moons',
        'name'                  => 'Name',
        'parameters'            => 'Parameters',
        'recurring_periodicity' => 'Recurring Periodicity',
        'recurring_until'       => 'Recurring Until Year',
        'reset'                 => 'Weekly Reset',
        'seasons'               => 'Seasons',
        'start_offset'          => 'Start Offset',
        'suffix'                => 'Suffix',
        'type'                  => 'Type',
        'week_names'            => 'Week Names',
        'weekdays'              => 'Week Days',
        'year'                  => 'Year',
    ],
    'helpers'       => [
        'default_layout'    => 'Select which layout the calendar should use by default when viewed.',
        'month_type'        => 'Intercalary months don\'t use week days, but still influence moons and seasons.',
        'moon_offset'       => 'By default, the first fullmoon appears on the first day of year 0. Changing the offset will alter when the first full moon is displayed. This value can negative (up to the length of the first month) or positive (up to the length of the first month).',
        'nested_parent'     => 'Displaying the calendars of :parent.',
        'nested_without'    => 'Displaying all calendars that don\'t have a parent calendar. Click on a row to see the children calendars.',
        'start_offset'      => 'By default, the calendar starts on the first weekday of year 0. Changing this field influences where the calendar\'s first day is placed.',
    ],
    'hints'         => [
        'event_length'      => 'How long an event is set to last. An event can\'t span over more than two months.',
        'intercalary'       => 'Days that fall outside of the standard months and weeks. They don\'t influence week days but influence moon cycles.',
        'is_incrementing'   => 'Advancing calendars will automatically have their current date incremented at 00:00 UTC.',
        'is_recurring'      => 'An event can be set to recurring. It will reappear every year on the same date.',
        'months'            => 'Your calendar should have at least 2 months.',
        'moons'             => 'Adding moons will make them show up in the calendar on every full and new moon. If the full moon period is bigger than 10 days, thirst and third quarter moons will also be displayed.',
        'parent_calendar'   => 'Giving the calendar a parent calendar will include the reminders and weather effects of the parent calendar.',
        'reset'             => 'Always start the beginning of the month or year on the first week day.',
        'seasons'           => 'Create seasons for your calendar by providing when each of them start. Kanka will take care of the rest.',
        'weekdays'          => 'Set your weekday names. At least 2 weekdays are required.',
        'weeks'             => 'Define some names for the more important weeks of your calendar.',
        'years'             => 'Some years are so important that they have their own name.',
    ],
    'index'         => [
        'title' => 'Calendars',
    ],
    'layouts'       => [
        'month'     => 'Month',
        'monthly'   => 'Monthly by default',
        'year'      => 'Year',
        'yearly'    => 'Yearly by default',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Year Switcher',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Intercalary',
        'standard'      => 'Standard',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Full moon',
                'fullmoon_name' => ':moon full moon',
                'month'         => 'Monthly',
                'newmoon'       => 'New moon',
                'newmoon_name'  => ':moon new moon',
                'none'          => 'None',
                'unnamed_moon'  => 'Moon :number',
                'year'          => 'Yearly',
            ],
        ],
        'resets'    => [
            ''      => 'None',
            'month' => 'Monthly',
            'year'  => 'Yearly',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Intercalary Days',
        'leap_year'     => 'Leap Year',
        'months'        => 'Months',
        'weeks'         => 'Weeks',
        'years'         => 'Named Years',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Duration in days',
            'month'     => 'At the end of which month',
            'name'      => 'Name of intercalation',
        ],
        'month'         => [
            'alias' => 'Month Alias',
            'length'=> 'Days',
            'name'  => 'Month Name',
            'type'  => 'Type',
        ],
        'moon'          => [
            'fullmoon'  => 'Full moon every (days)',
            'name'      => 'Moon Name',
            'offset'    => 'First full moon offset',
        ],
        'seasons'       => [
            'day'   => 'Day start',
            'month' => 'Month start',
            'name'  => 'Season Name',
        ],
        'weeks'         => [
            'name'      => 'Week Name',
            'number'    => 'Number',
        ],
        'year'          => [
            'name'      => 'Year Name',
            'number'    => 'Year',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Colour',
        'comment'           => 'Birthday, festival, solstice',
        'date'              => 'The current date',
        'leap_year_amount'  => 'Number of days added on a leap year',
        'leap_year_month'   => 'Month on which days are added',
        'leap_year_offset'  => 'Every how many years is a leap year',
        'leap_year_start'   => 'First year that is a leap year',
        'length'            => 'Event length in days',
        'months'            => 'Number of months in a year',
        'name'              => 'Name of the calendar',
        'recurring_until'   => 'Last recurring year (leave empty for forever recurring)',
        'seasons'           => 'Number of seasons',
        'suffix'            => 'Current Era suffix (AC, BC)',
        'type'              => 'Type of the calendar',
        'weekdays'          => 'Number of days in a week',
    ],
    'show'          => [
        'missing_details'       => 'This calendar couldn\'t be displayed. Calendars need at least 2 months and 2 weekdays to render properly.',
        'moon_1first_quarter'    => ':moon first quarter',
        'moon_full'             => ':moon full moon',
        'moon_last_quarter'     => ':moon last quarter',
        'moon_new'              => ':moon new moon',
        'tabs'                  => [
            'events'    => 'Reminders',
            'weather'   => 'Weather',
        ],
    ],
    'sorters'       => [
        'after' => 'Today & after',
        'before'=> 'Today & before',
    ],
    'validators'    => [
        'moon_offset'   => 'The moon first fullmoon offset can\'t be bigger than the length of the calendar\'s first month.',
    ],
];
