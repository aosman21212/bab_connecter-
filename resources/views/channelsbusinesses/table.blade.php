<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th>Business Name</th>
                <th>Channel Name</th>
                <th>Business Contact Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($channelsbusinesses as $channelsbusiness)
                <tr>
                    <td>{{ $channelsbusiness->business->business_name }}</td>
                    <td>{{ $channelsbusiness->channel->channel_name }}</td>
                    <td>{{ $channelsbusiness->business_contact_id }}</td>
                    <td style="width: 120px">
                        <div class='btn-group'>
                            <a href="{{ route('channelsbusinesses.edit', [$channelsbusiness->id]) }}" class='btn btn-warning btn-xs'>
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('channelsbusinesses.destroy', [$channelsbusiness->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
            {{ $channelsbusinesses->links() }}
        </div>
    </div>
</div>
