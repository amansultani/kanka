@php
$name = 'entity_header_uuid';
$label = __('fields.gallery-header.description');
$description = __('crud.fields.image');

if (isset($bulk)) {
    $name = 'entity_header';
    $label = __('fields.header-image.title');
    $description = '';
}

$preset = null;
if (isset($model) && $model->entity && $model->entity->header_uuid) {
    $preset = $model->entity->header;
} else {
    $preset = FormCopy::field('header')->entity()->select();
}
@endphp

@if (isset($bulk) && !$campaign->boosted())
    @include('cruds.fields.helpers.boosted', ['key' => 'fields.header-image.boosted-description'])
@else
    <x-forms.field
        field="header-gallery"
        :label="$label">
        <x-grid type="3/4">
            <div class="col-span-3">
                <x-forms.foreign
                    :campaign="$campaign"
                    :name="$name"
                    :allowClear="true"
                    :route="route('images.find', $campaign)"
                    :label="$description"
                    :placeholder="__('fields.gallery.placeholder')"
                    :selected="$preset">
                </x-forms.foreign>
            </div>

            <div class="preview">
                @if (!empty($model->entity) && !empty($model->entity->header_uuid) && !empty($model->entity->header))
                    @include('cruds.fields._image_preview', [
                        'image' => $model->entity->header->getUrl(80, null, 'header_image'),
                        'title' => $model->name,
                    ])
                @endif
            </div>
        </x-grid>
    </x-forms.field>
@endif
@if (!empty($model->entity) && !empty($model->entity->image_uuid) && empty($model->entity->image))
    <input type="hidden" name="entity_image_uuid" value="{{ $model->entity->image_uuid }}" />
@endif
