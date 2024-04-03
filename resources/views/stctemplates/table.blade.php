<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="stctemplates-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Stc Name</th>
                <th>Parameters</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stctemplates as $stctemplates)
                <tr>
                    <td>{{ $stctemplates->name }}</td>
                    <td>{{ $stctemplates->stc_name }}</td>
                    <td>{{ $stctemplates->parameters }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['stctemplates.destroy', $stctemplates->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('stctemplates.show', [$stctemplates->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('stctemplates.edit', [$stctemplates->id]) }}"
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
