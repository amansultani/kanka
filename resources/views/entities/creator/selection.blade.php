<div class="modal-body text-center">
    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title">
        {{ __('entities.creator.title') }}
    </h4>

    @if(isset($new))
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {!! $new !!}
        </div>
    @endif
    <p class="help-block my-5">{{ __('entities.creator.helper_v2') }}</p>
    <div class="entity-creator">
        @if (isset($entities['characters']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'characters']) }}">
                    <i class="fa-solid fa-user fa-2x"></i>
                    {{ __('entities.character') }}
                </a>
        @endif

        @if (isset($entities['families']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'families']) }}">
                    <i class="ra ra-double-team ra-2x"></i>
                    {{ __('entities.family') }}
                </a>
        @endif

        @if (isset($entities['locations']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'locations']) }}">
                    <i class="ra ra-tower ra-2x"></i>
                    {{ __('entities.location') }}
                </a>
        @endif

        @if (isset($entities['organisations']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'organisations']) }}">
                    <i class="ra ra-hood ra-2x"></i>
                    {{ __('entities.organisation') }}
                </a>
        @endif

        @if (isset($entities['items']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'items']) }}">
                    <i class="ra ra-gem-pendant ra-2x"></i>
                    {{ __('entities.item') }}
                </a>
        @endif

        @if (isset($entities['notes']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'notes']) }}">
                    <i class="fa-solid fa-book-open fa-2x"></i>
                    {{ __('entities.note') }}
                </a>
        @endif

        @if (isset($entities['events']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'events']) }}">
                    <i class="fa-solid fa-bolt fa-2x"></i>
                    {{ __('entities.event') }}
                </a>
        @endif

        @if (isset($entities['calendars']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'calendar']) }}">
                    <i class="fa-solid fa-calendar fa-2x"></i>
                    {{ __('entities.calendar') }}
                </a>
        @endif

        @if (isset($entities['races']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'races']) }}">
                    <i class="ra ra-wyvern ra-2x"></i>
                    {{ __('entities.race') }}
                </a>
        @endif

        @if (isset($entities['quests']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'quests']) }}">
                    <i class="ra ra-wooden-sign ra-2x"></i>
                    {{ __('entities.quest') }}
                </a>
        @endif

        @if (isset($entities['journals']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'journals']) }}">
                    <i class="ra ra-quill-ink ra-2x"></i>
                    {{ __('entities.journal') }}
                </a>
        @endif

        @if (isset($entities['abilities']))
                <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'abilities']) }}">
                    <i class="ra ra-fire-symbol ra-2x"></i>
                    {{ __('entities.ability') }}
                </a>
        @endif

        @can('create', \App\Models\Tag::class)
            <a href="#" class="rounded-lg" data-toggle="entity-creator" data-url="{{ route('entity-creator.form', ['type' => 'tags']) }}">
                <i class="fa-solid fa-tags fa-2x"></i>
                {{ __('entities.tag') }}
            </a>
        @endcan
    </div>

    <p class="help-block my-5">{{ __('entities.creator.missing') }}</p>
</div>

