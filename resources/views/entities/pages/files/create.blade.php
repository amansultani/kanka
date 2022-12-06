@extends('layouts.' . (request()->ajax() ? 'ajax' : 'app'), [
    'title' => __('entities/files.create.title', ['entity' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => $entity->url('index'), 'label' => __('entities.' . $entity->pluralType())],
        ['url' => $entity->url('show'), 'label' => $entity->name],
        ['url' => route('entities.entity_assets.index', $entity->id), 'label' => __('crud.tabs.assets')],
    ]
])

@section('content')
    {!! Form::open(['route' => ['entities.entity_assets.store', $entity], 'method'=>'POST', 'data-shortcut' => 1, 'enctype' => 'multipart/form-data']) !!}

    @if (request()->ajax())
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
            <h4>
                {{ __('entities/files.create.title', ['entity' => $entity->name]) }}
            </h4>
        </div>
        <div class="modal-body">
            @include('partials.errors')
            @include('entities.pages.files._form')
        </div>
        <div class="modal-footer">
            <button class="btn btn-success">{{ __('crud.save') }}</button>
            <div class="pull-left">
                @include('partials.footer_cancel')
            </div>
        </div>
    @else
        <div class="panel panel-default">
            <div class="panel-body">
                @include('partials.errors')
                @include('entities.pages.files._form')
            </div>
            <div class="panel-footer text-right">

                <button class="btn btn-success">{{ __('crud.save') }}</button>
                @includeWhen(!request()->ajax(), 'partials.or_cancel')

            </div>
        </div>
    @endif
    <input type="hidden" name="type_id" value="{{ \App\Models\EntityAsset::TYPE_FILE }}" />
    {!! Form::close() !!}
@endsection
