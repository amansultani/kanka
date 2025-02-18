<?php

return [
    'children'      => [
        'actions'   => [
            'add'   => 'Dodaj nową etykietę',
        ],
    ],
    'create'        => [
        'title' => 'Nowa etykieta',
    ],
    'destroy'       => [],
    'edit'          => [],
    'fields'        => [
        'children'          => 'Pochodne',
        'is_auto_applied'   => 'Dodawaj automatycznie',
        'is_hidden'         => 'Ukryj w nagłówkach i dymkach',
    ],
    'helpers'       => [
        'nested_without'    => 'Wyświetlono wszystkie etykiety nieposiadające źródła. Kliknij na rząd, by wyświetlić etykiety pochodne.',
        'no_children'       => 'Obecnie nie oznaczono tą etykietą żadnych elementów.',
    ],
    'hints'         => [
        'children'          => 'Na liście znajdują się wszystkie elementy posiadające tę etykietę i etykiety pochodne.',
        'is_auto_applied'   => 'Zaznacz by dodawać tę etykietę automatycznie do nowych elementów.',
        'is_hidden'         => 'Po zaznaczeniu, ta etykieta nie będzie wyświetlana w nagłówku i dymkach elementu',
        'tag'               => 'Na liście znajdują się wszystkie elementy posiadające tę etykietę.',
    ],
    'index'         => [],
    'placeholders'  => [
        'type'  => 'Wiedza tajemna, wojna, historia, religia, weksylologia',
    ],
    'show'          => [
        'tabs'  => [
            'children'  => 'Pochodne',
        ],
    ],
    'tags'          => [],
    'transfer'      => [
        'description'   => 'Zamienia tę etykietę na inną u wszystkich posiadających ją elementów.',
        'fail'          => 'Nie udało się zamienić etykiety :tag na nową etykietę :newTag.',
        'success'       => 'Zamieniono etykietę :tag na nową etykietę :newTag.',
        'title'         => 'Zamiana :name',
        'transfer'      => 'Zamień',
    ],
];
