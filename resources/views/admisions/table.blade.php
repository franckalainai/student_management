<div class="table-responsive">
    <table class="table" id="admisions-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Dob</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>Status</th>
                <th>Faculty</th>
                <th>Department Name</th>
                <th>Year</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admisions as $admision)
            <tr>
                <td>{{ $admision->first_name }}</td>
                <td>{{ $admision->last_name }}</td>
                <td>
                    @if($admision->gender == 0)
                        <span class="badge badge-pill badge-success">Male</span>
                    @else
                        <span class="badge  badge-pill badge-danger">Female</span>
                    @endif

                </td>
                <td>{{ $admision->dob }}</td>
                <td>{{ $admision->phone }}</td>
                <td>{{ $admision->address }}</td>
                <td>{{ $admision->nationality }}</td>
                <td>
                    @if($admision->status == 0)
                        <span class="badge badge-pill badge-success">Single</span>
                    @else
                        <span class="badge  badge-pill badge-danger">Married</span>
                    @endif

                </td>
                <td>{{ $admision->faculty_name }}</td>
                <td>{{ $admision->department_name }}</td>
                <td>{{ $admision->year }}</td>
            <td>

                <img src="{{asset('admissions_images/' . $admision->image)}}"
                        class="rounded-circle" with="50" height="50" style="border-radius: 50%; vertical-align: middle">
                </td>
                <td>
                    {!! Form::open(['route' => ['admisions.destroy', $admision->student_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admisions.show', [$admision->student_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admisions.edit', [$admision->student_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
