<?php
/**
 * @var \App\Models\OrganisationMember[] $members
 */
$members = $model->organisations()
        ->simpleSort($datagridSorter)
        ->has('organisation')
        ->with(['organisation', 'organisation.location'])
        ->paginate();
?>

<div class="box box-solid" id="character-organisations">
    <div class="box-header">
        <h3 class="box-title">
            {{ __('characters.show.tabs.organisations') }}
        </h3>
    </div>
    <div class="box-body">

        <div class="row hidden-export">
            <div class="col-md-6">
                @include('cruds.datagrids.sorters.simple-sorter', ['target' => '#character-organisations'])
            </div>
            <div class="col-md-6 text-right">

            </div>
        </div>
        <table id="character-organisations-table" class="table table-hover">
            <tbody><tr>
                <th class="avatar"><br /></th>
                <th>{{ trans('organisations.fields.name') }}</th>
                <th class="hidden-sm hidden-xs">{{ trans('organisations.fields.type') }}</th>
                <th>{{ trans('organisations.members.fields.role') }}</th>
                @if ($campaign->enabled('locations'))
                    <th class="hidden-sm hidden-xs">{{ trans('crud.fields.location') }}</th>
                @endif
                @if(auth()->check() && auth()->user()->isAdmin())
                    <th></th>
                @endif
                <th></th>
            </tr>
            @foreach ($members as $organisation)
                <tr>
                    <td>
                        <a class="entity-image" style="background-image: url('{{ $organisation->organisation->getImageUrl(40) }}');" title="{{ $organisation->organisation->name }}" href="{{ route('organisations.show', $organisation->organisation->id) }}"></a>
                    </td>
                    <td>
                        {!! $organisation->organisation->tooltipedLink() !!}
                    </td>
                    <td class="hidden-sm hidden-xs">{{ $organisation->organisation->type }}</td>
                    <td>{{ $organisation->role }}</td>
                    @if ($campaign->enabled('locations'))
                        <td class="hidden-sm hidden-xs">
                            @if ($organisation->organisation->location)
                                {!! $organisation->organisation->location->tooltipedLink() !!}
                            @endif
                        </td>
                    @endif
                    @include('cruds.partials.private', ['model' => $organisation])
                    <td class="text-right">
                        @can('organisation', [$model, 'edit'])
                            <a href="{{ route('characters.character_organisations.edit', [$model, $organisation]) }}" class="btn btn-xs btn-primary"
                               data-toggle="ajax-modal" data-target="#entity-modal" data-url="{{ route('characters.character_organisations.edit', [$model, $organisation]) }}">
                                <i class="fa fa-edit"></i> <span class="visible-sm">{{ trans('crud.edit') }}</span>
                            </a>
                        @endcan
                        @can('organisation', [$model, 'delete'])
                            <button class="btn btn-xs btn-danger delete-confirm" data-toggle="modal" data-name="{{ $organisation->organisation->name }}"
                                    data-target="#delete-confirm" data-delete-target="delete-form-{{ $organisation->id }}"
                                    title="{{ __('crud.remove') }}">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['characters.character_organisations.destroy', $model->id, $organisation->id], 'style' => 'display:inline', 'id' => 'delete-form-' . $organisation->id]) !!}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    @if ($members->hasPages())
        <div class="box-footer text-right">
            {{ $members->fragment('character-organisations')->links() }}
        </div>
    @endif
</div>
