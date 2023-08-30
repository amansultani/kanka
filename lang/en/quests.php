<?php

return [
    'create'        => [
        'title' => 'New Quest',
    ],
    'elements'      => [
        'create'    => [
            'success'   => 'Element :entity added to the quest.',
            'title'     => 'New element for :name',
        ],
        'destroy'   => [
            'success'   => 'Element :entity removed.',
        ],
        'edit'      => [
            'success'   => 'Element :entity updated.',
            'title'     => 'Update element for :name',
        ],
        'fields'    => [
            'description'       => 'Description',
            'entity_or_name'    => 'Either select either an entity of the campaign, or give a name for this element.',
            'name'              => 'Name',
        ],
    ],
    'fields'        => [
        'copy_elements' => 'Copy elements attached to the quest',
        'date'          => 'Date',
        'element_role'  => 'Role',
        'instigator'    => 'Instigator',
        'is_completed'  => 'Completed',
        'role'          => 'Role',
    ],
    'helpers'       => [
        'is_completed'      => 'The quest is considered as completed.',
        'nested_without'    => 'Displaying all quests that don\'t have a parent quest. Click on a row to see the children quests.',
    ],
    'hints'         => [
        'quests'    => 'A web of interlocking quests can be built using the Parent Quest field.',
    ],
    'placeholders'  => [
        'date'      => 'Real world date for the quest',
        'entity'    => 'Name of an element from the quest',
        'role'      => 'This entity\'s role in the quest',
        'type'      => 'Character Arc, Sidequest, Main',
    ],
    'show'          => [
        'actions'   => [
            'add_element'   => 'Add an element',
        ],
        'tabs'      => [
            'elements'  => 'Elements',
        ],
    ],
];
