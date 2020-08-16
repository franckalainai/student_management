<div class="table-responsive">
    <table class="table" id="semesters-table">
        <thead>
            <tr>
                <th>Semester Name</th>
                <th>Semester Code</th>
                <th>Semester Duration</th>
                <th>Semester Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($semesters as $semesters)
            <tr>
                <td>{{ $semesters->semester_name }}</td>
                <td>{{ $semesters->semester_code }}</td>
                <td>{{ $semesters->semester_duration }}</td>
                <td>{{ $semesters->semester_description }}</td>
                <td>
                    {!! Form::open(['route' => ['semesters.destroy', $semesters->semester_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('semesters.show', [$semesters->semester_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('semesters.edit', [$semesters->semester_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
