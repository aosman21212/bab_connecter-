<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="redcrescents-table">
            <thead>
            <tr>
                <th>Client Id</th>
                <th>Conversation Id</th>
                <th>Ticket Id</th>
                <th>Ticket Id New</th>
                <th>Is Open</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($redcrescents as $redcrescents)
                <tr>
                    <td>{{ $redcrescents->client_id }}</td>
                    <td>{{ $redcrescents->conversation_id }}</td>
                    <td>{{ $redcrescents->ticket_id }}</td>
                    <td>{{ $redcrescents->ticket_id_new }}</td>
                    <td>{{ $redcrescents->is_open }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['redcrescents.destroy', $redcrescents->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('redcrescents.show', [$redcrescents->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('redcrescents.edit', [$redcrescents->id]) }}"
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
