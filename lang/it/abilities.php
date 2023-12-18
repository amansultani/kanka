<?php

return [
    'abilities'     => [],
    'children'      => [
        'description'   => 'Entità che hanno l\'abilità',
        'title'         => 'Abilità :name Entità',
    ],
    'create'        => [
        'title' => 'Nuova Abilità',
    ],
    'destroy'       => [],
    'edit'          => [],
    'entities'      => [],
    'fields'        => [
        'charges'   => 'Cariche',
    ],
    'helpers'       => [
        'nested_without'    => 'Visualizzazione di tutte le abilità che non hanno un\'abilità genitore. Clicca su una riga per vedere le abilità figlie.',
    ],
    'index'         => [],
    'placeholders'  => [
        'charges'   => 'Quantità di cariche. Fai riferimento agli attributi con {Level}*{CHA}',
        'name'      => 'Palla di Fuoco, Allerta, Colpo Scaltro',
        'type'      => 'Incantesimo, Talento, Attacco',
    ],
    'reorder'       => [
        'parentless'    => 'Nessuno Genitore',
        'success'       => 'Abilità riordinate con successo.',
        'title'         => 'Riordina le abilità',
    ],
    'show'          => [
        'tabs'  => [
            'entities'  => 'Entità',
            'reorder'   => 'Riordina le abilità',
        ],
    ],
];
