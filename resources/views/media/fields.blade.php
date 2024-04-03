
<!-- Channel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message_id', 'Message Id:') !!}
    {!! Form::select('message_id', $Messages, null, ['class' => 'form-control select2', 'required', 'placeholder' => 'Select a channel']) !!}
</div>

<script>
    $(document).ready(function(){
        $('.select2').select2();
    });
</script>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::number('size', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Caption Field -->
<div class="form-group col-sm-6">
    {!! Form::label('caption', 'Caption:') !!}
    {!! Form::text('caption', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Filename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fileName', 'Filename:') !!}
    {!! Form::text('fileName', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Mimetype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mimeType', 'Mimetype:') !!}
    {!! Form::text('mimeType', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Pagecount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pageCount', 'Pagecount:') !!}
    {!! Form::text('pageCount', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Height Field -->
<div class="form-group col-sm-6">
    {!! Form::label('height', 'Height:') !!}
    {!! Form::text('height', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Seconds Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seconds', 'Seconds:') !!}
    {!! Form::text('seconds', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Is Voice Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_voice', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_voice', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_voice', 'Is Voice', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>