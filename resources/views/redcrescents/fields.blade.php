<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client Id:') !!}
    {!! Form::number('client_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Conversation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('conversation_id', 'Conversation Id:') !!}
    {!! Form::number('conversation_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Ticket Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    {!! Form::text('ticket_id', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Ticket Id New Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_id_new', 'Ticket Id New:') !!}
    {!! Form::text('ticket_id_new', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Is Open Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_open', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_open', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_open', 'Is Open', ['class' => 'form-check-label']) !!}
    </div>
</div>