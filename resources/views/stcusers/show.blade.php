@extends('layouts.app')

@section('content')

<div class="pagetitle">
    <h1>Stc users Details</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('stcusers.index') }}">stc users</a></li>
            <li class="breadcrumb-item">Stc users Details</li>
            <li class="breadcrumb-item active">VIEW</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Stc users Details</h5>
                <div class="col-lg-12">
                    <!-- Move the button to the right -->
                    <div class="text-right">
    <button type="button" onclick="window.location.href='{{ route('stcusers.index') }}'" class="btn btn-primary rounded-pill">Back</button>
</div>

                    <!-- Table with stripped rows -->
                    <table class="table table-bordered border-primary">
                        <tbody>
                            <!-- Conversation Id Field -->
                            <tr>
                                <th>{!! Form::label('conversation_id', 'Conversation Id:') !!}</th>
                                <td>{{ $stcusers->conversation_id }}</td>
                            </tr>
                            <!-- Wfms Task Num Field -->
                            <tr>
                                <th>{!! Form::label('wfms_task_num', 'Wfms Task Num:') !!}</th>
                                <td>{{ $stcusers->wfms_task_num }}</td>
                            </tr>
                            <!-- Crm Order Num Field -->
                            <tr>
                                <th>{!! Form::label('crm_order_num', 'Crm Order Num:') !!}</th>
                                <td>{{ $stcusers->crm_order_num }}</td>
                            </tr>
                            <!-- Wfms Order Num Field -->
                            <tr>
                                <th>{!! Form::label('wfms_order_num', 'Wfms Order Num:') !!}</th>
                                <td>{{ $stcusers->wfms_order_num }}</td>
                            </tr>
                            <!-- Can Send Location Field -->
                            <tr>
                                <th>{!! Form::label('can_send_location', 'Can Send Location:') !!}</th>
                                <td>{{ $stcusers->can_send_location == '1' ? 'yes' : 'no' }}</td>
                            </tr>
                            <!-- Can Select Time Field -->
                            <tr>
                                <th>{!! Form::label('can_select_time', 'Can Select Time:') !!}</th>
                                <td>{{ $stcusers->can_select_time == '1' ? 'yes' : 'no' }}</td>
                            </tr>
                            <!-- Can Cancel Order Field -->
                            <tr>
                                <th>{!! Form::label('can_cancel_order', 'Can Cancel Order:') !!}</th>
                                <td>{{ $stcusers->can_cancel_order == '1' ? 'yes' : 'no' }}</td>
                            </tr>
                            <!-- Can Confirm Order Field -->
                            <tr>
                                <th>{!! Form::label('can_confirm_order', 'Can Confirm Order:') !!}</th>
                                <td>{{ $stcusers->can_confirm_order == '1' ? 'yes' : 'no' }}</td>
                            </tr>
                            <!-- Survey Id Field -->
                            <tr>
                                <th>{!! Form::label('survey_id', 'Survey Id:') !!}</th>
                                <td>{{ $stcusers->survey_id }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
