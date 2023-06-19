@extends('layouts.app', [
    'title' => __('maps/groups.index.title', ['name' => $model->name]),
    'description' => '',
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])

@inject('campaignService', 'App\Services\CampaignService')

@section('entity-header-actions')
    @can('update', $model)
        <div class="header-buttons inline-block flex gap-2 items-center justify-end">
            <a href="https://docs.kanka.io/en/latest/entities/maps/groups.html" class="btn2 btn-sm" target="_blank">
                <x-icon class="question"></x-icon>
                {{ __('crud.actions.help') }}
            </a>
            @if ($model->explorable())
                <a href="{{ route('maps.explore', ['map' => $model]) }}" class="btn2 btn-primary btn-sm">
                    <x-icon class="map"></x-icon>
                    {{ __('maps.actions.explore') }}
                </a>
            @endif
            <a href="{{ route('maps.map_groups.create', ['map' => $model]) }}" class="btn2 btn-accent btn-sm"
                data-toggle="ajax-modal" data-target="#entity-modal"
                data-url="{{ route('maps.map_groups.create', ['map' => $model]) }}"
            >
                <x-icon class="plus"></x-icon>
                {{ __('maps/groups.actions.add') }}
            </a>
        </div>
    @endcan
@endsection

@section('content')
    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $model,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('maps'), 'label' => \App\Facades\Module::plural(config('entities.ids.map'), __('entities.maps'))],
                __('maps.panels.groups')
            ]
        ])
        @include('entities.components.menu_v2', ['active' => 'groups'])
        <div class="entity-main-block">
            @include('maps.panels.groups')
            @includeWhen($rows->count() > 1, 'maps.groups._reorder')
        </div>
    </div>
@endsection
