@extends('layouts.app', [
    'title' => trans('profiles.title'),
    'description' => trans('profiles.description'),
    'breadcrumbs' => [
        trans('profiles.title'),
        trans('crud.edit'),
    ]
])

@section('content')
    @include('partials.errors')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-body">

                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['profile.update']]) !!}
                        @include('profiles._form')
                    {!! Form::close() !!}
                </div>
            </div>

            @if (empty($user->provider))
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{ trans('profiles.sections.password.title') }}</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['profile.password']]) !!}
                    @include('profiles._password')
                    {!! Form::close() !!}
                </div>
            </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{ trans('profiles.sections.delete.title') }}</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($user, ['method' => 'PATCH', 'id' => 'delete-confirm-form', 'route' => ['profile.destroy']]) !!}
                    @include('profiles._delete')
                    {!! Form::close() !!}
                    <div class="form-group">
                        <button class="btn btn-danger delete-confirm" data-text="{{ trans('profiles.sections.delete.warning') }}" data-toggle="modal" data-target="#delete-confirm">
                            <i class="fa fa-trash" aria-hidden="true"></i> {{ trans('profiles.sections.delete.delete') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{ trans('profiles.fields.avatar') }}</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($user, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['profile.avatar']]) !!}
                    @include('profiles._avatar', ['model' => $user])
                    {!! Form::close() !!}
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>{{ trans('profiles.fields.theme') }}</h4>
                </div>
                <div class="panel-body">
                    {!! Form::model($user, ['method' => 'PATCH', 'route' => ['profile.theme']]) !!}
                    @include('profiles._theme')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
