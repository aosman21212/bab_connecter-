<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="stcusers-table">
            <thead>
            <tr>
                <th>Conversation Id</th>
                <th>Wfms Task Num</th>
                <th>Crm Order Num</th>
                <th>Wfms Order Num</th>
                <th>Can Send Location</th>
                <th>Can Select Time</th>
                <th>Can Cancel Order</th>
                <th>Can Confirm Order</th>
                <th>Survey Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stcusers as $stcusers)
                <tr>
                    <td>{{ $stcusers->conversation_id }}</td>
                    <td>{{ $stcusers->wfms_task_num }}</td>
                    <td>{{ $stcusers->crm_order_num }}</td>
                    <td>{{ $stcusers->wfms_order_num }}</td>
                    <td>{{ $stcusers->can_send_location }}</td>
                    <td>{{ $stcusers->can_select_time }}</td>
                    <td>{{ $stcusers->can_cancel_order }}</td>
                    <td>{{ $stcusers->can_confirm_order }}</td>
                    <td>{{ $stcusers->survey_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['stcusers.destroy', $stcusers->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('stcusers.show', [$stcusers->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('stcusers.edit', [$stcusers->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
        </div>
    </div>
</div>
