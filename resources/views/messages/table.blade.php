<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th>Conversation Id</th>
                <th>Send By Id</th>
                <th>Type</th>
                <th>Message Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->conversation_id }}</td>
                    <td>{{ $message->send_by_id }}</td>
                    <td>{{ $message->type }}</td>
                    <td>{{ $message->message_id }}</td>
                    <td>
                        <div class='btn-group'>
                            <a href="{{ route('messages.edit', [$message->id]) }}" class='btn btn-warning btn-xs'>
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('messages.destroy', [$message->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="float-right">
            <!-- Add any additional content here if needed -->
        </div>
    </div>
</div>
