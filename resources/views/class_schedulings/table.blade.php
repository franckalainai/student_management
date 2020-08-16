<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Class Name</th>
                <th>Level </th>
                <th>Shift </th>
                <th>Classroom</th>
                <th>Year</th>
                <th>Day </th>
                <th>Time </th>
                <th>Semester </th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classschedule as $classScheduling)
            <tr>
            <td>{{ $classScheduling->course_name }}</td>
            <td>{{ $classScheduling->class_name }}</td>
            <td>{{ $classScheduling->level }}</td>
            <td>{{ $classScheduling->shift }}</td>
            <td>{{ $classScheduling->classroom_name }}</td>
            <td>{{ $classScheduling->year }}</td>
            <td>{{ $classScheduling->name }}</td>
            <td>{{ $classScheduling->time }}</td>
            <td>{{ $classScheduling->semester_name }}</td>
            <td>{{ $classScheduling->start_date }}</td>
            <td>{{ $classScheduling->end_date }}</td>
            <td>
                @if($classScheduling->status == 1)
                    <span class="badge badge-pill badge-success">Active</span>
                @else
                    <span class="badge  badge-pill badge-danger">Inactive</span>
                @endif
            </td>

            <td>
                {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->schedule_id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{{ route('classSchedulings.show', [$classScheduling->schedule_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{{ route('classSchedulings.edit', [$classScheduling->schedule_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
