<?php
/**
 * @var \App\Models\Entity $entity
 * @var \App\Models\Post $model
 */
use App\Enums\Visibility;

$options = [];
if (isset($bulk)) {
    $options[''] = null;
}

$options[Visibility::All->value] = __('crud.visibilities.all');

if (auth()->user()->isAdmin()) {
    $options[Visibility::Admin->value] = __('crud.visibilities.admin');
    $options[Visibility::Member->value] = __('crud.visibilities.members');
}
if (!isset($model) || ($model->created_by == auth()->user()->id)) {
    $options[Visibility::Self->value] = __('crud.visibilities.self');
    $options[Visibility::AdminSelf->value] = __('crud.visibilities.admin-self');
}

// If it's a visibility self & admin, and we're not the creator, we can't change this
if (isset($model) && $model->visibility_id === Visibility::AdminSelf->value && $model->created_by !== auth()->user()->id) {
    $options = [Visibility::AdminSelf->value => __('crud.visibilities.admin-self')];
}

// The visibility is set to admin but we're not an admin, don't allow changing
// as it's a custom permission for the user to be able to edit this model.
if (isset($model) && ((in_array($model->visibility_id, [Visibility::Admin->value, Visibility::AdminSelf->value]) && !auth()->user()->isAdmin()) &&
    (in_array($model->visibility_id, [Visibility::Self->value, Visibility::AdminSelf->value]) && !($model->created_by == auth()->user()->id))
)) {
    ?><input type="hidden" name="visibility_id" value="{{ $model->visibility_id }}" /><?php
    return;
}
$visibilityUniqueID = uniqid('visibility_');
?>
<x-forms.field
    field="visibility"
    label="{{ __('crud.fields.visibility') }}"
    :tooltip="true"
    :helper="__('visibilities.tooltip')"
    link="//docs.kanka.io/en/latest/advanced/visibility.html">
    {{ Form::select('visibility_id', $options, empty($model) ? (isset($bulk) ? null : $campaign->defaultVisibilityID()) : ($model->visibility_id instanceof Visibility ? $model->visibility_id->value : $model->visibility_id), ['class' => 'w-full', 'id' => $visibilityUniqueID]) }}
</x-forms.field>
