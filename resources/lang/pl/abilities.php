<?php

return [
    'abilities'     => [
        'title' => 'Zdolności wywodzące się od :name',
    ],
    'create'        => [
        'success'   => 'Stworzono zdolność \':name\'.',
        'title'     => 'Nowa zdolność',
    ],
    'destroy'       => [
        'success'   => 'Usunięto zdolność \':name\'.',
    ],
    'edit'          => [
        'success'   => 'Zmieniono zdolność \':name\'.',
        'title'     => 'Edycja zdolności :name',
    ],
    'entities'      => [
        'title' => 'Elementy posiadające zdolność :name',
    ],
    'fields'        => [
        'abilities' => 'Zdolności pochodne',
        'ability'   => 'Zdolność źródłowa',
        'charges'   => 'Ładunki',
        'name'      => 'Nazwa',
        'type'      => 'Rodzaj',
    ],
    'helpers'       => [
        'descendants'   => 'Na liście znajdują się wszystkie zdolności pochodzące od tej zdolności, nie tylko bezpośrednio.',
        'nested'        => 'W widoku hierarchii najpierw wyświetlane są zdolności, które nie mają źródła. Po kliknięciu na wiersz zdolności zobaczysz jej pochodne. Możesz schodzić niżej, póki nie skończą się poziomy hierarchii.',
        'nested_parent' => 'Wyświetlono zdolności pochodzące od :parent.',
        'nested_without'=> 'Wyświetlono wszystkie zdolności nie posiadające źródła. Kliknij na rząd, by wyświetlić zdolności pochodne.',
    ],
    'index'         => [
        'add'           => 'Nowa zdolność',
        'description'   => 'Dodawaj moce, czary, atuty i inne zdolności specjalne różnych elementów kampanii.',
        'header'        => 'Zdolności elementu :nazwa',
        'title'         => 'Zdolności',
    ],
    'placeholders'  => [
        'charges'   => 'Liczba ładunków zdolności. Możesz wpisać wartość cechy jako {Level}*{CHA}',
        'name'      => 'Kula ognia, alarm, podstępny atak',
        'type'      => 'Czar, umiejętność, technika bojowa',
    ],
    'show'          => [
        'tabs'  => [
            'abilities' => 'Zdolności',
            'entities'  => 'Elementy',
        ],
        'title' => 'Zdolność :name',
    ],
];
