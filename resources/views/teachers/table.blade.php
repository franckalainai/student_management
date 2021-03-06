<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Dob</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>Passport</th>
                <th>Status</th>
                <th>Dateregistered</th>
                <!--<th>User</th>-->
                <th>Image</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>
                    @if($teacher->gender == 0)
                        <span class="badge badge-pill badge-success">Male</span>
                    @else
                        <span class="badge  badge-pill badge-danger">Female</span>
                    @endif

                </td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->dob }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>{{ $teacher->address }}</td>
                <td>{{ $teacher->nationality }}</td>
                <td>{{ $teacher->passport }}</td>
                <td>
                    @if($teacher->status == 0)
                        <span class="badge badge-pill badge-success">Single</span>
                    @else
                        <span class="badge  badge-pill badge-danger">Married</span>
                    @endif

                </td>
                <td>{{ $teacher->dateregistered }}</td>
                <!--
                    <td>
                        @if(auth::id())
                            <span class="badge badge-pill badge-success">Current User</span>
                            @else
                            <span class="badge  badge-pill badge-danger">Unknown</span>
                        @endif
                    </td>
                -->
                <td>

                <img src="{{asset('teacher_images/' . $teacher->image)}}"
                        class="rounded-circle" with="50" height="50" style="border-radius: 50%; vertical-align: middle">
                </td>
                    <td>
                        {!! Form::open(['route' => ['teachers.destroy', $teacher->teacher_id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('teachers.show', [$teacher->teacher_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('teachers.edit', [$teacher->teacher_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
