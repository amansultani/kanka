<?php

return [
    'children'      => [
        'actions'       => [
            'attach'   => 'Attach to entities',
        ],
        'create'        => [
            'attach_success'   => '{1} Attached the ability :name to :count entity.|[2,*] Attached the ability :name to :count entities.',
            'modal'            => 'Attach :name to entities',
        ],
        'description'   => 'Entities having the ability',
        'title'         => 'Ability :name Entities',
    ],
    'create'        => [
        'title' => 'New Ability',
    ],
    'fields'        => [
        'charges'   => 'Charges',
    ],
    'helpers'       => [
        'nested_without'    => 'Displaying all abilities that don\'t have a parent ability. Click on a row to see the children abilities.',
    ],
    'placeholders'  => [
        'charges'   => 'Amount of charges. Reference attributes with {Level}*{CHA}',
        'name'      => 'Fireball, Alert, Cunning Strike',
        'type'      => 'Spell, Feat, Attack',
    ],
    'reorder'       => [
        'parentless'    => 'No Parent',
        'success'       => 'Abilities successfully reordered.',
        'title'         => 'Reorder the abilities',
    ],
    'show'          => [
        'tabs'  => [
            'entities'  => 'Entities',
            'reorder'   => 'Reorder Abilities',
        ],
    ],
];
