<!-- Business Name Field -->
<div class="col-sm-12">
    {!! Form::label('business_name', 'Business Name:') !!}
    <p>{{ $businesses->business_name }}</p>
</div>

<!-- Username Field -->
<div class="col-sm-12">
    {!! Form::label('username', 'Username:') !!}
    <p>{{ $businesses->username }}</p>
</div>

<!-- Password Field -->
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $businesses->password }}</p>
</div>

<!-- Business Phone Field -->
<div class="col-sm-12">
    {!! Form::label('business_phone', 'Business Phone:') !!}
    <p>{{ $businesses->business_phone }}</p>
</div>

<!-- Provider Field -->
<div class="col-sm-12">
    {!! Form::label('provider', 'Provider:') !!}
    <p>{{ $businesses->provider }}</p>
</div>

<!-- Token Field -->
<div class="col-sm-12">
    {!! Form::label('token', 'Token:') !!}
    <p>{{ $businesses->token }}</p>
</div>

<!-- Permanent Token Field -->
<div class="col-sm-12">
    {!! Form::label('permanent_token', 'Permanent Token:') !!}
    <p>{{ $businesses->permanent_token }}</p>
</div>

<!-- Bot Domain Field -->
<div class="col-sm-12">
    {!! Form::label('bot_domain', 'Bot Domain:') !!}
    <p>{{ $businesses->bot_domain }}</p>
</div>

<!-- Third Party Field -->
<div class="col-sm-12">
    {!! Form::label('third_party', 'Third Party:') !!}
    <p>{{ $businesses->third_party }}</p>
</div>

<!-- Third Party Verify Token Field -->
<div class="col-sm-12">
    {!! Form::label('third_party_verify_token', 'Third Party Verify Token:') !!}
    <p>{{ $businesses->third_party_verify_token }}</p>
</div>

