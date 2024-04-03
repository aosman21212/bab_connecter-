<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th>Conversation Id</th>
                <th>Business Name</th>
                <th>Channel Name</th>
                <th>Client Name</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($conversations as $conversation)
                <tr>
                    <td>{{ $conversation->conversation_id }}</td>
                    <td>{{ $conversation->business->business_name }}</td>
                    <td>{{ $conversation->channel->channel_name }}</td>
                    <td>{{ $conversation->client->client_name }}</td>
                    <td>
    @if($conversation->status == 1)
        Bot
    @elseif($conversation->status == 2)
        Human
    @elseif($conversation->status == 3)
        Survey
    @elseif($conversation->status == 4)
        3rd Party
    @endif
</td>
                    <td style="width: 120px">
                        <div class='btn-group'>
                            <a href="{{ route('conversations.edit', [$conversation->id]) }}" class='btn btn-warning btn-xs'>
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('conversations.destroy', [$conversation->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
        </div>
    </div>
</div>
