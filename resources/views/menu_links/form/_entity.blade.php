<?php

$tabs = [
        //'' => __('crud.tabs.story'),
        'notes' => __('crud.tabs.notes'),
        'calendars' => __('crud.tabs.calendars'),
        'attribute' => __('crud.tabs.attributes'),
];
$menus = [
        'abilities' => __('crud.tabs.abilities'),
        'assets' => __('crud.tabs.assets'),
        'reminders' => __('crud.tabs.reminders'),
        'organisations' => __('characters.show.tabs.organisations')  . ' (' . __('entities.characters') . ', ' . __('entities.organisations') . ')',
        __('entities.maps') => [
            'explore' => __('maps.actions.explore'),
            'maps' => __('maps.show.tabs.maps'),
        ],
        __('entities.tags') => [
            //'children' => __('tags.show.tabs.children'),
            'tags' => __('tags.show.tabs.tags'),
        ],
        __('entities.locations') => [
            'map' => __('locations.show.tabs.map') . ' (' . __('crud.legacy') . ')',
            'characters' => __('locations.show.tabs.characters'),
            'locations' => __('locations.show.tabs.locations'),
        ],
        __('entities.families') => [
            'families' => __('families.show.tabs.families')
        ],
        __('entities.items') => [
            'inventories' => __('items.show.tabs.inventories')
        ],
        __('entities.organisations') => [
            'organisations' => __('organisations.show.tabs.organisations')
        ],
        __('entities.races') => [
            'races' => __('races.show.tabs.races')
        ],
        __('entities.journals') => [
            'journals' => __('journals.show.tabs.journals')
        ],
        __('entities.quests') => [
            'quest_elements' => __('quests.show.tabs.elements')
        ],

        //'tags' => __('tags.show.tabs.tags') . ' (' . __('entities.tags') . ')',
        //'explore' => __('maps.actions.explore') . ' (' . __('entities.maps') . ')',
        //'children' => __('tags.show.tabs.children') . ' (' . __('entities.tags') . ')',
        //'quests' => __('characters.show.tabs.quests'),
        //'members' => __('families.show.tabs.members') . ' (' . __('entities.families') . ')',
        //'map_points' => __('crud.tabs.map-points'),
        //'map' => __('locations.show.tabs.map') . ' (' . __('entities.locations') . ')',
        //'inventories' => __('items.show.tabs.inventories'),
        //'characters' => __('locations.show.tabs.characters') . ' (' . __('entities.locations') . ')',
        //'items' => __('locations.show.tabs.items') . ' (' . __('entities.locations') . ')',
        'inventory' => __('crud.tabs.inventory'),
        'relations' => __('crud.tabs.connections'),
];
asort($menus);
$menus = array_merge(['' => __('crud.tabs.story')], $menus);
?>
<p class="help-block">{!! __('menu_links.helpers.entity', [
    'menu' => '<code>' . __('menu_links.fields.menu') . '</code>',
    ]) !!}</p>

<div class="row">
    <div class="col-md-6">
        <div class="form-group required">
            {!! Form::select2(
                'entity_id',
                (!empty($model) && $model->target ? $model->target : null),
                App\Models\Entity::class,
                false,
                'menu_links.fields.entity',
                'search.entities-with-relations',
                'menu_links.placeholders.entity'
            ) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label>{{ trans('menu_links.fields.menu') }}</label>
            {!! Form::select('menu', $menus, null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
