<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th>Channel Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($channels as $channel)
            <tr>
                <td>{{ $channel->channel_name }}</td>
                <td style="width: 120px">
                    <div class='btn-group'>
                        <!-- <a href="{{ route('channels.show', [$channel->id]) }}" class='btn btn-primary btn-xs'>
                            <i class="bi bi-eye"></i>
                        </a> -->
                        <a href="{{ route('channels.edit', [$channel->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('channels.destroy', [$channel->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
            <!-- Your other content here if any -->
        </div>
    </div>
</div>
