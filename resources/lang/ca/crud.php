<?php

return [
    'actions'                   => [
        'actions'           => 'Accions',
        'apply'             => 'Aplica',
        'back'              => 'Enrere',
        'bulk_templates'    => 'Aplica una plantilla d\'atributs',
        'copy'              => 'Copia',
        'copy_mention'      => 'Copia la menció [ ]',
        'copy_to_campaign'  => 'Copia a la campanya',
        'explore_view'      => 'Vista de niu',
        'export'            => 'Exporta',
        'find_out_more'     => 'Saber-ne més',
        'go_to'             => 'Ves a :name',
        'json-export'       => 'Exporta (JSON)',
        'manage_links'      => 'Configura els enllaços',
        'move'              => 'Mou',
        'new'               => 'Nou',
        'next'              => 'Següent',
        'reset'             => 'Restableix',
    ],
    'add'                       => 'Afegeix',
    'alerts'                    => [
        'copy_attribute'    => 'S\'ha copiat la menció de l\'atribut.',
        'copy_mention'      => 'S\'ha copiat la menció avançada de l\'entitat al porta-retalls.',
    ],
    'attributes'                => [
        'actions'       => [
            'apply_template'    => 'Aplica una plantilla d\'atributs',
            'manage'            => 'Administra',
            'more'              => 'Més opcions',
            'remove_all'        => 'Elimina\'ls tots',
        ],
        'errors'        => [
            'loop'  => 'Hi ha un bucle infinit en aquest càlcul d\'atributs!',
        ],
        'fields'        => [
            'attribute'             => 'Atribut',
            'community_templates'   => 'Plantilles de la comunitat',
            'is_private'            => 'Atributs privats',
            'is_star'               => 'Fixat',
            'template'              => 'Plantilla',
            'value'                 => 'Valor',
        ],
        'helpers'       => [
            'delete_all'    => '¿Segur que voleu eliminar tots els atributs d\'aquesta entitat?',
        ],
        'hints'         => [
            'is_private'    => 'Podeu amagar tots els atributs d\'una entitat a tots els membres no administradors fent-la privada.',
        ],
        'index'         => [
            'success'   => 'S\'han actualitzat els atributs de :entity.',
            'title'     => 'Atributs de :name',
        ],
        'placeholders'  => [
            'attribute' => 'Nombre de conquestes, Iniciativa, Població...',
            'block'     => 'Nom del bloc',
            'checkbox'  => 'Nom de la casella',
            'icon'      => [
                'class' => 'Classe de FontAwesome o RPG Awesome: fas fa-users',
                'name'  => 'Nom de la icona',
            ],
            'random'    => [
                'name'  => 'Nom de l\'atribut',
                'value' => '1-100 o una llista de valors separats per comes',
            ],
            'section'   => 'Nom de la secció',
            'template'  => 'Selecciona una plantilla',
            'value'     => 'Valor de l\'atribut',
        ],
        'template'      => [
            'success'   => 'S\'ha aplicat la plantilla d\'atributs :name a :entity',
            'title'     => 'Aplica una plantilla d\'atributs a :name',
        ],
        'types'         => [
            'attribute' => 'Atribut',
            'block'     => 'Bloc',
            'checkbox'  => 'Casella',
            'icon'      => 'Icona',
            'random'    => 'Aleatori',
            'section'   => 'Secció',
            'text'      => 'Text multilínia',
        ],
        'visibility'    => [
            'entry'     => 'L\'atribut es mostra al menú de l\'entitat.',
            'private'   => 'L\'atribut només és visible per a membres amb el rol "Admin".',
            'public'    => 'L\'atribut és visible per a tots els membres.',
            'tab'       => 'L\'atribut només es mostra a la pestanya d\'atributs.',
        ],
    ],
    'boosted'                   => 'millorada',
    'boosted_campaigns'         => 'Campanyes millorades',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Edita i etiqueta en grup',
        ],
        'age'           => [
            'helper'    => 'Utilitza + i - abans del número per a canviar l\'edat.',
        ],
        'delete'        => [
            'title'     => 'Eliminació de múltiples entitats',
            'warning'   => '¿Segur que voleu eliminar les entitats seleccionades?',
        ],
        'edit'          => [
            'tagging'   => 'Acció per a les etiquetes',
            'tags'      => [
                'add'       => 'Afegeix',
                'remove'    => 'Elimina',
            ],
            'title'     => 'Edició de múltiples entitats',
        ],
        'errors'        => [
            'admin'     => 'Només els administradors de la campanya poden canviar l\'estatus privat de les entitats.',
            'general'   => 'Hi ha hagut un error en processar l\'acció. Torneu a intentar-ho o contacteu-nos si el problema persisteix. Missatge d\'error: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Ignora',
            ],
            'helpers'   => [
                'override'  => 'Si està seleccionat, els permisos de les entitats seleccionades s\'ignoraran i utilitzaran aquesta configuració. Si no està seleccionat, aquests permisos s\'afegiran als existents.',
            ],
            'title'     => 'Canvia els permisos a diverses entitats',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count entitat copiada a :campaign.|[2,*] :count entitats copiades a :campaign.',
            'editing'           => '{1} S\'ha actualitzat :count entitat.|[2,*] S\'han actualitzat :count entitats.',
            'permissions'       => '{1} S\'han canviat els permisos a :count entitat.|[2,*] S\'han canviat els permisos a :count entitats.',
            'private'           => '{1} Ara :count entitat és privada.|[2,*] Ara :count entitats són privades.',
            'public'            => '{1} Ara :count entitat és visible.|[2,*] Ara :count entitats són visibles.',
            'templates'         => '{1} S\'ha aplicat la plantilla a :count entitats.|[2,*] S\'ha aplicat la plantilla a :count entitats.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Aplica una plantilla a múltiples entitats',
    ],
    'cancel'                    => 'Cancela',
    'click_modal'               => [
        'close'     => 'Tanca',
        'confirm'   => 'Confirma',
        'title'     => 'Confirma l\'acció',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Copia entitats a una altra campanya',
        'panel'         => 'Copia',
        'title'         => 'Copia «:name» a una altra campaña',
    ],
    'create'                    => 'Crea',
    'datagrid'                  => [
        'empty' => 'Encara no hi ha res a mostrar.',
    ],
    'delete_modal'              => [
        'close'         => 'Tanca',
        'delete'        => 'Elimina',
        'description'   => '¿Segur que voleu eliminar :tag?',
        'mirrored'      => 'Elimina la relació emmirallada',
        'title'         => 'Confirmació de l\'eliminació',
    ],
    'destroy_many'              => [
        'success'   => '{1} S\'ha eliminat :count entitat.|[2,*] S\'han eliminat :count entitats.',
    ],
    'edit'                      => 'Edita',
    'errors'                    => [
        'boosted'                       => 'Aquesta funció només està disponible per a les campanyes millorades.',
        'boosted_campaigns'             => 'Aquesta funcionalitat només està disponible per a les :boosted.',
        'node_must_not_be_a_descendant' => 'Node invàlid (etiqueta, localització superior): seria un descendent de si mateix.',
        'unavailable_feature'           => 'Funcionalitat no disponible',
    ],
    'events'                    => [
        'hint'  => 'Aquí es mostren els esdeveniments del calendari associats a aquesta entitat.',
    ],
    'export'                    => 'Exporta',
    'fields'                    => [
        'ability'               => 'Habilitat',
        'attribute_template'    => 'Plantilla d\'atributs',
        'calendar'              => 'Calendari',
        'calendar_date'         => 'Data del calendari',
        'character'             => 'Personatge',
        'colour'                => 'Color',
        'copy_abilities'        => 'Copia les habilitats',
        'copy_attributes'       => 'Copia els atributs',
        'copy_inventory'        => 'Copia l\'inventori',
        'copy_links'            => 'Copia els enllaços',
        'copy_notes'            => 'Copia les anotacions de l\'entitat',
        'creator'               => 'Creador',
        'dice_roll'             => 'Tirada de daus',
        'entity'                => 'Entitat',
        'entity_type'           => 'Tipus d\'entitat',
        'entry'                 => 'Entrada',
        'event'                 => 'Esdeveniment',
        'excerpt'               => 'Extracte',
        'family'                => 'Família',
        'files'                 => 'Fitxers',
        'gallery_image'         => 'Galeria d\'imatges',
        'has_entity_files'      => 'Té fitxers',
        'has_entity_notes'      => 'Té anotacions',
        'has_image'             => 'Té imatge',
        'header_image'          => 'Imatge de capçalera',
        'image'                 => 'Imatge',
        'is_private'            => 'Privada',
        'is_private_v2'         => 'Mostra-ho només als membres del :admin-role de la campanya.',
        'is_star'               => 'Fixada',
        'item'                  => 'Objecte',
        'location'              => 'Localització',
        'map'                   => 'Mapa',
        'name'                  => 'Nom',
        'organisation'          => 'Organització',
        'position'              => 'Posició',
        'privacy'               => 'Privacitat',
        'race'                  => 'Raça',
        'tag'                   => 'Etiqueta',
        'tags'                  => 'Etiquetes',
        'timeline'              => 'Línia de temps',
        'tooltip'               => 'Descripció emergent',
        'type'                  => 'Tipus',
        'visibility'            => 'Visibilitat',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Feu clic per a afegir o arrossegueu un fitxer',
            'manage'    => 'Administra els fitxers de l\'entitat',
        ],
        'errors'    => [
            'max'       => 'Heu arribat al nombre màxim (:max) de fitxers per a aquesta entitat.',
            'no_files'  => 'No hi ha fitxers.',
        ],
        'files'     => 'Fitxers pujats',
        'hints'     => [
            'limit'         => 'Cada entitat pot tenir un màxim de :max fitxers.',
            'limitations'   => 'Formats acceptats: JPG, PNG, GIF i PDF. Tamany màxim del fitxer: :size.',
        ],
        'title'     => 'Fitxers de :name',
    ],
    'filter'                    => 'Filtra',
    'filters'                   => [
        'all'       => 'Mostra tots els descendents',
        'clear'     => 'Treu els filtres',
        'direct'    => 'Filtra només els descendents directes',
        'filtered'  => 'Es mostren :count de :total :entity.',
        'hide'      => 'Amaga els filtres',
        'options'   => [
            'exclude'   => 'Exclou',
            'include'   => 'Inclou',
            'none'      => 'Res',
        ],
        'show'      => 'Mostra els filtres',
        'sorting'   => [
            'asc'       => 'Ascendent per :field',
            'desc'      => 'Descendent per :field',
            'helper'    => 'Controla en quin ordre apareixen els resultats.',
        ],
        'title'     => 'Filtres',
    ],
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Afegeix una data del calendari',
        ],
        'copy_options'  => 'Opcions de còpia',
    ],
    'helpers'                   => [
        'copy_options'  => 'Copia els següents elements relacionats des de l\'origen cap a la nova entitat.',
    ],
    'hidden'                    => 'Amagat',
    'hints'                     => [
        'attribute_template'    => 'Aplica una plantilla d\'atributs directament al crear aquesta entitat.',
        'calendar_date'         => 'Les dates del calendari faciliten el filtrat de les llistes, i també fixen els esdeveniments al calendari seleccionat.',
        'gallery_image'         => 'Si l\'entitat no té imatge, mostra una imatge de la galeria de la campanya.',
        'header_image'          => 'Aquesta imatge es troba sobre la entitat. Per a obtenir resultats millors, feu servir una imatge apaisada.',
        'image_limitations'     => 'Formats acceptats: JPG, PNG, GIF i SVG. Tamany màxim del fitxer: :size.',
        'image_patreon'         => '¿Com s\'augmenta el tamany màxim dels fitxers?',
        'is_private'            => 'Si és privada, aquesta entitat només es mostrarà als membres que tinguin el rol "Admin".',
        'is_star'               => 'Els elements fixats es mostraran al menú principal de l\'entitat.',
        'map_limitations'       => 'Formats acceptats: JPG, PNG, GIF i SVG. Tamany màxim del fitxer: :size.',
        'tooltip'               => 'Reemplaça la descripció emergent automàtica amb el contingut següent.',
        'visibility'            => 'En seleccionar "Administrador", només els membres amb el rol d\'administrador podran veure això. "Només jo" vol dir que només vós podeu veure això.',
    ],
    'history'                   => [
        'created'       => 'Creada per <strong>:name</strong> el <span data-toggle="tooltip" title=":realdate">:date</span>',
        'created_date'  => 'Creada el <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'       => 'Desconegut',
        'updated'       => 'Última modificació per <strong>:name</strong> el <span data-toggle="tooltip" title=":realdate">:date</span>',
        'updated_date'  => 'Última modificació el <span data-toggle="tooltip" title=":realdate">:date</span>',
        'view'          => 'Historial de canvis de l\'entitat',
    ],
    'image'                     => [
        'error' => 'No s\'ha pogut obtenir la imatge. Pot ser que la pàgina web no permeti descarregar-la (habitual a Squarespace o DeviantArt), o que l\'enllaç ja no sigui vàlid. Assegureu-vos també que el pes de la imatge no supera els :size.',
    ],
    'is_not_private'            => 'Aquesta entitat no és privada.',
    'is_private'                => 'Aquesta entitat és privada i només es mostra als administradors.',
    'legacy'                    => 'Obsolet',
    'linking_help'              => 'Com es poden enllaçar altres entitats?',
    'manage'                    => 'Administra',
    'move'                      => [
        'errors'        => [
            'permission'        => 'No teniu permís per a crear entitats d\'aquest tipus a la campanya seleccionada.',
            'same_campaign'     => 'Heu de seleccionar una altra campanya per moure-hi l\'entitat.',
            'unknown_campaign'  => 'Campanya desconeguda.',
        ],
        'fields'        => [
            'campaign'  => 'Nova campanya',
            'copy'      => 'Fes una còpia',
            'target'    => 'Nou tipus',
        ],
        'hints'         => [
            'campaign'  => 'També podeu intentar moure aquesta entitat a una altra campanya.',
            'copy'      => 'Seleccioneu aquesta opció si voleu crear una còpia a la nova campanya.',
            'target'    => 'Tingueu en compte que algunes dades es poden perdre al moure un element d\'un tipus a un altre.',
        ],
        'panels'        => [
            'change'    => 'Canvia el tipus d\'entitat',
            'move'      => 'Mou a una altra campanya',
        ],
        'success'       => 'S\'ha mogut l\'entitat «:name».',
        'success_copy'  => 'S\'ha copiat l\'entitat «:name».',
        'title'         => 'Mou :name',
    ],
    'new_entity'                => [
        'error' => 'Reviseu les dades introduïdes.',
        'fields'=> [
            'name'  => 'Nom',
        ],
        'title' => 'Nova entitat',
    ],
    'or_cancel'                 => 'o <a href=":url">Cancela</a>',
    'panels'                    => [
        'appearance'            => 'Aparença',
        'attribute_template'    => 'Plantilla d\'atributs',
        'calendar_date'         => 'Data del calendari',
        'entry'                 => 'Presentació',
        'general_information'   => 'Informació general',
        'move'                  => 'Mou',
        'system'                => 'Sistema',
    ],
    'permissions'               => [
        'action'            => 'Acció',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Permet',
                'deny'      => 'Denega',
                'ignore'    => 'Ignora',
                'remove'    => 'Treu',
            ],
            'bulk_entity'   => [
                'allow'     => 'Permet',
                'deny'      => 'Denega',
                'inherit'   => 'Hereta',
            ],
            'delete'        => 'Eliminar',
            'edit'          => 'Editar',
            'entity_note'   => 'Anotacions',
            'read'          => 'Llegir',
            'toggle'        => 'Canvia',
        ],
        'allowed'           => 'Permès',
        'fields'            => [
            'member'    => 'Membre',
            'role'      => 'Rol',
        ],
        'helper'            => 'Des d\'aquí podeu afinar quins usuaris i rols poden interactuar amb aquesta entitat.',
        'helpers'           => [
            'setup' => 'Des d\'aquí podeu afinar com els diferents rols i usuaris poden interactuar amb aquesta entitat. :allow els permetrà fer l\'acció; :deny els la denegarà, i :inherit utilitzarà el permís que ja tingui el rol o l\'usuari. Un usuari amb una acció en :allow podrà fer-la, malgrat que el seu rol estigui en :deny.',
        ],
        'inherited'         => 'Aquest rol ja té aquest permís a aquesta entitat.',
        'inherited_by'      => 'Aquest usuari forma part del rol «:role», que li atorga aquest permís en aquesta entitat.',
        'success'           => 'Permisos guardats.',
        'title'             => 'Permisos',
        'too_many_members'  => 'Aquesta campanya té massa membres (>10) per a poder mostrar-los tots aquí. Utilitzeu el botó de permisos a la vista d\'entitat per a controlar els permisos detalladament.',
    ],
    'placeholders'              => [
        'ability'       => 'Trieu una habilitat',
        'calendar'      => 'Trieu un calendari',
        'character'     => 'Trieu un personatge',
        'entity'        => 'Entitat',
        'event'         => 'Trieu un esdeveniment',
        'family'        => 'Trieu una família',
        'gallery_image' => 'Trieu una imatge de la galeria de la campanya',
        'image_url'     => 'Podeu pujar una imatge des d\'una URL',
        'item'          => 'Trieu un objecte',
        'journal'       => 'Trieu una crònica',
        'location'      => 'Trieu una localització',
        'map'           => 'Trieu un mapa',
        'note'          => 'Trieu una nota',
        'organisation'  => 'Trieu una organització',
        'race'          => 'Trieu una raça',
        'tag'           => 'Trieu una etiqueta',
        'timeline'      => 'Trieu una línia de temps',
    ],
    'relations'                 => [
        'actions'   => [
            'add'   => 'Afegeix una relació',
        ],
        'fields'    => [
            'location'  => 'Localització',
            'name'      => 'Nom',
            'relation'  => 'Relació',
        ],
        'hint'      => 'Es poden relacionar entitats per a representar les seves connexions.',
    ],
    'remove'                    => 'Elimina',
    'rename'                    => 'Canvia el nom',
    'save'                      => 'Guarda',
    'save_and_close'            => 'Guarda i tanca',
    'save_and_copy'             => 'Guarda i copia',
    'save_and_new'              => 'Guarda i crea de nou',
    'save_and_update'           => 'Guarda i segueix editant',
    'save_and_view'             => 'Guarda i veu',
    'search'                    => 'Cerca',
    'select'                    => 'Selecciona',
    'superboosted_campaigns'    => 'Campanyes supermillorades',
    'tabs'                      => [
        'abilities'     => 'Habilitats',
        'attributes'    => 'Atributs',
        'boost'         => 'Millora',
        'calendars'     => 'Calendaris',
        'default'       => 'Per defecte',
        'events'        => 'Esdeveniments',
        'inventory'     => 'Inventari',
        'links'         => 'Enllaços',
        'map-points'    => 'Punts del mapa',
        'mentions'      => 'Mencions',
        'menu'          => 'Menú',
        'notes'         => 'Anotacions',
        'permissions'   => 'Permisos',
        'relations'     => 'Relacions',
        'reminders'     => 'Recordatoris',
        'timelines'     => 'Línies de temps',
        'tooltip'       => 'Descripció emergent',
    ],
    'update'                    => 'Actualitza',
    'users'                     => [
        'unknown'   => 'Desconegut',
    ],
    'view'                      => 'Veu',
    'visibilities'              => [
        'admin'         => 'Admin',
        'admin-self'    => 'Admin i jo',
        'all'           => 'Tothom',
        'members'       => 'Membres',
        'self'          => 'Només jo',
    ],
];
