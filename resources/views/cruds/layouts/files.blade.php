@if (config('entities.file_upload'))
<li class="list-group-item">
    <p class="text-muted">
        <b>{{ trans('crud.fields.files') }}
        @can('update', $model)
            <i class="fa fa-cloud-upload pull-right entity-file-ui" data-url="{{ route('entities.entity_files.index', $model->entity) }}" data-toggle="ajax-modal" data-target="#entity-modal" title="{{ __('crud.files.actions.manage') }}"></i>
        @endif
        </b>
    </p>

    <div class="entity-file-list" data-url="{{ route('entities.files', [$model->entity]) }}">
        @include('entities.panels.files', ['entity' => $model->entity])
    </div>
</li>
@endif