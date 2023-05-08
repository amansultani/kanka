@extends('layouts.app', [
    'title' => __('campaigns/export.title') . ' - ' . $campaign->name,
    'breadcrumbs' => [
        ['url' => route('campaign'), 'label' => __('entities.campaign')],
        __('campaigns.show.tabs.export')
    ],
    'canonical' => true,
    'mainTitle' => false,
])

@section('content')
    @include('partials.errors')
    <div class="flex gap-2 flex-col lg:flex-row lg:gap-5">
        <div class="lg:flex-none lg:w-60">
            @include('campaigns._menu', ['active' => 'export'])
        </div>
        <div class="grow max-w-7xl">
            <h3 class="mt-0">
                <button class="btn btn-sm btn-default pull-right" data-toggle="dialog"
                        data-target="export-help">
                    <x-icon class="question"></x-icon>
                    {{ __('campaigns.members.actions.help') }}
                </button>

                {{ __('campaigns/export.title') }}
            </h3>

            @if ($campaign->exportable())
            <div class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3 text-center my-5">
                    <button class="btn btn-primary btn-large campaign-export-btn" data-url="{{ route('campaign.export-process') }}">
                        <i class="fa-solid fa-download" aria-hidden="true"></i>
                        {{ __('campaigns/export.actions.export') }}
                    </button>

                </div>
            </div>
            @else
            <x-alert type="warning">
                {{ __('campaigns/export.errors.limit') }}
            </x-alert>
            @endif
        </div>
    </div>
@endsection

@section('modals')
    @parent
    <x-dialog id="export-help" :title="__('campaigns.show.tabs.export')">
        <p>{{ __('campaigns/export.helpers.intro') }}</p>
        <p>{{ __('campaigns/export.helpers.json') }}</p>
        <p>{!! __('campaigns/export.helpers.import', [
                'api' => link_to('/' . app()->getLocale() . config('larecipe.docs.route') . '/1.0/overview', __('front.features.api.link'), null, ['target' => '_blank'])
        ]) !!}</p>
    </x-dialog>

@endsection
