<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">Business Name</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Business Phone</th>
                <th scope="col">Provider</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($businesses as $business)
            <tr>
                <td>{{ $business->business_name }}</td>
                <td>{{ $business->username }}</td>
                <td>{{ $business->password }}</td>
                <td>{{ $business->business_phone }}</td>
                <td>{{ $business->provider }}</td>
                <td style="width: 120px">
                    <div class='btn-group'>
                        <a href="{{ route('businesses.show', [$business->id]) }}" class='btn btn-primary btn-xs'>
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('businesses.edit', [$business->id]) }}" class='btn btn-warning btn-xs'>
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('businesses.destroy', [$business->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
            {{ $businesses->links() }}
        </div>
    </div>
</div>
