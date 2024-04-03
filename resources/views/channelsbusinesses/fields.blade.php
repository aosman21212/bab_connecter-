<!-- Business Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_id', 'Business Name:') !!}
    {!! Form::select('business_id', $businesses, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Channel Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('channel_id', 'Channel Name:') !!}
    {!! Form::select('channel_id', $channels, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Business Contact Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_contact_id', 'Business Contact Id:') !!}
    {!! Form::text('business_contact_id', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
</div>
