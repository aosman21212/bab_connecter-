

<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
            <th>Message Id</th>
                <th>Size</th>
                <th>Url</th>
                
               
                <th>Is Voice</th>
                <th>Type</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($media as $media)
                <tr>
                    <td>{{ $media->message_id }}</td>
                    <td>{{ $media->size }}</td>
                    <td>{{ $media->url }}</td>
                
                    <td>{{ $media->is_voice }}</td>
                    <td>{{ $media->type }}</td>
                    <td style="width: 120px">
                        <div class='btn-group'>
                            <a href="{{ route('media.edit', [ $media->id]) }}" class='btn btn-warning btn-xs'>
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('media.destroy', [$media ->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
