<!-- Conversation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conversation_id', 'Conversation Id:') !!}
    {!! Form::number('conversation_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Send By Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('send_by_id', 'Send By Id:') !!}
    {!! Form::number('send_by_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Send By Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('send_by_type', 'Send By Type:') !!}
    {!! Form::text('send_by_type', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Message Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message_id', 'Message Id:') !!}
    {!! Form::text('message_id', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Tracking Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tracking_info', 'Tracking Info:') !!}
    {!! Form::text('tracking_info', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Media Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('media_id', 'Media Id:') !!}
    {!! Form::number('media_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Media Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('media_type', 'Media Type:') !!}
    {!! Form::text('media_type', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Error Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('error_code', 'Error Code:') !!}
    {!! Form::text('error_code', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Error Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('error_message', 'Error Message:') !!}
    {!! Form::text('error_message', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Send To 3Rd Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('send_to_3rd', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('send_to_3rd', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('send_to_3rd', 'Send To 3Rd', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Send To 3Rd Code Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('send_to_3rd_code', 'Send To 3Rd Code:') !!}
    {!! Form::textarea('send_to_3rd_code', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Send At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('send_at', 'Send At:') !!}
    {!! Form::text('send_at', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Delivered At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivered_at', 'Delivered At:') !!}
    {!! Form::text('delivered_at', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Read At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('read_at', 'Read At:') !!}
    {!! Form::text('read_at', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>