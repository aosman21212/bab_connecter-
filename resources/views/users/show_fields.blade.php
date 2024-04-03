<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/users.fields.name').':') !!}
    <p>{{ $users->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    <p>{{ $users->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="col-sm-12">
    {!! Form::label('email_verified_at', __('models/users.fields.email_verified_at').':') !!}
    <p>{{ $users->email_verified_at }}</p>
</div>

<!-- Conversation Id Field -->
<div class="col-sm-12">
    {!! Form::label('conversation_id', __('models/users.fields.conversation_id').':') !!}
    <p>{{ $users->conversation_id }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    <p>{{ $users->password }}</p>
</div>

<!-- Remember Token Field -->
<div class="col-sm-12">
    {!! Form::label('remember_token', __('models/users.fields.remember_token').':') !!}
    <p>{{ $users->remember_token }}</p>
</div>

