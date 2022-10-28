<?php

return [
    'create'        => [
        'title' => 'Nova familia',
    ],
    'destroy'       => [],
    'edit'          => [],
    'families'      => [
        'title' => 'Familias da familia :name',
    ],
    'fields'        => [
        'families'  => 'Subfamilias',
        'family'    => 'Familia superior',
        'members'   => 'Integrantes',
    ],
    'helpers'       => [
        'descendants'       => 'Esta lista contén todas as familias que son descendentes desta familia, non só as que están no nivel directamente inferior.',
        'nested_without'    => 'Mostrando todas as familias que non teñen unha familia superior. Fai clic nunha fila para ver as súas subfamilias.',
    ],
    'hints'         => [
        'members'   => 'As persoas integrantes dunha familia móstranse aquí. Unha personaxe pode ser engadida a unha familia editando esa personaxe e usando o campo "Familia".',
    ],
    'index'         => [],
    'members'       => [
        'helpers'   => [
            'all_members'       => 'A seguinte lista contén todas as personaxes que están nesta familia ou nalgunha das súas subfamilias.',
            'direct_members'    => 'Algunhas familias teñen integrantes que a lideraron ou a fixeron famosa. Aquí móstranse as personaxes que están directamente nesta familia.',
        ],
        'title'     => 'Integrantes da familia :name',
    ],
    'placeholders'  => [
        'location'  => 'Elixe un lugar',
        'name'      => 'Nome da familia',
        'type'      => 'Real, nobre, extinta...',
    ],
    'show'          => [
        'tabs'  => [
            'all_members'   => 'Todas as integrantes',
            'families'      => 'Familias',
            'members'       => 'Integrantes',
        ],
    ],
];
