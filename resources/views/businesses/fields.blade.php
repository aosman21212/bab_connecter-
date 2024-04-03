<!-- Business Name Field -->
<div class="col-md-12">    {!! Form::label('business_name', 'Business Name:') !!}
    {!! Form::text('business_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Username Field -->
<div class="col-md-12">    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- password Field -->
<div class="col-md-12">    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Business Phone Field -->
<div class="col-md-12">    {!! Form::label('business_phone', 'Business Phone:') !!}
    {!! Form::text('business_phone', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Provider Field -->
<div class="col-md-12">    {!! Form::label('provider', 'Provider:') !!}
    {!! Form::text('provider', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Token Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('token', 'Token:') !!}
    {!! Form::textarea('token', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Permanent Token Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('permanent_token', 'Permanent Token:') !!}
    {!! Form::textarea('permanent_token', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Bot Domain Field -->
<div class="col-md-12">    {!! Form::label('bot_domain', 'Bot Domain:') !!}
    {!! Form::text('bot_domain', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Third Party Field -->
<div class="col-md-12">    {!! Form::label('third_party', 'Third Party:') !!}
    {!! Form::text('third_party', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Third Party Verify Token Field -->
<div class="col-md-12">    {!! Form::label('third_party_verify_token', 'Third Party Verify Token:') !!}
    {!! Form::textarea('third_party_verify_token', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>