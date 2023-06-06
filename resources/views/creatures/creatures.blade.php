@php
    $plural = \App\Facades\Module::plural(config('entities.ids.creature'), __('entities.creatures'));
@endphp
@extends('layouts.app', [
    'title' => $model->name . ' - ' . $plural,
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])

@inject('campaignService', 'App\Services\CampaignService')

@section('entity-header-actions')
    <div class="header-buttons inline-block pull-right ml-auto">
        @if (request()->has('parent_id'))
            <a href="{{ route('creatures.creatures', [$model]) }}" class="btn2 btn-sm">
                <i class="fa-solid fa-filter"></i> {{ __('crud.filters.all') }} ({{ $model->descendants()->count() }})
            </a>
        @else
            <a href="{{ route('creatures.creatures', [$model, 'parent_id' => $model->id]) }}" class="btn2 btn-sm">
                <i class="fa-solid fa-filter"></i> {{ __('crud.filters.direct') }} ({{ $model->creatures()->count() }})
            </a>
        @endif
    </div>
@endsection

@section('content')
    @include('partials.errors')

    <div class="entity-grid">
        @include('entities.components.header', [
            'model' => $model,
            'breadcrumb' => [
                ['url' => Breadcrumb::index('creatures'), 'label' => $plural],
                $plural
            ]
        ])

        @include('entities.components.menu_v2', ['active' => 'creatures'])

        <div class="entity-main-block">
            @include('creatures.panels.creatures')
        </div>
    </div>
@endsection
