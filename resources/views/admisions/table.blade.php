<div class="table-responsive">
    <table class="table" id="admisions-table">
        <thead>
            <tr>
                <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father Name</th>
        <th>Father Phone</th>
        <th>Mother Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Current Address</th>
        <th>Nationality</th>
        <th>Passport</th>
        <th>Status</th>
        <th>Dateregistered</th>
        <th>User Id</th>
        <th>Class Id</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admisions as $admision)
            <tr>
                <td>{{ $admision->roll_no }}</td>
            <td>{{ $admision->first_name }}</td>
            <td>{{ $admision->last_name }}</td>
            <td>{{ $admision->father_name }}</td>
            <td>{{ $admision->father_phone }}</td>
            <td>{{ $admision->mother_name }}</td>
            <td>{{ $admision->gender }}</td>
            <td>{{ $admision->email }}</td>
            <td>{{ $admision->dob }}</td>
            <td>{{ $admision->phone }}</td>
            <td>{{ $admision->address }}</td>
            <td>{{ $admision->current_address }}</td>
            <td>{{ $admision->nationality }}</td>
            <td>{{ $admision->passport }}</td>
            <td>{{ $admision->status }}</td>
            <td>{{ $admision->dateregistered }}</td>
            <td>{{ $admision->user_id }}</td>
            <td>{{ $admision->class_id }}</td>
            <td>

                <img src="{{asset('admissions_images/' . $admision->image)}}"
                        class="rounded-circle" with="50" height="50" style="border-radius: 50%; vertical-align: middle">
                </td>
                <td>
                    {!! Form::open(['route' => ['admisions.destroy', $admision->student_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admisions.show', [$admision->student_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admisions.edit', [$admision->student_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
