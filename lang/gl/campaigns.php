<?php

return [
    'actions'                           => [],
    'create'                            => [
        'description'           => 'Crear unha nova campaña',
        'helper'                => [
            'title'     => 'Dámosche a benvida a :name',
            'welcome'   => <<<'TEXT'
Antes de continuar, escolle un nome para a campaña. Este é o nome do teu mundo. Se aínda non tes un bo nome, non te preocupes, sempre pode cambialo máis tarde ou crear máis campañas.

Grazas por unirte a Kanka, dámosche a benvida á nosa próspera comunidade!
TEXT
,
        ],
        'success'               => 'Campaña creada',
        'success_first_time'    => 'A túa campaña foi creada! Como é a túa primeira campaña, creamos unhas cantas cousas para axudarte a comezar e, con sorte, darche algunha idea do que podes facer.',
        'title'                 => 'Nova campaña',
    ],
    'destroy'                           => [
        'action'            => 'Eliminar campaña',
        'confirm'           => 'Tes certeza de que queres eliminar a campaña ":campaign"? Esta acción é permanente e non pode ser desfeita.',
        'confirm-button'    => 'Eliminar a campaña permanentemente',
        'helper-v2'         => 'Esta campaña non pode ser eliminada mentres hai integrantes nela. Expúlsaes e inténtao de novo.',
        'hint'              => 'Se é así, escribe ":code" na caixa de abaixo.',
        'success'           => 'Campaña eliminada.',
        'title'             => 'Eliminar campaña',
    ],
    'edit'                              => [
        'success'   => 'Campaña actualizada.',
        'title'     => 'Editar a campaña ":campaign"',
    ],
    'entity_note_visibility'            => [],
    'entity_personality_visibilities'   => [
        'private'   => 'As personaxes novas teñen a súa personalidade privada por defecto.',
    ],
    'entity_visibilities'               => [
        'private'   => 'As entidades novas son privadas',
    ],
    'errors'                            => [
        'access'        => 'Non tes acceso a esta campaña.',
        'unknown_id'    => 'Campaña descoñecida.',
    ],
    'export'                            => [],
    'fields'                            => [
        'boosted'                           => 'Potenciada por',
        'character_personality_visibility'  => 'Visibilidade por defecto da personalidade',
        'connections'                       => 'Mostra a táboa de conexións dunha entidade por defecto (no lugar de mostar o explorador, en campañas potenciadas)',
        'css'                               => 'CSS',
        'description'                       => 'Descrición',
        'entity_count'                      => 'Número de entidades',
        'entity_privacy'                    => 'Privacidade por defecto das novas entidades',
        'entry'                             => 'Descrición da campaña',
        'excerpt'                           => 'Limiar',
        'featured'                          => 'Campaña destacada',
        'followers'                         => 'Persoas que a seguen',
        'header_image'                      => 'Imaxe de cabeceira',
        'image'                             => 'Imaxe',
        'locale'                            => 'Lingua',
        'name'                              => 'Nome',
        'nested'                            => 'Mostrar as listaxes de entidades en árbore, cando sexa posible',
        'open'                              => 'Aberta a solicitudes',
        'past_featured'                     => 'Campaña destacada previamente',
        'post_collapsed'                    => 'As novas entradas nas entidades estarán colapsadas por defecto.',
        'public'                            => 'Visibilidade da campaña',
        'public_campaign_filters'           => 'Filtros de campañas públicas',
        'related_visibility'                => 'Visibilidade de elementos relacionados',
        'rpg_system'                        => 'Sistemas RPG',
        'superboosted'                      => 'Superpotenciada por',
        'system'                            => 'Sistema',
        'theme'                             => 'Tema',
        'visibility'                        => 'Visibilidade',
    ],
    'following'                         => 'Seguindo',
    'helpers'                           => [
        'boosted'                           => 'Algunhas funcións están desbloqueadas porque esta campaña está potenciada. Máis información na páxina de :settings.',
        'character_personality_visibility'  => 'Selecciona a privacidade por defecto dos trazos de personalidade ao crear novas personaxes.',
        'css'                               => 'Escrebe o teu propio CSS para as páxinas da túa campaña. Ten en conta que calquer abuso desta ferramenta pode levar á eliminación do teu CSS personalizado. Ofensas repetidas ou graves poden levar á eliminación da túa campaña.',
        'dashboard'                         => 'Personaliza a forma na que se mostra o taboleiro da campaña completando os seguintes campos.',
        'entity_privacy'                    => 'Selecciona a privacidade por defecto das novas entidades.',
        'excerpt'                           => 'O limiar da campaña mostrarase no taboleiro principal. Escrebe unhas poucas liñas introducindo o teu mundo. Se este campo está baleiro, os primeiros 1000 caracteres da descrición da campaña serán usados.',
        'header_image'                      => 'Imaxe mostrada como fondo no taboleiro da campaña.',
        'hide_history'                      => 'Habilita está opción para que o historial das entidades só sexa visible pola administración da campaña.',
        'hide_members'                      => 'Habilita esta opción para que a lista de integrantes da campaña só sexa visible pola administración da campaña.',
        'locale'                            => 'A lingua na que está escrita a túa campaña. Isto úsase para xerar contido e agrupar campañas públicas.',
        'name'                              => 'A túa campaña ou mundo pode ter calquer nome sempre que conteña polo menos catro letras ou números.',
        'permissions_tab'                   => 'Controla a privacidade e visiblidade por defecto de elementos novos coas seguintes opcións.',
        'public_campaign_filters'           => 'Axuda a outras persoas a atopar a campaña entre outras campañas públicas proporcionando a seguinte información.',
        'public_no_visibility'              => 'Coidado! A túa campaña é pública, pero o rol Público da campaña non pode acceder nada. :fix.',
        'related_visibility'                => 'A visibilidade por defecto ao crear un elemento con este campo (entradas, relacións, habilidades, etc.)',
        'system'                            => 'Se a túa campaña é publicamente visible, o sistema é mostrado na páxina de :link.',
        'systems'                           => 'Para evitar unha sobrecarga de opcións, algunhas funcións de Kanka só están dispoñibles para sistemas RPG específicos (por exemplo, o bloque de estadísticas de monstros para D&D 5e). Engadir sistemas soportados aquí habilitará as súas funcións.',
        'theme'                             => 'Forza o tema da campaña, invalidando a preferencia da persoa usuaria.',
        'view_public'                       => 'Para ver a túa campaña como a vería unha persoa externa, abre :link nunha xanela de incógnito.',
        'visibility'                        => 'Facer pública unha campaña significa que calquera persoa cunha ligazón a ela poderá vela.',
    ],
    'index'                             => [
        'actions'   => [
            'new'   => [
                'title' => 'Nova campaña',
            ],
        ],
    ],
    'invites'                           => [
        'actions'               => [
            'copy'  => 'Copiar a ligazón ao portapapeis',
            'link'  => 'Nova ligazón',
        ],
        'create'                => [
            'buttons'       => [
                'create'    => 'Crear convite',
            ],
            'success_link'  => 'Ligazón creada: :link',
            'title'         => 'Convida alguén á túa campaña.',
        ],
        'destroy'               => [
            'success'   => 'Convite eliminado.',
        ],
        'error'                 => [
            'already_member'    => 'Xa es integrante desta campaña.',
            'inactive_token'    => 'Este identificador xa foi usado, ou a campaña xa non existe.',
            'invalid_token'     => 'Este identificador xa non é válido.',
            'login'             => 'Por favor, inicia sesión ou rexístrate para unirte á campaña.',
        ],
        'fields'                => [
            'created'   => 'Enviado',
            'role'      => 'Rol',
            'token'     => 'Token',
            'type'      => 'Tipo',
            'usage'     => 'Número máximo de usos',
        ],
        'unlimited_validity'    => 'Ilimitado',
        'usages'                => [
            'five'      => '5 usos',
            'no_limit'  => 'Sen límite',
            'once'      => '1 uso',
            'ten'       => '10 usos',
        ],
    ],
    'leave'                             => [
        'confirm'           => 'Seguro que queres abandonar a campaña ":name"? Non poderás volver acceder a ela, excepto se alguén da administración te convida de novo.',
        'confirm-button'    => 'Si, abandonar a campaña',
        'error'             => 'Non foi posible abandonar a campaña.',
        'fix'               => 'Ir á lista de integrantes da campaña',
        'no-admin-left'     => 'Abandonar a campaña non é posible xa que facelo deixaríaa sen administración. Engade alguén máis ao rol de administración para poder abandonala.',
        'success'           => 'Abandonaches a campaña.',
        'title'             => 'Abandonando a campaña',
    ],
    'members'                           => [
        'actions'               => [
            'remove'        => 'Eliminar da campaña',
            'switch'        => 'Ver campaña como',
            'switch-back'   => 'Voltar á miña conta',
            'switch-entity' => 'Ver como',
        ],
        'create'                => [
            'title' => 'Engade unha persoa á túa campaña.',
        ],
        'edit'                  => [
            'title' => 'Editar integrante :name',
        ],
        'fields'                => [
            'banned'        => 'A conta está vetada',
            'joined'        => 'Uniuse',
            'last_login'    => 'Última conexión',
            'name'          => 'Conta',
            'role'          => 'Rol',
            'roles'         => 'Roles',
        ],
        'helpers'               => [
            'switch'    => 'Ver como esta conta',
        ],
        'impersonating'         => [
            'message'   => 'Estás vendo a campaña como outra conta. Algunhas funcións están desactivadas, mais o resto funciona exactamente igual que como o vería esta persoa. Para voltar á túa conta, usa o botón "Voltar á miña conta" que se atopa onde normalmente está o botón de Pechar sesión.',
            'title'     => 'Estás vendo como :name',
        ],
        'invite'                => [
            'description'   => 'Podes invitar amizades a unirse á túa campaña mediante unha ligazón de convite. Cando acepten o convite, serán engadidas como integrante no rol correspondente. Tamén podes enviarlles un convite mediante correo electrónico, sempre e cando non sexa un enderezo de Hotmail, xa que Hotmail sempre rexeita os correos de Kanka.',
            'more'          => 'Podes engadir máis roles en :link',
            'roles_page'    => 'Páxina de roles',
            'title'         => 'Convidar',
        ],
        'manage_roles'          => 'Administrar roles',
        'removal'               => 'Estás eliminando a ":member" da campaña.',
        'roles'                 => [
            'member'    => 'Integrante',
            'owner'     => 'Administración',
            'player'    => 'Xogante',
            'public'    => 'Público',
            'viewer'    => 'Espectadora',
        ],
        'switch_back_success'   => 'Voltaches á túa conta orixinal.',
        'title'                 => 'Integrantes da campaña ":name"',
        'updates'               => [
            'added'     => 'Rol :role engadido a :user.',
            'removed'   => 'Rol :role eliminado de :user.',
        ],
    ],
    'open_campaign'                     => [],
    'options'                           => [],
    'panels'                            => [
        'dashboard' => 'Taboleiro',
        'permission'=> 'Permisos',
        'setup'     => 'Configuración',
        'sharing'   => 'Compartir',
        'systems'   => 'Sistemas',
        'ui'        => 'Interface',
    ],
    'placeholders'                      => [
        'description'   => 'Un breve resumo da túa campaña',
        'locale'        => 'Código de idioma',
        'name'          => 'O nome da túa campaña',
        'system'        => 'D&D, Pathfinder, Fate, DSA',
    ],
    'privacy'                           => [
        'hidden'    => 'Oculta',
        'private'   => 'Privada',
        'visible'   => 'Visible',
    ],
    'public'                            => [
        'helpers'   => [
            'introduction'  => 'As campañas son privadas por defecto, e poden facerse públicas. Deste xeito, todo o mundo pode acceder a elas, e ademais aparecen na páxina de :public-campaigns se teñen entidades visibles ao rol :public-role. Unha campaña pública é visible a todo o mundo, pero para que o seu contido sexa visible, o rol :public-role precisa os permisos adecuados.',
        ],
    ],
    'roles'                             => [
        'actions'       => [
            'add'           => 'Engadir un rol',
            'permissions'   => 'Xestionar permisos',
            'rename'        => 'Renomear rol',
            'save'          => 'Gardar rol',
        ],
        'admin_role'    => 'rol de administración',
        'bulks'         => [
            'delete'    => '{1} :count rol eliminado.|[2,*] :count roles eliminados.',
            'edit'      => '{1} :count rol actualizado.|[2,*] :count roles actualizados.',
        ],
        'create'        => [
            'success'   => 'Rol ":name" creado.',
            'title'     => 'Crear un novo rol para :name',
        ],
        'destroy'       => [
            'success'   => 'Rol eliminado.',
        ],
        'edit'          => [
            'success'   => 'Rol actualizado.',
            'title'     => 'Editar rol ":name"',
        ],
        'fields'        => [
            'name'          => 'Nome',
            'permissions'   => 'Permisos',
            'type'          => 'Tipo',
            'users'         => 'Integrantes',
        ],
        'helper'        => [
            '1' => 'Unha campaña pode ter tantos roles como queiras. As persoas co rol de "Administración" teñen automaticamente acceso a todo dentro da campaña, pero todos os demáis roles poden ter permisos específicos en diferentes tipos de entidades (personaxes, lugares, etc.).',
            '2' => 'Podes asignar permisos máis específicos a unha entidade mediante a lapela "Permisos". Esta lapela aparece unha vez a túa campaña ten varios roles ou integrantes.',
            '3' => 'Pódese usar un sistema de exclusión, no que se da acceso a todas as entidades, e marcar a caixa "Privada" nas entidades para ocultalas. Tamén se pode dar poucos permisos aos roles e configurar a visibilidade de cada entidade individualmente.',
            '4' => 'As campañas potenciadas poden ter un número ilimitado de roles.',
        ],
        'hints'         => [
            'campaign_not_public'   => 'O rol "Público" ten permisos pero a campaña é privada. Podes cambiar esta configuración na lapela "Compartir" ao editar a campaña.',
            'empty_role'            => 'O rol aínda non ten ningunha integrante.',
            'role_admin'            => 'O rol ":name" otorga acceso automaticamente a toda campaña.',
            'role_permissions'      => 'Activa o rol ":name" para que poida facer as seguintes accións en todas as entidades.',
        ],
        'members'       => 'Integrantes',
        'modals'        => [
            'details'   => [
                'campaign'  => 'Os permisos de campaña permiten o seguinte.',
                'entities'  => 'Este é un resumo do que poden facer as integrantes deste rol cando un permiso é establecido.',
                'more'      => 'Para máis detalles, mira o noso vídeo tutorial en Youtube',
                'title'     => 'Detalles do permiso',
            ],
        ],
        'permissions'   => [
            'actions'   => [
                'add'           => 'Crear',
                'dashboard'     => 'Taboleiro',
                'delete'        => 'Eliminar',
                'edit'          => 'Editar',
                'entity-note'   => 'Entrada',
                'manage'        => 'Configurar',
                'members'       => 'Integrantes',
                'permission'    => 'Permisos',
                'read'          => 'Ver',
                'toggle'        => 'Cambiar para todos',
            ],
            'helpers'   => [
                'add'           => 'Permite crear entidades deste tipo. Poderán ver e editar entidades que creen se non teñen permisos para ver ou editar.',
                'dashboard'     => 'Permite editar os taboleiros e os seus complementos.',
                'delete'        => 'Permite eliminar todas as entidades deste tipo.',
                'edit'          => 'Permite editar todas as entidades deste tipo.',
                'entity_note'   => 'Isto permite que persoas que non teñen permisos de edición nunha entidade poidan engadirlle entradas.',
                'manage'        => 'Permite editar a campaña da mosma forma que pode a administración, pero sen permitir eliminala.',
                'members'       => 'Permite convidar novas integrantes á campaña.',
                'permission'    => 'Permite establecer permisos en entidades deste tipo que poidan editar.',
                'read'          => 'Permite ver todas as entidades deste tipo que non sexan privadas.',
            ],
        ],
        'placeholders'  => [
            'name'  => 'Nome do rol',
        ],
        'show'          => [
            'title' => 'Rol ":role"',
        ],
        'title'         => 'Roles da campaña :name',
        'types'         => [
            'owner'     => 'Administración',
            'public'    => 'Público',
            'standard'  => 'Estándar',
        ],
        'users'         => [
            'actions'   => [
                'add'           => 'Engadir',
                'remove'        => ':user do rol :role',
                'remove_user'   => 'Eliminar integrante do rol',
            ],
            'create'    => [
                'success'   => 'Persoa engadida ao rol.',
                'title'     => 'Engade unha persoa ao rol ":name"',
            ],
            'destroy'   => [
                'success'   => 'Persoa eliminada do rol.',
            ],
            'errors'    => [
                'cant_kick_admins'  => 'Para evitar abusos, non é posible eliminar integrantes do rol ":admin". En caso de problemas, contacta connosco en :discord ou en :email.',
                'needs_more_roles'  => 'Precisas engadirte a outro rol da campaña antes de poder eliminarte do rol ":admin".',
            ],
            'fields'    => [
                'name'  => 'Nome',
            ],
        ],
    ],
    'settings'                          => [
        'actions'       => [
            'enable'    => 'Activar',
        ],
        'boosted'       => 'Esta función está en acceso anticipado e actualmente só dispoñible para :boosted.',
        'deprecated'    => [
            'help'  => 'Este módulo está deprecado. Non será mantido nin se asegura o seu correcto funcionamento con cada nova actualización. Usa este módulo sabendo que nalgún momento será eliminado de Kanka.',
            'title' => 'Deprecado',
        ],
        'disabled'      => 'O módulo :module está deshabilitado.',
        'enabled'       => 'O módulo :module está habilitado',
        'errors'        => [
            'module-disabled'   => 'O módulo solicitado está actualmente deshabilitado na configuración da campaña. :fix.',
        ],
        'helpers'       => [
            'abilities'     => 'Crea habilidades (talentos, feitizos, poderes...) que poden ser asignados a entidades.',
            'calendars'     => 'Un lugar para definir os calendarios do teu mundo.',
            'characters'    => 'A xente que habita no teu mundo.',
            'conversations' => 'Conversas ficticias entre personaxes ou entre integrantes da campaña. Este módulo está obsoleto.',
            'creatures'     => 'Cataloga as criaturas, animais, e monstros do teu mundo co módulo de criaturas.',
            'dice_rolls'    => 'Un xeito de tirar dados para quen usa Kanka nas súas partidas de rol. Este módulo está obsoleto.',
            'events'        => 'Celebracións, festivais, desastres, aniversarios, guerras...',
            'families'      => 'Clans ou familias, as súas relacións e as persoas que as forman.',
            'inventories'   => 'Xestiona inventarios nas túas entidades.',
            'items'         => 'Armas, vehículos, reliquias, apócemas...',
            'journals'      => 'Observacións escritas por personaxes, ou notas de preparación para dirixir partidas.',
            'locations'     => 'Planetas, planos, continentes, ríos, estados, asentamentos, templos, tabernas...',
            'maps'          => 'Sube mapas con capas e marcadores señalando a outras entidades da campaña.',
            'notes'         => 'Tradicións, relixións, historia, maxia, razas...',
            'organisations' => 'Cultos, unidades militares, faccións, gremios...',
            'quests'        => 'Para levar seguimento de misións con personaxes e lugares asociados.',
            'races'         => 'Se a túa campaña ten máis de unha raza, isto axudarate a telas a man.',
            'tags'          => 'Cada entidade pode ter varias etiquetas. As etiquetas poden á súa vez pertencer a outras etiquetas, e as entradas poden ser filtradas por etiqueta.',
            'timelines'     => 'Representa a historia do teu mundo usando liñas temporais.',
        ],
    ],
    'show'                              => [
        'actions'   => [
            'edit'  => 'Editar campaña',
            'leave' => 'Abandonar campaña',
        ],
        'menus'     => [
            'configuration'     => 'Configuración',
            'overview'          => 'Visión xeral',
            'user_management'   => 'Xestión de integrantes',
        ],
        'tabs'      => [
            'achievements'      => 'Logros',
            'applications'      => 'Solicitudes',
            'campaign'          => 'Campaña',
            'default-images'    => 'Imaxes por defecto',
            'export'            => 'Exportar',
            'information'       => 'Información',
            'members'           => 'Integrantes',
            'plugins'           => 'Complementos',
            'recovery'          => 'Recuperación',
            'roles'             => 'Roles',
            'sidebar'           => 'Configuración da barra lateral',
            'styles'            => 'Estilo',
        ],
        'title'     => 'Campaña ":name"',
    ],
    'superboosted'                      => [],
    'themes'                            => [
        'none'  => 'Ningún (usa a configuración de cada persoa)',
    ],
    'ui'                                => [
        'collapsed'         => [
            'collapsed' => 'Colapsada',
            'default'   => 'Por defecto',
        ],
        'connections'       => [
            'explorer'  => 'Explorador de relacións (só campañas potenciadas)',
            'list'      => 'Interface de listas',
        ],
        'entity_history'    => [
            'hidden'    => 'Só visible para a administración da campaña',
            'visible'   => 'Visible a integrantes da campaña',
        ],
        'fields'            => [
            'connections'       => 'Interface de conexións entre entidades por defecto',
            'connections_mode'  => 'Modo por defecto do explorador de relacións',
            'entity_history'    => 'Historial de cambios da entidade',
            'entity_image'      => 'Imaxe da entidade',
            'family_toolip'     => 'Familia da personaxe',
            'member_list'       => 'Lista de integrantes da campaña',
            'nested'            => 'Disposición por defecto das listas',
            'post_collapsed'    => 'Valor de colapsada/expandida por defecto das novas entradas.',
        ],
        'helpers'           => [
            'connections'       => 'Selecciona a interface por defecto que é mostrada ao facer clic na subpáxina de conexións dunha entidade.',
            'connections_mode'  => 'Ao visualizar o explorador de relacións dunha entidade, establece o modo no que aparece por defecto.',
            'other'             => 'Outras opcións visuais para a campaña.',
            'post_collapsed'    => 'Selecciona se, por defecto, as entradas estarán colapsadas ou expandidas ao ser creadas.',
            'tooltip'           => 'Controla a información que é visible na descrición emerxente ao poñer o cursor sobre o nome dunha entidade.',
        ],
        'members'           => [
            'hidden'    => 'Só visible para a administración da campaña',
            'visible'   => 'Visible a integrantes da campaña',
        ],
        'nested'            => [
            'nested'    => 'En árbore',
        ],
        'other'             => 'Miscelánea',
    ],
    'visibilities'                      => [
        'private'   => 'Privada',
        'public'    => 'Pública',
        'review'    => 'Esperando revisión',
    ],
    'warning'                           => [],
];
