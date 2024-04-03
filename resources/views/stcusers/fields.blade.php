<!-- Conversation Id Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Conversation Id</label>
    <div class="col-sm-10">
        {!! Form::number('conversation_id', null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>

<!-- Wfms Task Num Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Wfms Task Num</label>
    <div class="col-sm-10">
        {!! Form::text('wfms_task_num', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
    </div>
</div>

<!-- Crm Order Num Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Crm Order Num</label>
    <div class="col-sm-10">
        {!! Form::text('crm_order_num', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
    </div>
</div>

<!-- Wfms Order Num Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Wfms Order Num</label>
    <div class="col-sm-10">
        {!! Form::text('wfms_order_num', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
    </div>
</div>

<!-- Survey Id Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Survey Id</label>
    <div class="col-sm-10">
        {!! Form::text('survey_id', null, ['class' => 'form-control', 'maxlength' => 255]) !!}
    </div>
</div>

<!-- Can Select Time Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Can Select Time</label>
    <div class="col-sm-10">
        {!! Form::select('can_select_time', ['1' => 'Yes', '0' => 'No'], null, ['class' => 'form-select', 'required']) !!}
    </div>
</div>

<!-- Can Cancel Order Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Can Cancel Order</label>
    <div class="col-sm-10">
        <select name="can_cancel_order" class="form-select" aria-label="Default select example" required>
            <option selected disabled>Open this select menu</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>
</div>

<!-- Can Send Location Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Can Send Location</label>
    <div class="col-sm-10">
        {!! Form::hidden('can_send_location', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('can_send_location', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('can_send_location', 'Can Send Location', ['class' => 'form-check-label']) !!}
    </div>
</div>

<!-- Can Confirm Order Field -->
<div class="row mb-3">
    <label class="col-sm-2 col-form-label">Can Confirm Order</label>
    <div class="col-sm-10">
        {!! Form::hidden('can_confirm_order', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('can_confirm_order', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('can_confirm_order', 'Can Confirm Order', ['class' => 'form-check-label']) !!}
    </div>
</div>
