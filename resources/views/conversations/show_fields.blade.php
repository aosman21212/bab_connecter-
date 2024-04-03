<!-- Conversation Id Field -->
<div class="col-sm-12">
    {!! Form::label('conversation_id', 'Conversation Id:') !!}
    <p>{{ $conversations->conversation_id }}</p>
</div>

<!-- Business Id Field -->
<div class="col-sm-12">
    {!! Form::label('business_id', 'Business Id:') !!}
    <p>{{ $conversations->business_id }}</p>
</div>

<!-- Channel Id Field -->
<div class="col-sm-12">
    {!! Form::label('channel_id', 'Channel Id:') !!}
    <p>{{ $conversations->channel_id }}</p>
</div>

<!-- Client Id Field -->
<div class="col-sm-12">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $conversations->client_id }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $conversations->status }}</p>
</div>

