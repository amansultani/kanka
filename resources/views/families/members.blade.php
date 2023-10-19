@extends('layouts.app', [
    'title' => $model->name . ' - ' . \App\Facades\Module::plural(config('entities.ids.character'), __('entities.characters')),
    'breadcrumbs' => false,
    'mainTitle' => false,
    'miscModel' => $model,
])

@section('content')
    @include('entities.pages.subpage', [
        'active' => 'members',
        'view' => 'families.panels._members',
        'entity' => $model->entity,
    ])
@endsection
