<footer id="footer" class="main-footer pt-10 pb-8">
    @ads('rich')
    <div class="vm-placement" data-id="{{ config('tracking.venatus.inline') }}"></div>
    <div class="vm-placement" data-id="{{ config('tracking.venatus.rich') }}" style="display:none"></div>
    @endads

    <div class="footer-links">
        <div class="grid gap-2 grid-cols-2 md:grid-cols-5 mx-auto max-w-5xl">
            <div class="col-span-2 md:col-auto text-center">
                <a href="{{ route('home') }}" class="logo">
                    <img class="logo-blue" src="https://th.kanka.io/gR8y1nxfEhBC1nVYdQpr2pUW3lY=/48x48/smart/src/app/logos/logo.png" alt="Kanka logo blue" title="Kanka" width="48" height="48" />
                    <img class="logo-white" src="https://th.kanka.io/547r5DZYF2fmdWy9sZztqAnYJN0=/48x48/smart/src/app/logos/logo-small-white.png" alt="Kanka logo white" title="Kanka" width="48" height="48" />
                </a>
            </div>
            <div class="cell text-center truncate mb-1">
                <h5 class="text-uppercase m-0 mb-1">
                    {{ __('footer.platform') }}
                </h5>

                <ul class="list-none m-0 p-0">
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.features') }}">
                            {{ __('front.menu.features') }}
                        </a>
                    </li>
                    @if (config('services.stripe.enabled'))
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.premium') }}">
                            {{ __('footer.premium') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.pricing') }}">
                            {{ __('front.menu.pricing') }}
                        </a>
                    </li>
                    @endif
                    <li class="px-0 py-1 text-sm">
                        <a href="//marketplace.kanka.io" target="_blank">
                            {{ __('front.menu.marketplace') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="cell text-center truncate mb-1">
                <h5 class="text-uppercase m-0 mb-1">
                    {{ __('footer.resources') }}
                </h5>
                <ul class="list-none m-0 p-0">
                    @if(config('app.admin'))<li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.faqs.index') }}">
                            {{ __('front.menu.kb') }}
                        </a>
                    </li>@endif
                    <li class="px-0 py-1 text-sm">
                        <a href="//docs.kanka.io/en/latest/index.html" target="_blank">
                            {{ __('front.menu.documentation') }}
                        </a>
                    </li>
                    @if(config('app.admin'))
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('larecipe.index') }}">
                            {{ __('front.features.api.link') }}
                        </a>
                    </li>@endif
                    <li class="px-0 py-1 text-sm">
                        <a href="//blog.kanka.io/category/news" target="_blank">
                            {{ __('footer.whats-new') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="//blog.kanka.io" target="_blank">
                            {{ __('footer.blog') }}
                        </a>
                    </li>

                    @if (config('services.stripe.enabled'))
                    <li class="px-0 py-1 text-sm">
                        <a href="//status.kanka.io" target="_blank">
                            {{ __('footer.status') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.newsletter') }}">
                            {{ __('front.menu.newsletter') }}
                        </a>
                    </li>@endif
                </ul>
            </div>

            <div class="cell text-center truncate mb-1">
                <h5 class="text-uppercase m-0 mb-1">
                    {{ __('front.footer.headings.community') }}
                </h5>
                <ul class="list-none m-0 p-0">
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.public_campaigns') }}">
                            {{ __('front.menu.campaigns') }}
                        </a>
                    </li>
                    @if(config('app.admin'))
                        <li class="px-0 py-1 text-sm">
                            <a href="{{ route('community-votes.index') }}">
                                {{ __('front/community-votes.title') }}
                            </a>
                        </li>
                    @endif
                    @if(config('app.admin'))
                        <li class="px-0 py-1 text-sm">
                            <a href="{{ route('community-events.index') }}">
                                {{ __('front/community-events.title') }}
                            </a>
                        </li>
                        <li class="px-0 py-1 text-sm">
                            <a href="{{ route('front.hall-of-fame') }}">
                                {{ __('front/hall-of-fame.title') }}
                            </a>
                        </li>
                    @endif
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ config('social.discord') }}" target="discord" title="Discord" rel="noreferrer">
                            Discord
                        </a>
                    </li>
                </ul>
            </div>

            <div class="cell text-center truncate mb-1">
                <h5 class="text-uppercase m-0 mb-1">
                    {{ __('footer.company') }}
                </h5>
                <ul class="list-none m-0 p-0">
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.about') }}">
                            {{ __('front.menu.about') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.contact') }}">
                            {{ __('front.menu.contact') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.press-kit') }}">
                            {{ __('footer.press-kit') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.security') }}">
                            {{ __('footer.security') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.privacy') }}">
                            {{ __('footer.privacy') }}
                        </a>
                    </li>
                    <li class="px-0 py-1 text-sm">
                        <a href="{{ route('front.terms') }}">
                            {{ __('footer.terms') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-socials text-center px-0 my-2 md:flex justify-center gap-5 items-center">
            <div class="email py-2 text-base">
                <i class="fa-solid fa-envelope hidden-xs" aria-hidden="true"></i> {{ config('app.email') }}
            </div>

            <div class="socials py-2 text-xl">
                <a href="{{ config('social.discord') }}" target="discord" title="Discord" rel="noreferrer" class="mr-1">
                    <i class="fa-brands fa-discord" aria-hidden="true" aria-label="Discord"></i>
                    <span class="sr-only">Discord</span>
                </a>
                @if (config('social.facebook'))
                <a href="{{ config('social.facebook') }}" target="facebook" title="Facebook" rel="noreferrer" class="mr-1">
                    <i class="fa-brands fa-facebook" aria-hidden="true" aria-label="Kanka Facebook"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                @endif
                @if (config('social.instagram'))
                <a href="{{ config('social.instagram') }}" target="instagram" title="Instagram" rel="noreferrer" class="mr-1">
                    <i class="fa-brands fa-instagram" aria-hidden="true" aria-label="Kanka Instagram"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                @endif
                @if (config('social.youtube'))
                <a href="{{ config('social.youtube') }}" target="youtube" title="Youtube" rel="noreferrer" class="mr-1">
                    <i class="fa-brands fa-youtube" aria-hidden="true" aria-label="Kanka Youtube"></i>
                    <span class="sr-only">Youtube</span>
                </a>
                @endif
                @if (config('social.reddit'))
                <a href="{{ config('social.reddit') }}" target="reddit" title="Reddit" rel="noreferrer" class="mr-1">
                    <i class="fa-brands fa-reddit" aria-hidden="true" aria-label="Kanka Subreddit"></i>
                    <span class="sr-only">Reddit</span>
                </a>
                @endif
                @if (config('social.twitter'))
                <a href="{{ config('social.twitter') }}" target="twitter" title="Twitter" rel="noreferrer">
                    <i class="fa-brands fa-twitter" aria-hidden="true" aria-label="Kanka Twitter"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                @endif
            </div>

            <div id="language-switcher" class="language-switcher block text-lg py-2">
                <a href="#" class="" data-toggle="dialog" data-target="language-select-modal">
                    <x-icon class="fa-solid fa-language"></x-icon>
                    {{ LaravelLocalization::getCurrentLocaleNative() }} (Switch)
                </a>
            </div>
        </div>
        <div class="footer-copyright text-xs text-center">
            Kanka v{{ config('app.version') }} - {!! __('front.footer.copyright', ['copy' => '&copy;', 'year' => date('Y'), 'company' => 'Owlchester SNC'])!!} - {{ __('footer.server_time', ['time' => \Carbon\Carbon::now()->isoFormat('MMMM Do YYYY, h:mm a')]) }} ({{ gethostname() }})
        </div>
    </div>
</footer>

<x-dialog id="language-select-modal" :title="__('footer.language-switcher.title')">
    <div class="grid grid-cols-2 gap-4">
        <ul class="list-unstyled">
            <li class="py-2">
                <a rel="alternate" hreflang="en-US" href="{{ url()->full() . '?lang=en-US' }}">
                    US English
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="en" href="{{ url()->full() . '?lang=en' }}">
                    UK English
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="pt-BR" href="{{ url()->full() . '?lang=pt-BR' }}">
                    Português do Brasil
                </a>
            </li>
        </ul>
        <ul class="list-unstyled">
            <li class="py-2">
                <a rel="alternate" hreflang="de" href="{{ url()->full() . '?lang=de' }}">
                    Deutsch
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="fr" href="{{ url()->full() . '?lang=fr' }}">
                    Français
                </a>
            </li>
            <li class="py-2">
                <a rel="alternate" hreflang="es" href="{{ url()->full() . '?lang=es' }}">
                    Español
                </a>
            </li>
        </ul>
    </div>
    <div class="text-center w-full">
        {{ __('footer.language-switcher.other') }}
    </div>
    <div class="w-full">
        <div class="grid grid-cols-2 gap-4">
            <ul class="list-unstyled">
                <li class="py-2">
                    <a rel="alternate" hreflang="it" href="{{ url()->full() . '?lang=it' }}">
                        Italiano
                    </a>
                </li>
                <li class="py-2">
                    <a rel="alternate" hreflang="pl" href="{{ url()->full() . '?lang=pl' }}">
                        Polska
                    </a>
                </li>
                <li class="py-2">
                    <a rel="alternate" hreflang="ru" href="{{ url()->full() . '?lang=ru' }}">
                        Pусский
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li class="py-2">
                    <a rel="alternate" hreflang="nl" href="{{ url()->full() . '?lang=nl' }}">
                        Nederlands
                    </a>
                </li>
                <li class="py-2">
                    <a rel="alternate" hreflang="sk" href="{{ url()->full() . '?lang=sk' }}">
                        Slovenský
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-dialog>
