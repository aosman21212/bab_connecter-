<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="users-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>Conversation Id</th>
                <th>Password</th>
                <th>Remember Token</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $users)
                <tr>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->email_verified_at }}</td>
                    <td>{{ $users->conversation_id }}</td>
                    <td>{{ $users->password }}</td>
                    <td>{{ $users->remember_token }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$users->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', [$users->id]) }}"
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
