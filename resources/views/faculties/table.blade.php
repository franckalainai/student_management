<div class="table-responsive">
    <table class="table" id="faculties-table">
        <thead>
            <tr>
                <th>Faculty Name</th>
        <th>Faculty Code</th>
        <th>Faculty Description</th>
        <th>Faculty Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculty)
            <tr>
                <td>{{ $faculty->faculty_name }}</td>
            <td>{{ $faculty->faculty_code }}</td>
            <td>{{ $faculty->faculty_description }}</td>
            <td>@if($faculty->faculty_status == 1)
                    <span class="badge badge-pill badge-success">Active</span>
                @else
                    <span class="badge  badge-pill badge-danger">Inactive</span>
                @endif
            </td>
                <td>
                    {!! Form::open(['route' => ['faculties.destroy', $faculty->faculty_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faculties.show', [$faculty->faculty_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('faculties.edit', [$faculty->faculty_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
