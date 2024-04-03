<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/roles.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 191, 'maxlength' => 191]) !!}
</div>
