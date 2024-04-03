<!-- Conversation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conversation_id', 'Conversation Id:') !!}
    {!! Form::text('conversation_id', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Business Id Field -->
<!-- Business Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_id', 'Business:') !!}
    {!! Form::select('business_id', $businesses, null, ['class' => 'form-control', 'required', 'placeholder' => 'Select a business']) !!}
</div>

<!-- Channel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('channel_id', 'Channel:') !!}
    {!! Form::select('channel_id', $channels, null, ['class' => 'form-control', 'required', 'placeholder' => 'Select a channel']) !!}
</div>


<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client:') !!}
    {!! Form::select('client_id', $Clients, null, ['class' => 'form-control', 'required', 'placeholder' => 'Select a client']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['1' => 'Bot', '2' => 'Human', '3' => 'Survey', '4' => '3rd Party'], null, ['class' => 'form-control', 'required']) !!}
</div>
