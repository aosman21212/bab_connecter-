<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Stc Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stc_name', 'Stc Name:') !!}
    {!! Form::text('stc_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Parameters Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('parameters', 'Parameters:') !!}
    {!! Form::textarea('parameters', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>