<p>
<div class="field-delete-mirror">
    {!! Form::hidden('delete_mirrored', 0) !!}
    <label>{!! Form::checkbox('delete_mirrored', 1)!!}
        {{ __('entities/relations.bulk.delete_mirrored') }}
    </label>
</div>
</p>
