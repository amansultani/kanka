<div class="field-pronouns">
    <label>{{ __('characters.fields.pronouns') }}</label>
    {!! Form::text(
        'pronouns',
        null,
        [
            'placeholder' => __('characters.placeholders.pronouns'),
            'class' => 'form-control',
            'maxlength' => 45,
        ]
    ) !!}
</div>
