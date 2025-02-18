@if ((auth()->guest() || (auth()->check() && !auth()->user()->settings()->get('banner_bf2023'))) && \Carbon\Carbon::create(2023, 11, 28)->isFuture())
    <div class="alert alert-warning p-2 flex gap-2 banner-notification items-center" id="banner-notification">
        <div class="grow">
            <a href="{{ route('settings.subscription') }}" class="block">
                {!! __('banners.blackfriday23', ['code' => '<code>BF2023</code>']) !!}
            </a>
        </div>
        @if (auth()->check())
            <button type="button" class="close p-2 banner-notification-dismiss text-2xl" data-dismiss="#banner-notification" aria-hidden="true" data-url="{{ route('settings.banner', ['code' => 'bf2023']) }}">×</button>
        @endif
    </div>
@endif

@if (false && auth()->check() && !auth()->user()->settings()->get('kanka_v20'))
<div class="alert alert-warning p-2 flex gap-2 banner-notification " id="banner-notification">
    <div class="grow">
        Kanka will be undergoing scheduled maintenance on Wednesday 1st of November 2023. As a result, Kanka will be unavailable from <a href="https://everytimezone.com/s/c79fc09c" target="_blank" style="text-decoration: underline"><i class="fa-solid fa-external-link"></i> 14:30 UTC</a> to 18:30 UTC. Join us on <a href="{{ config('social.discord') }}" target="_blank"  style="text-decoration: underline">Discord</a> to get updates.
    </div>
    @if (auth()->check())
        <button type="button" class="close p-2 banner-notification-dismiss text-2xl" data-dismiss="#banner-notification" aria-hidden="true" data-url="{{ route('settings.banner', ['code' => 'kanka_v20']) }}">×</button>
    @endif
</div>
@endif

@if (auth()->check() && in_array(app()->currentLocale(), ['nl']) && !auth()->user()->settings()->get('banner_translators_2024'))
<div class="alert alert-info p-2 flex gap-2" id="banner-notification">
    <div class="grow">
        Kanka is community translated into <strong>{{ app()->currentLocale() === 'nl' ? 'Dutch' : 'Italian' }}</strong>, and is in need of new translators before February 2024. If you want to help keep Kanka available in Dutch, message us on <a href="{{ config('social.discord') }}" target="_blank">Discord</a>!
    </div>
    <button type="button" class="close p-2 banner-notification-dismiss text-2xl" data-dismiss="#banner-notification" aria-hidden="true" data-url="{{ route('settings.banner', ['code' => 'translators_2024']) }}">×</button>
</div>
@endif
