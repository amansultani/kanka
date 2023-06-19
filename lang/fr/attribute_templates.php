<?php

return [
    'attribute_templates'   => [],
    'create'                => [
        'title' => 'Créer un nouveau Modèle d\'attribut',
    ],
    'destroy'               => [],
    'edit'                  => [],
    'fields'                => [
        'attributes'    => 'Attributs',
        'auto_apply'    => 'Auto-appliquer',
    ],
    'hints'                 => [
        'automatic'                 => 'Attributs automatiquement appliqués depuis le modèle :link.',
        'entity_type'               => 'Si défini, lors de la création d\'une nouvelle entité de ce type, ce modèle d\'attribut ainsi que ses parents seront automatiquement appliqués.',
        'parent_attribute_template' => 'Ce modèle d\'attribut peut être l\'enfant d\'un autre modèle d\'attribut. Lorsqu\'un modèle d\'attribut est appliqué, celui-ci ainsi que tous ses descendants seront aussi appliqués.',
    ],
    'index'                 => [],
    'placeholders'          => [
        'name'  => 'Nom du modèle d\'attribut',
    ],
    'show'                  => [
        'tabs'  => [
            'attributes'    => 'Attributs',
        ],
    ],
];
