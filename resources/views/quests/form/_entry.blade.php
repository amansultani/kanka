
<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.name', ['trans' => 'quests'])
    </div>
    <div class="col-md-6">
        @include('cruds.fields.type', ['base' => \App\Models\Quest::class, 'trans' => 'quests'])
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.quest', ['isParent' => true])
    </div>
    <div class="col-md-6">
        @include('cruds.fields.character', ['label' => 'quests.fields.character', 'name' => 'character_id'])
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>{{ __('quests.fields.date') }}</label>
            {!! Form::date('date', FormCopy::field('date')->string(), ['class' => 'form-control date-picker']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="checkbox form-group">
            {!! Form::hidden('is_completed', 0) !!}
            <label>{!! Form::checkbox('is_completed', 1, (!empty($model) ? $model->is_completed : (!empty($source) ? FormCopy::field('is_completed')->boolean() : 0))) !!}
                {{ __('quests.fields.is_completed') }}
            </label>
            <p class="help-block">
                {{ __('quests.helpers.is_completed') }}
            </p>
        </div>
    </div>

</div>
@include('cruds.fields.entry2')
<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.tags')
    </div>
    <div class="col-md-6">
        @include('cruds.fields.image')
    </div>
</div>

<hr />
@include('cruds.forms._calendar', ['source' => $source])
