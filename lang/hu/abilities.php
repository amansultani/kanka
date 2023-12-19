<?php

return [
    'abilities'     => [],
    'children'      => [
        'description'   => 'Az entitásoknak megvan a képesség',
        'title'         => ':name képesség entitások',
    ],
    'create'        => [
        'title' => 'Új képesség',
    ],
    'destroy'       => [],
    'edit'          => [],
    'entities'      => [],
    'fields'        => [
        'charges'   => 'Aktiválások száma',
    ],
    'helpers'       => [
        'nested_without'    => 'Minden olyan képesség kijelzése, amelynek nincs szülő képessége. Klikkelj egy sorra, hogy lásd a gyermekképességeit.',
    ],
    'index'         => [],
    'placeholders'  => [
        'charges'   => 'Aktiválások száma. Az attribútumokra az alábbi módon hivatkozhatsz: {Szint}*{Karizma}',
        'name'      => 'Tűzgolyó, riasztás, ravasz csapás',
        'type'      => 'Varázslat, képesség, támadás',
    ],
    'show'          => [
        'tabs'  => [
            'entities'  => 'Entitások',
        ],
    ],
];
