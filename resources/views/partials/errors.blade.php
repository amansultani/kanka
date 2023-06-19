@if (count($errors) > 0)
    <x-alert type="error">
        <strong>{{ __('partials.errors.title') }}</strong>
        {{ __('partials.errors.description') }}<br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </x-alert>
@endif
