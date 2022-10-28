<?php

return [
    'characters'    => [
        'title' => 'Personaggi del Luogo :name',
    ],
    'create'        => [
        'title' => 'Nuovo Luogo',
    ],
    'destroy'       => [],
    'edit'          => [],
    'events'        => [
        'title' => 'Eventi del Luogo :name',
    ],
    'families'      => [
        'title' => 'Famiglie del Luogo :name',
    ],
    'fields'        => [
        'characters'        => 'Personaggi',
        'is_map_private'    => 'Mappa Privata',
        'location'          => 'Luogo',
        'locations'         => 'Luoghi',
        'map'               => 'Mappa',
    ],
    'helpers'       => [
        'characters'    => 'Visualizza tutti i personaggi in questo luogo e nei luoghi discendenti, o semplicemente quelli che si trovano qui.',
        'descendants'   => 'La lista contiene tutti i luoghi discendenti di questo luogo, non solo quelli direttamente sotto di esso.',
        'families'      => 'I luoghi possono essere dimora di potenti famiglie.',
        'map'           => 'Aggiungere una mappa ad un luogo ti permetterà di aggiungere "Punti" sulla mappa collecandoli ad altre Entità nella campagna.',
        'organisations' => 'Visualizza tutte le organizzazioni in questo luogo e nei suoi luoghi figlio o solamente quelle direttamente presenti qui.',
    ],
    'hints'         => [
        'is_map_private'    => 'Una mappa privata sarà visibile solamente ai membri del ruolo "Proprietario" della campagna.',
    ],
    'index'         => [],
    'items'         => [],
    'journals'      => [],
    'locations'     => [
        'title' => 'Luoghi del Luogo :name',
    ],
    'map'           => [
        'actions'   => [
            'admin_mode'        => 'Abilita la Modalità Modifica',
            'big'               => 'Vista Completa',
            'confirm_delete'    => 'Sei sicuro di voler rimuovere questo punto della mappa?',
            'download'          => 'Scarica',
            'points'            => 'Modifica i Punti',
            'toggle_hide'       => 'Nascondi i Punti',
            'toggle_show'       => 'Mostra i Punti',
            'view_mode'         => 'Torna alla visualizzazione',
            'zoom_in'           => 'Zoom In',
            'zoom_out'          => 'Zoom Out',
            'zoom_reset'        => 'Reimposta lo Zoom',
        ],
        'helper'    => 'Clicca sulla mappa per aggiungere un nuovo punto ad un luogo, o clicca su un punto esistente per modificarlo o cancellarlo.',
        'helpers'   => [
            'admin' => 'Attiva per abilitare l\'aggiunta di nuovi punti con un semplice click, premi sui punti per modificarli o per spostarli.',
            'info'  => 'Più informazioni dulle mappe.',
            'label' => 'Questo punto è un\'etichetta. Niente di più, niente di meno.',
            'view'  => 'Premi su un qualsiasi punto della mappa per vederne i dettagli. Utilizza Ctrl+Zoom per aumentare o diminuire lo zoom della mappa.',
        ],
        'legend'    => 'Legenda',
        'modal'     => [
            'submit'    => 'Aggiungi',
            'title'     => 'Bersaglio del nuovo punto',
        ],
        'no_map'    => 'Per favore aggiungi una mappa del luogo',
        'points'    => [
            'empty_label'   => 'Punto Senza Nome',
            'fields'        => [
                'axis_x'    => 'Asse X',
                'axis_y'    => 'Asse Y',
                'colour'    => 'Colore',
                'icon'      => 'Icona',
                'name'      => 'Etichetta',
                'shape'     => 'Forma',
                'size'      => 'Dimensione',
            ],
            'helpers'       => [
                'location_or_name'  => 'Un punto della mappa può puntare ad un luogo esistente, o avere semplicemente una targhetta.',
            ],
            'icons'         => [
                'anchor'        => 'Ancora',
                'anvil'         => 'Incudine',
                'apple'         => 'Mela',
                'aura'          => 'Aura',
                'axe'           => 'Ascia',
                'beer'          => 'Birra',
                'biohazard'     => 'Biohazard',
                'book'          => 'Libro',
                'bridge'        => 'Ponte',
                'campfire'      => 'Fuco da campo',
                'candle'        => 'Candela',
                'capitol'       => 'Campidoglio',
                'castle-emblem' => 'Castello',
                'cat'           => 'Gatto',
                'cheese'        => 'Formaggio',
                'cog'           => 'Ingranaggio',
                'crown'         => 'Corona',
                'dead-tree'     => 'Albero Morto',
                'diamond'       => 'Diamante',
                'dragon'        => 'Drago',
                'emerald'       => 'Smeraldo',
                'entity'        => 'Immagine dell\'Entità bersaglio',
                'fire'          => 'Fuoco',
                'flask'         => 'Fiasca',
                'flower'        => 'Fiore',
                'horseshoe'     => 'Ferro di Cavallo',
                'hourglass'     => 'Clessidra',
                'hydra'         => 'Idra',
                'kaleidoscope'  => 'Caleidoscopio',
                'key'           => 'Chiave',
                'lever'         => 'Leva',
                'meat'          => 'Carne',
                'octopus'       => 'Polipo',
                'palm-tree'     => 'Palma',
                'pin'           => 'Spillo',
                'pine-tree'     => 'Pino',
                'player'        => 'Personaggio',
                'potion'        => 'Pozione',
                'reactor'       => 'Reattore',
                'repair'        => 'Riparazione',
                'sheep'         => 'Pecora',
                'shield'        => 'Scudo',
                'skull'         => 'Teschio',
                'snake'         => 'Serpente',
                'spades-card'   => 'Carta di Picche',
                'sprout'        => 'Germoglio',
                'sun'           => 'Sole',
                'tentacle'      => 'Tentacolo',
                'toast'         => 'Toast',
                'tombstone'     => 'Lapide',
                'torch'         => 'Torcia',
                'tower'         => 'Torre',
                'vase'          => 'Vaso',
                'water-drop'    => 'Acqua',
                'wooden-sign'   => 'Cartello di Legno',
                'wrench'        => 'Chiave Inglese',
            ],
            'modal'         => 'Crea o modifica un punto della mappa',
            'placeholders'  => [
                'axis_x'    => 'Posizione sinistra',
                'axis_y'    => 'Posizione in alto',
                'name'      => 'Targhetta del punto quando non c\'è un luogo',
            ],
            'return'        => 'Indietro verso :name',
            'shapes'        => [
                'circle'    => 'Cerchio',
                'custom'    => 'Personalizzato',
                'square'    => 'Quadrato',
            ],
            'sizes'         => [
                'huge'      => 'Enorme',
                'large'     => 'Grande',
                'small'     => 'Piccolo',
                'standard'  => 'Normale',
                'tiny'      => 'Piccola',
            ],
            'success'       => [
                'create'    => 'Punto della Mappa del Luogo creato.',
                'delete'    => 'Punto della Mappa del Luogo rimosso.',
                'update'    => 'Punto della Mappa del Luogo aggiornato.',
            ],
            'title'         => 'Punti della Mappa del Luogo :name',
        ],
        'success'   => 'Punto della Mappa salvato.',
    ],
    'maps'          => [
        'title' => 'Mappe del luogo :name',
    ],
    'organisations' => [
        'title' => 'Organizzazioni del Luogo :name',
    ],
    'panels'        => [
        'map'   => 'Mappa',
    ],
    'placeholders'  => [
        'location'  => 'Scegli un Luogo padre',
        'name'      => 'Nome del luogo',
        'type'      => 'Città, Regno, Rovina',
    ],
    'show'          => [
        'tabs'  => [
            'characters'    => 'Personaggi',
            'locations'     => 'Luoghi',
            'map'           => 'Mappa',
            'maps'          => 'Mappe',
        ],
    ],
];
