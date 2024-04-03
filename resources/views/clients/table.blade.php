


<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
            <th>Whatsapp</th>
                <th>Facebook</th>
                <th>Instagram</th>
                <th>Gbm</th>
                <th>Client Name</th>
                <th>Language</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $clients)
                <tr>
                    <td>{{ $clients->whatsapp }}</td>
                    <td>{{ $clients->facebook }}</td>
                    <td>{{ $clients->instagram }}</td>
                    <td>{{ $clients->gbm }}</td>
                    <td>{{ $clients->client_name }}</td>
                    <td>{{ $clients->language }}</td>
                    <td style="width: 120px">
                        <div class='btn-group'>
                            <a href="{{ route('clients.edit', [$clients->id]) }}" class='btn btn-warning btn-xs'>
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('clients.destroy', [$clients->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
