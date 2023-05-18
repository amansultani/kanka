<?php

return [
    'actions'       => [
        'add_epoch'         => 'Añadir época',
        'add_intercalary'   => 'Añadir días intercalares',
        'add_month'         => 'Añadir mes',
        'add_moon'          => 'Añadir luna',
        'add_reminder'      => 'Añadir recordatorio',
        'add_season'        => 'Añadir estación',
        'add_weather'       => 'Añadir fenómeno climático',
        'add_week'          => 'Añadir semana con nombre',
        'add_weekday'       => 'Añadir día de la semana',
        'add_year'          => 'Añadir año con nombre',
        'set_today'         => 'Poner como día actual',
        'today'             => 'Hoy',
        'update_weather'    => 'Actualizar clima',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Ocurre cada año',
    ],
    'create'        => [
        'title' => 'Nuevo Calendario',
    ],
    'destroy'       => [],
    'edit'          => [
        'today' => 'Fecha del calendario actualizada.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Entidad existente',
            'new'       => 'Nuevo evento',
            'switch'    => 'Cambiar elección',
        ],
        'create'    => [
            'success'   => 'Evento creado en el calendario',
            'title'     => 'Añadir evento del calendario a :name',
        ],
        'destroy'   => 'Evento eliminado del calendario :name',
        'edit'      => [
            'success'   => 'Evento del calendario actualizado',
            'title'     => 'Actualizar evento del calendario de :name',
        ],
        'helpers'   => [
            'add'               => 'Añade un evento existente a este calendario.',
            'new'               => 'O crea un nuevo evento simplemente proporcionando un nombre.',
            'other_calendar'    => 'Estás editando un recordatorio del calendario :calendar.',
        ],
        'modal'     => [
            'title' => 'Añadir evento al calendario',
        ],
        'success'   => 'Evento \':event\' añadido al calendario.',
    ],
    'events'        => [
        'end'       => '(fin)',
        'filters'   => [
            'show_after'    => 'Mostrar hoy y después',
            'show_all'      => 'Mostrar todos',
            'show_before'   => 'Mostrar antes de hoy',
        ],
        'start'     => '(inicio)',
        'title'     => 'Eventos del calendario :name',
    ],
    'fields'        => [
        'calendar'              => 'Calendario superior',
        'calendars'             => 'Calendarios',
        'colour'                => 'Color',
        'comment'               => 'Comentario',
        'current_day'           => 'Día actual',
        'current_month'         => 'Mes actual',
        'current_year'          => 'Año actual',
        'date'                  => 'Fecha actual',
        'day'                   => 'Día',
        'default_layout'        => 'Diseño predeterminado',
        'has_leap_year'         => 'Tiene años bisiestos',
        'intercalary'           => 'Días intercalares',
        'is_incrementing'       => 'Fecha incremental',
        'is_recurring'          => 'Recurrente',
        'leap_year_amount'      => 'Añadir días',
        'leap_year_month'       => 'Mes',
        'leap_year_offset'      => 'Cada',
        'leap_year_start'       => 'Año bisiesto',
        'length'                => 'Duración del evento',
        'length_days'           => ':count day|:count days',
        'month'                 => 'Mes',
        'months'                => 'Meses',
        'moons'                 => 'Lunas',
        'parameters'            => 'Parámetros',
        'recurring_periodicity' => 'Periodicidad recurrente',
        'recurring_until'       => 'Recurrente hasta el año',
        'reset'                 => 'Reinicio semanal',
        'seasons'               => 'Estaciones',
        'skip_year_zero'        => 'Saltar Año Cero',
        'start_offset'          => 'Retraso inicial',
        'suffix'                => 'Sufijo',
        'week_names'            => 'Nombres de las semanas',
        'weekdays'              => 'Días de la semana',
        'year'                  => 'Año',
    ],
    'helpers'       => [
        'default_layout'    => 'Seleccione qué diseño debe usar el calendario de forma predeterminada.',
        'month_type'        => 'Los meses intercalares no usan los días de la semana, pero influyen en las lunas y las estaciones.',
        'moon_offset'       => 'De forma predeterminada, la primera luna llena aparece el primer día del año 0. Cambiar el desplazamiento alterará el cuando se muestra la primera luna llena. Este valor puede ser negativo (hasta la duración del primer mes) o positivo (hasta la duración del primer mes).',
        'nested_without'    => 'Mostrando todos los calendarios que no tienen ningún superior. Haz clic sobre una fila para mostrar los subcalendarios.',
        'start_offset'      => 'Por defecto, el calendario empieza en el primer día de la semana del año 0. En este campo puedes cambiar dónde se situará el primer día del calendario.',
    ],
    'hints'         => [
        'event_length'      => 'Cuánto dura el evento. Un evento no puede durar más de dos meses.',
        'intercalary'       => 'Días que están fuera de los meses y semanas estándar. No influyen en los días de la semana, pero afectan a los ciclos lunares.',
        'is_incrementing'   => 'Si está activado, se incrementará la fecha actual automáticamente a las 00:00h UTC.',
        'is_recurring'      => 'Si un evento es recurrente, reaparecerá cada año en la misma fecha.',
        'months'            => 'Tu calendario debe tener al menos 2 meses.',
        'moons'             => 'Si añades lunas, aparecerán en el calendario cada luna llena y nueva. Si el período entre estas es mayor que 10 días, también se mostrarán los cuartos creciente y menguante.',
        'parent_calendar'   => 'Los calendarios incluyen los recordatorios y efectos climáticos de su calendario superior.',
        'reset'             => 'Empezar siempre el siguiente mes o año en el primer día de la semana.',
        'seasons'           => 'Crea estaciones en tu calendario estableciendo cuándo empieza cada una. Kanka se encargará del resto.',
        'skip_year_zero'    => 'De forma predeterminada, el primer año del calendario es el año cero. Habilita esta opción para omitir el año cero.',
        'weekdays'          => 'Escribe los nombres de los días de la semana. Se requiere un mínimo de 2 días.',
        'weeks'             => 'Define los nombres para las semanas más importantes de tu calendario.',
        'years'             => 'Algunos años son tan importantes que tienen su propio nombre.',
    ],
    'index'         => [],
    'layouts'       => [
        'month'     => 'Mes',
        'monthly'   => 'Mensual por defecto',
        'year'      => 'Año',
        'yearly'    => 'Anual por defecto',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Conmutador de año',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Intercalar',
        'standard'      => 'Estándar',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Luna llena',
                'fullmoon_name' => 'Luna :moon llena',
                'month'         => 'Mensual',
                'newmoon'       => 'Luna nueva',
                'newmoon_name'  => 'Luna :moon nueva',
                'none'          => 'Ninguna',
                'unnamed_moon'  => 'Luna :number',
                'year'          => 'Anual',
            ],
        ],
        'resets'    => [
            ''      => 'Ninguno',
            'month' => 'Mensual',
            'year'  => 'Anual',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Días intercalares',
        'leap_year'     => 'Año bisiesto',
        'months'        => 'Meses',
        'weeks'         => 'Semanas',
        'years'         => 'Años con nombre',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Días de duración',
            'month'     => 'Al final de qué mes',
            'name'      => 'Nombre de la intercalación',
        ],
        'month'         => [
            'alias' => 'Alias del mes',
            'length'=> 'Número de días',
            'name'  => 'Nombre del mes',
            'type'  => 'Tipo',
        ],
        'moon'          => [
            'fullmoon'  => 'Luna llena cada... días',
            'name'      => 'Nombre de la luna',
            'offset'    => 'Retraso de la primera luna llena',
        ],
        'seasons'       => [
            'day'   => 'Día inicial',
            'month' => 'Mes inicial',
            'name'  => 'Nombre de la estación',
        ],
        'weeks'         => [
            'name'      => 'Nombre de la semana',
            'number'    => 'Número',
        ],
        'year'          => [
            'name'      => 'Nombre del año',
            'number'    => 'Año',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Color',
        'comment'           => 'Cumpleaños, Festival, Solsticio',
        'date'              => 'Fecha actual',
        'leap_year_amount'  => 'Número de días añadidos en un año bisiesto',
        'leap_year_month'   => 'Mes en que se añaden los días',
        'leap_year_offset'  => 'Cada cuántos años es un año bisiesto',
        'leap_year_start'   => 'Primer año que es un año bisiesto',
        'length'            => 'Días que dura el evento',
        'months'            => 'Número de meses en un año',
        'name'              => 'Nombre del calendario',
        'recurring_until'   => 'Último año recurrente (dejar vacío para que sea eterno)',
        'seasons'           => 'Número de estaciones',
        'suffix'            => 'Sufijo de la era actual (AC, BC)',
        'type'              => 'Tipo de calendario',
        'weekdays'          => 'Número de días de la semana',
    ],
    'show'          => [
        'missing_details'       => 'Este calendario no se puede mostrar. Los calendarios necesitan un mínimo de 2 meses y 2 días semanales para renderizarse correctamente.',
        'moon_1first_quarter'   => ':moon cuarto creciente',
        'moon_full'             => ':moon luna llena',
        'moon_last_quarter'     => ':moon cuarto menguante',
        'moon_new'              => ':moon luna nueva',
        'tabs'                  => [
            'events'    => 'Eventos del calendario',
            'weather'   => 'Clima',
        ],
    ],
    'sorters'       => [
        'after' => 'De hoy en adelante',
        'before'=> 'Hasta hoy',
    ],
    'validators'    => [
        'moon_offset'   => 'El desplazamiento de la primera luna llena de la luna no puede ser mayor que la duración del primer mes del calendario.',
    ],
];
