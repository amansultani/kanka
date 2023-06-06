<?php
/**
 * @var \App\Models\Attribute $attribute
 * @var \App\Models\Entity $entity
 */
$isAdmin = Auth::user()->isAdmin();
?>
@extends('layouts.app', [
    'title' => __('entities/attributes.index.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => Breadcrumb::index($entity->pluralType()), 'label' => \App\Facades\Module::plural($entity->typeId(), __('entities.' . $entity->pluralType()))],
        ['url' => route($parentRoute . '.show', $entity->child->id), 'label' => $entity->name],
        __('crud.tabs.attributes'),
    ],
    'mainTitle' => false,
])

@section('fullpage-form')
{!! Form::open([
    'url' => route('entities.attributes.save', ['entity' => $entity]),
    'method' => 'POST',
    'data-shortcut' => 1,
    'data-max-fields' => ini_get('max_input_vars'),
    'class' => 'entity-form',
    'data-unload' => 1,
]) !!}
@endsection

@section('content')
    <x-box>
        <div id="entity-attributes-all">
            <div class="entity-attributes">
                @foreach ($r = $entity->attributes()->ordered()->get() as $attribute)
                    @if (!$attribute->is_hidden)
                        @include('cruds.forms.attributes._attribute')
                    @endif
                @endforeach
                <div id="add_attribute_target"></div>
            </div>
            <div id="add_unsortable_attribute_target"></div>
        </div>

        @include('cruds.forms.attributes._blocks', ['existing' => $r->count()])
        @include('cruds.forms.attributes._buttons', ['model' => $entity->child, 'existing' => $r->count()])

        <div class="flex gap-2 items-center">
            <a href="{{ url()->previous() }}" class="btn2 btn-ghost">
                {{ __('crud.cancel') }}
            </a>
            <div class="grow text-right">
                <button class="btn2 btn-primary">
                    {{ __('crud.save') }}
                </button>
            </div>
        </div>

    </x-box>
@endsection

@section('fullpage-form-end')
    {!! Form::close() !!}
@endsection

@section('scripts')
    @vite('resources/js/attributes.js')
@endsection
