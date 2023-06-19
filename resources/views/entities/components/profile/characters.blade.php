<?php /** @var \App\Models\Character $model */?>

@if (!$model->showProfileInfo())
    @php return @endphp
@endif

@php
//$appearances = $model->characterTraits()->appearance()->orderBy('default_order')->get();
//$traits = $model->characterTraits()->personality()->orderBy('default_order')->get();

@endphp

<x-sidebar.profile>
    @if ($campaignService->enabled('families') && !$model->families->isEmpty())
        <div class="element profile-family">
            <div class="title text-uppercase text-xs">
                {!! \App\Facades\Module::singular(config('entities.ids.family'), __('entities.families')) !!}
            </div>
            @php $existingFamilies = []; @endphp
            @foreach ($model->families as $family)
                @if(!empty($existingFamilies[$family->id]))
                    @continue
                @endif
                @php $existingRaces[$family->id] = true; @endphp
                {!! $family->tooltipedLink() !!}
            @endforeach            </div>
    @endif

    @if (!$model->races->isEmpty() || $model->hasAge())
        @if (!$model->races->isEmpty() && !$model->hasAge())
        <div class="element profile-race">
            <div class="title text-uppercase text-xs">
                {!! \App\Facades\Module::plural(config('entities.ids.race'), __('entities.races')) !!}
            </div>
            @php $existingRaces = []; @endphp
            @foreach ($model->races as $race)
                @if(!empty($existingRaces[$race->id]))
                    @continue
                @endif
                @php $existingRaces[$race->id] = true; @endphp
                {!! $race->tooltipedLink() !!}
            @endforeach
        </div>
        @elseif ($model->races->isEmpty() && $model->hasAge())
        <div class="element profile-age">
            <div class="title text-uppercase text-xs">{{ __('characters.fields.age') }}</div>
            <span>{{ $model->age }}</span>
        </div>
        @else
        <div class="element profile-race-age">
            <div class="title text-uppercase text-xs">
                {!! \App\Facades\Module::plural(config('entities.ids.race'), __('entities.races')) !!},
                {{ __('characters.fields.age') }}
            </div>
            @php $existingRaces = []; @endphp
            @foreach ($model->races as $race)
                @if(!empty($existingRaces[$race->id]))
                    @continue
                @endif
                @php $existingRaces[$race->id] = true; @endphp
                {!! $race->tooltipedLink() !!}
            @endforeach
            <span>{{ $model->age }}</span>
        </div>
        @endif
    @endif


    @if (!empty($model->sex) || !empty($model->pronouns))
        @if (!empty($model->sex) && empty($model->pronouns))
            <div class="element profile-gender">
                <div class="title text-uppercase text-xs">{{ __('characters.fields.sex') }}</div>
                <span>{{ $model->sex }}</span>
            </div>
        @elseif (empty($model->sex) && !empty($model->pronouns))
            <div class="element profile-pronouns">
                <div class="title text-uppercase text-xs">{{ __('characters.fields.pronouns') }}</div>
                <span>{{ $model->pronouns }}</span>
            </div>
        @else
            <div class="element profile-gender-pronouns">
                <div class="title text-uppercase text-xs">{{ __('characters.fields.sex') }}, {{ __('characters.fields.pronouns') }}</div>
                <span>{{ $model->sex }}</span>
                <span>{{ $model->pronouns }}</span>
            </div>
        @endif
    @endif


    @include('entities.components.profile._events')

    @include('entities.components.profile._type')
</x-sidebar.profile>
