<?php

return [
    'actions'       => [
        'add_epoch'         => 'Engadir unha época',
        'add_intercalary'   => 'Engadir días intercalares',
        'add_month'         => 'Engadir un mes',
        'add_moon'          => 'Engadir unha lúa',
        'add_reminder'      => 'Engadir un lebrete',
        'add_season'        => 'Engadir unha estación',
        'add_weather'       => 'Engadir fenómeno climático',
        'add_week'          => 'Engadir unha semana con nome',
        'add_weekday'       => 'Engadir un día da semana',
        'add_year'          => 'Engadir un nome de ano',
        'set_today'         => 'Establecer como día actual',
        'today'             => 'Hoxe',
        'update_weather'    => 'Actualizar clima',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Acontece cada ano',
    ],
    'create'        => [
        'title' => 'Novo calendario',
    ],
    'destroy'       => [],
    'edit'          => [
        'today' => 'Data do calendario actualizada.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Entidade existente',
            'new'       => 'Novo evento',
            'switch'    => 'Cambiar elección',
        ],
        'create'    => [
            'success'   => 'Evento de calendario creado.',
            'title'     => 'Engadir un evento no calendario ":name"',
        ],
        'destroy'   => 'Evento eliminado do calendario ":name".',
        'edit'      => [
            'success'   => 'Evento do calendario actualizado.',
            'title'     => 'Actualizar evento do calendario ":name"',
        ],
        'helpers'   => [
            'add'               => 'Engade un evento existente a este calendario.',
            'new'               => 'Ou crea un novo evento simplemente poñéndolle un nome.',
            'other_calendar'    => 'Estás editando un lembrete que está no calendario ":calendar".',
        ],
        'modal'     => [
            'title' => 'Engadir un evento ao calendario',
        ],
        'success'   => 'Evento ":event" engadido ao calendario.',
    ],
    'events'        => [
        'filters'   => [
            'show_after'    => 'Mostrar hoxe e posteriores',
            'show_all'      => 'Mostrar todos',
            'show_before'   => 'Mostrar anteriores a hoxe',
        ],
        'title'     => 'Eventos do calendario ":name"',
    ],
    'fields'        => [
        'calendar'              => 'Calendario pai',
        'calendars'             => 'Calendarios',
        'colour'                => 'Cor',
        'comment'               => 'Comentario',
        'current_day'           => 'Día actual',
        'current_month'         => 'Mes actual',
        'current_year'          => 'Ano actual',
        'date'                  => 'Data actual',
        'day'                   => 'Día',
        'default_layout'        => 'Disposición por defecto',
        'has_leap_year'         => 'Ten anos bisestos',
        'intercalary'           => 'Días intercalares',
        'is_incrementing'       => 'Data incremental',
        'is_recurring'          => 'Recorrente',
        'leap_year_amount'      => 'Engadir días',
        'leap_year_month'       => 'Mes',
        'leap_year_offset'      => 'Cada',
        'leap_year_start'       => 'Ano bisesto',
        'length'                => 'Duración do evento',
        'length_days'           => ':count día|:count días',
        'month'                 => 'Mes',
        'months'                => 'Meses',
        'moons'                 => 'Lúas',
        'parameters'            => 'Parámetros',
        'recurring_periodicity' => 'Periodo de recorrencia',
        'recurring_until'       => 'Recorrente ata o ano',
        'reset'                 => 'Reinicio semanal',
        'seasons'               => 'Estacións',
        'start_offset'          => 'Retraso inicial',
        'suffix'                => 'Sufixo',
        'week_names'            => 'Nomes da semana',
        'weekdays'              => 'Días da semana',
        'year'                  => 'Ano',
    ],
    'helpers'       => [
        'default_layout'    => 'Escolle a disposición que o calendario mostrará por defecto.',
        'month_type'        => 'Os meses intercalares non usan días da semana, pero inflúen nas lúas e nas estacións.',
        'moon_offset'       => 'Por defecto, a primeira lúa chea será no primeiro día do ano 0. Cambiar o seu retraso alterará cando aparece a primeira lúa chea. Este valor pode ser negativo ou positivo (ata a lonxitude do primeiro mes).',
        'nested_without'    => 'Mostrando todos os calendarios que non teñen un calendario pai. Fai clic nunha fila para ver os seus descendentes.',
        'start_offset'      => 'Por defecto, os calendarios comezan no primeiro día da semana no ano 0. Con este campo podes cambiar en que día comeza o calendario.',
    ],
    'hints'         => [
        'event_length'      => 'Canto tempo dura un evento. Un evento non pode durar máis de dous meses.',
        'intercalary'       => 'Días que están fóra dos meses e semanas estándar. Non inflúen nos días da semana pero si nos ciclos luares.',
        'is_incrementing'   => 'Activar a "Data incremental" fai que o día actual do calendario cambie automáticamente ás 00:00 UTC de cada día real.',
        'is_recurring'      => 'Un evento marcado como recorrente reaparecerá cada ano na mesma data.',
        'months'            => 'O teu calendario debe ter polo menos dous meses.',
        'moons'             => 'Ao engadir lúas, as súas correspondentes lúas cheas e lúas novas mostraranse no calendario. Se o periodo luar é maior que 10 días, tamén serán mostrados os cuartos crecentes e minguantes.',
        'parent_calendar'   => 'Os lembretes e fenómenos climáticos do calendario pai serán incluídos automaticamente nos seus subcalendarios.',
        'reset'             => 'O inicio do mes ou do ano será sempre no primeiro día da semana.',
        'seasons'           => 'Crea estacións para o teu calendario establecendo cando comeza cada unha. Kanka encargarase do resto.',
        'weekdays'          => 'Establece os nomes dos días da semana. Requírense polo menos 2 días da semana.',
        'weeks'             => 'Define nomes para semanas de especial importancia no teu calendario.',
        'years'             => 'Algúns anos son tan importantes que teñen o seu propio nome.',
    ],
    'index'         => [],
    'layouts'       => [
        'month'     => 'Mes',
        'monthly'   => 'Mensual por defecto',
        'year'      => 'Ano',
        'yearly'    => 'Anual por defecto',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Cambiador de ano',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Intercalar',
        'standard'      => 'Estándar',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Lúa chea',
                'fullmoon_name' => 'Lúa :moon chea',
                'month'         => 'Mensual',
                'newmoon'       => 'Lúa nova',
                'newmoon_name'  => 'Lúa :moon nova',
                'none'          => 'Non',
                'unnamed_moon'  => 'Lúa :number',
                'year'          => 'Anual',
            ],
        ],
        'resets'    => [
            ''      => 'Ningún',
            'month' => 'Mensual',
            'year'  => 'Anual',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Días intercalares',
        'leap_year'     => 'Ano bisesto',
        'months'        => 'Meses',
        'weeks'         => 'Semanas',
        'years'         => 'Anos con nome',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Duración en días',
            'month'     => 'Ao final de que mes',
            'name'      => 'Nome da intercalación',
        ],
        'month'         => [
            'alias' => 'Alias do mes',
            'length'=> 'Número de días',
            'name'  => 'Nome do mes',
            'type'  => 'Tipo',
        ],
        'moon'          => [
            'fullmoon'  => 'Periodo luar (días)',
            'name'      => 'Nome da lúa',
            'offset'    => 'Retraso da primeira lúa chea',
        ],
        'seasons'       => [
            'day'   => 'Día de inicio',
            'month' => 'Mes de inicio',
            'name'  => 'Nome da estación',
        ],
        'weeks'         => [
            'name'      => 'Nome da semana',
            'number'    => 'Número',
        ],
        'year'          => [
            'name'      => 'Nome do ano',
            'number'    => 'Ano',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Cor',
        'comment'           => 'Aniversario, festival, solsticio...',
        'date'              => 'Data actual',
        'leap_year_amount'  => 'Número de días adicionales nun ano bisesto',
        'leap_year_month'   => 'Mes ao que se engaden días',
        'leap_year_offset'  => 'Cada cantos anos é un ano bisesto',
        'leap_year_start'   => 'Primeiro ano que é bisesto',
        'length'            => 'Duración do evento en días',
        'months'            => 'Número de meses nun ano',
        'name'              => 'Nome do calendario',
        'recurring_until'   => 'Último ano de recorrencia (deixa en blanco para que sexa recorrente ata sempre)',
        'seasons'           => 'Número de estacións',
        'suffix'            => 'Sufixo da era actual (AC, BC...)',
        'type'              => 'Tipo do calendario',
        'weekdays'          => 'Número de días nunha semana',
    ],
    'show'          => [
        'missing_details'       => 'Este calendario non puido ser mostrado. Os calendarios precisan polo menos 2 meses e 2 días da semana para ser mostrados correctamente.',
        'moon_1first_quarter'   => ':moon en primeiro cuarto',
        'moon_full'             => 'Lúa :moon chea',
        'moon_last_quarter'     => ':moon en último cuarto',
        'moon_new'              => 'Lúa :moon nova',
        'tabs'                  => [
            'events'    => 'Eventos do calendario',
            'weather'   => 'Clima',
        ],
    ],
    'sorters'       => [
        'after' => 'De hoxe en adiante',
        'before'=> 'De hoxe cara atrás',
    ],
    'validators'    => [
        'moon_offset'   => 'O retraso da primeira lúa chea non pode ser maior que a lonxitude do primeiro mes do calendario.',
    ],
];
