<?php

return [
    'create'        => [
        'title' => 'Новик кидок кісток',
    ],
    'destroy'       => [
        'dice_roll' => 'Кидок кісток видалено.',
    ],
    'fields'        => [
        'created_at'    => 'Кинуто о',
        'parameters'    => 'Параметри',
        'results'       => 'Результати',
        'rolls'         => 'Кидки',
    ],
    'hints'         => [
        'parameters'    => 'Які можливості кісток доступні?',
    ],
    'index'         => [
        'actions'   => [
            'dice'      => 'Кидки кісток',
            'results'   => 'Результати',
        ],
    ],
    'placeholders'  => [
        'dice_roll' => 'Кидок кісток',
        'name'      => 'Назва кидка кісток',
        'parameters'=> '4d6 + 3',
    ],
    'results'       => [
        'actions'   => [
            'add'   => 'Кинути',
        ],
        'error'     => 'Невдалий кидок. Неможливо обробити параметри.',
        'fields'    => [
            'creator'   => 'Автор',
            'date'      => 'Дата',
            'result'    => 'Результат',
        ],
        'hint'      => 'Усі кидки зроблено у цьому шаблоні кидків.',
        'success'   => 'Кістки кинуто.',
    ],
    'show'          => [
        'tabs'  => [
            'results'   => 'Результати',
        ],
    ],
];
