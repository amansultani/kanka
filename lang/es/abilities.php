<?php

return [
    'abilities'     => [],
    'children'      => [
        'description'   => 'Entidades con esta habilidad',
        'title'         => 'Entidades de la habilidad :name',
    ],
    'create'        => [
        'title' => 'Nueva habilidad',
    ],
    'destroy'       => [],
    'edit'          => [],
    'entities'      => [],
    'fields'        => [
        'charges'   => 'Usos',
    ],
    'helpers'       => [
        'nested_without'    => 'Mostrando todas las habilidades que no tienen superior. Haz clic sobre una fila para mostrar las habilidades anidadas.',
    ],
    'index'         => [],
    'placeholders'  => [
        'charges'   => 'Cantidad de usos. Puedes hacer referencia a un atributo con {Nivel}*{CHA}',
        'name'      => 'Bola de fuego, Alerta, Puñalada trasera',
        'type'      => 'Hechizo, Proeza, Ataque',
    ],
    'reorder'       => [
        'parentless'    => 'Sin padre',
        'success'       => 'Habilidades reordenadas exitosamente.',
        'title'         => 'Reordenar las habilidades',
    ],
    'show'          => [
        'tabs'  => [
            'entities'  => 'Entidades',
            'reorder'   => 'Reordenar Habilidades',
        ],
    ],
];
