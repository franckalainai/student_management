<div class="table-responsive">
    <table class="table" id="academics-table">
        <thead>
            <tr>
                <th>Academic Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($academics as $academic)
            <tr>
                <td>{{ $academic->academic_year }}</td>
                <td>
                    {!! Form::open(['route' => ['academics.destroy', $academic->academic_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('academics.show', [$academic->academic_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('academics.edit', [$academic->academic_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
