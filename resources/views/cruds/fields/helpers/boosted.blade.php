@if (auth()->check() && auth()->user()->hasBoosterNomenclature())
    @php
    $pricingOptions = [
        '#boost'
    ];
    if (isset($campaign) && $campaign instanceof \App\Models\Campaign) {
        $pricingOptions['callback'] = $campaign->id;
    }
@endphp
<x-alert type="info">
    {!! __($key, ['boosted-campaign' => link_to(config('domains.front') . '/pricing', __('concept.boosted-campaign'), $pricingOptions)]) !!}
</x-alert>
    <?php return; ?>
@endif

    @php
    $pricingOptions = [
        '#premium'
    ];
    if (isset($campaign) && $campaign instanceof \App\Models\Campaign) {
        $pricingOptions['callback'] = $campaign->id;
    }
@endphp
<x-alert type="info">
    <p>
    {!! __($key, ['boosted-campaign' => link_to('https://' . config('domains.front') . '/pricing', __('concept.premium-campaign'), $pricingOptions)]) !!}
    </p>
</x-alert>
