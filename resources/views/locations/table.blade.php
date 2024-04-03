



<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
            <th>Message Id</th>
                <th>Address</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Name</th>
                <th>Url</th>
                <th colspan="3">Action</th>
        </thead>
        <tbody>
        @foreach($locations as $locations)
                <tr>
                    <td>{{ $locations->message_id }}</td>
                    <td>{{ $locations->address }}</td>
                    <td>{{ $locations->latitude }}</td>
                    <td>{{ $locations->longitude }}</td>
                    <td>{{ $locations->name }}</td>
                    <td>{{ $locations->url }}</td>
                    <td style="width: 120px">
                        <div class='btn-group'>
                            <a href="{{ route('locations.edit', [ $locations->id]) }}" class='btn btn-warning btn-xs'>
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('locations.destroy', [$locations ->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
