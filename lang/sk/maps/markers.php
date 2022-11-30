<?php

return [
    'actions'       => [
        'entry'             => 'Pre túto značku zapíš vlastné vstupné políčko.',
        'remove'            => 'Odstrániť značku',
        'reset-polygon'     => 'Resetovať umiestnenie',
        'save_and_explore'  => 'Uložiť a otvoriť',
        'start-drawing'     => 'Zapnúť kreslenie',
        'update'            => 'Upraviť značku',
    ],
    'bulks'         => [
        'delete'    => '{1} Odstránená :count značka.|[2,4] Odstránené :count značky.|[5,*] Odstránených :count značiek.',
        'patch'     => '{1} Aktualizovaná :count značka.|[2,4] Aktualizované :count značky.|[5,*] Aktualizovaných :count značiek.',
    ],
    'create'        => [
        'success'   => 'Značka :name vytvorená.',
        'title'     => 'Nová značka',
    ],
    'delete'        => [
        'success'   => 'Značka :name odstránená.',
    ],
    'edit'          => [
        'success'   => 'Značka :name aktualizovaná.',
        'title'     => 'Upraviť značku :name',
    ],
    'fields'        => [
        'circle_radius' => 'Polomer kruhu',
        'copy_elements' => 'Kopírovať prvky',
        'custom_icon'   => 'Vlastný symbol',
        'custom_shape'  => 'Vlastný tvar',
        'font_colour'   => 'Farba symbolu',
        'group'         => 'Skupina značky',
        'icon'          => 'Symbol',
        'is_draggable'  => 'Premiestniteľná',
        'latitude'      => 'Zemepisná šírka',
        'longitude'     => 'Zemepisná dĺžka',
        'opacity'       => 'Nepriehľadnosť',
        'pin_size'      => 'Veľkosť značky',
        'polygon_style' => [
            'stroke'            => 'Farba ťahu',
            'stroke-opacity'    => 'Nepriehľadnosť ťahu',
            'stroke-width'      => 'Hrúbka ťahu',
        ],
    ],
    'helpers'       => [
        'base'                      => 'Pridaj značky na mapu kliknutím na hociktorý bod na nej.',
        'copy_elements'             => 'Kopírovať skupiny, vrstvy a značky.',
        'copy_elements_to_campaign' => 'Kopírovať skupiny, vrstvy a značky na mapách. Značky prepojené s objektami budú konverované na štandardné značky.',
        'custom_radius'             => 'Vyber si vlastnú veľkosť z možností v menu, ak chceš definovať veľkosť.',
        'draggable'                 => 'Aktivovaním umožníš premiestnenie značky v Prieskumníkovi.',
        'label'                     => 'Popis sa zobrazuje ako odsek textu na mape. Jeho obsah bude názov značky daného objektu.',
        'polygon'                   => [
            'edit'  => 'Klikni na mapu, ak chceš pridať danú pozíciu medzi koordináty viacuholníka.',
        ],
    ],
    'icons'         => [
        'custom'        => 'Vlastný',
        'entity'        => 'Objekt',
        'exclamation'   => 'Výkričník',
        'marker'        => 'Značka',
        'question'      => 'Otáznik',
    ],
    'index'         => [
        'title' => 'Značky :name',
    ],
    'pitches'       => [
        'poly'  => 'Nakresli vlastné mnohouholníkové tvary, ktoré stvárňujú hranice alebo nepravidelné objekty.',
    ],
    'placeholders'  => [
        'custom_icon'   => 'Vyskúšaj :example1 alebo :example2',
        'custom_shape'  => '100,100 200,240 340,110',
        'name'          => 'Povinný ak nie je zvolený žiaden objekt',
    ],
    'shapes'        => [
        '0' => 'Kruh',
        '1' => 'Štvorec',
        '2' => 'Trojuholník',
        '3' => 'Vlastný',
    ],
    'sizes'         => [
        '0' => 'Miniatúrny',
        '1' => 'Štandardný',
        '2' => 'Malý',
        '3' => 'Veľký',
        '4' => 'Obrovský',
    ],
    'tabs'          => [
        'circle'    => 'Kruh',
        'label'     => 'Menovka',
        'marker'    => 'Značka',
        'polygon'   => 'Viacuholník',
    ],
];
