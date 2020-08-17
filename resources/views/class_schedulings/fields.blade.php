<div class="modal fade" id="add-classschedule-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Class Schedule</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

<!-- Course Id Field -->
<div class="row">
    <div class="form-group col-sm-4">
        <select class="form-control" name="course_id" id="course_id">
            <option value="">Select Course</option>
                @foreach($course as $cour)
                    <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
                @endforeach
        </select>
    </div>

    <div class="form-group col-sm-4">
        <select class="form-control" name="class_id" id="class_id">
            <option value="">Select Class</option>
                @foreach ($class as $cla)
                    <option value="{{$cla->class_id}}">{{$cla->class_name}}</option>
                @endforeach

        </select>
    </div>

    <!-- Level Id Field -->
    <div class="form-group col-sm-4">
        <select class="form-control" name="level_id" id="level_id">
            <option value="">Select Level</option>
                <!--@foreach ($level as $l)
                    <option value="{{$l->level_id}}">{{$l->level}}</option>
                @endforeach
                -->
        </select>
    </div>

    <!-- Shift Id Field -->
    <div class="form-group col-sm-4">
        <select class="form-control" name="shift_id" id="shift_id">
            <option value="">Select Shift</option>
                @foreach($shift as $sh)
                    <option value="{{$sh->shift_id}}">{{$sh->shift}}</option>
                @endforeach
        </select>
    </div>

    <!-- Classroom Id Field -->
    <div class="form-group col-sm-4">
        <select class="form-control" name="classroom_id" id="classroom_id">
            <option value="">Select Classroom</option>
                @foreach($classroom as $room)
                    <option value="{{$room->classroom_id}}">{{$room->classroom_name}}__{{$room->classroom_code}}</option>
                @endforeach
        </select>
    </div>

    <!-- Batch Id Field -->
    <div class="form-group col-sm-4">
        <select class="form-control" name="batch_id" id="batch_id">
            <option value="">Select Batch</option>
                @foreach($batch as $b)
                    <option value="{{$b->batch_id}}">{{$b->year}}</option>
                @endforeach
        </select>
    </div>

    <!-- Day Id Field -->
    <div class="form-group col-sm-4">
        <select class="form-control" name="day_id" id="day_id">
            <option value="">Select Day</option>
                @foreach($day as $d)
                    <option value="{{$d->day_id}}">{{$d->name}}</option>
                @endforeach
        </select>
    </div>

    <!-- Time Id Field -->
    <div class="form-group col-sm-4">
        <select class="form-control" name="time_id" id="time_id">
            <option value="">Select Time</option>
                @foreach($time as $t)
                    <option value="{{$t->time_id}}">{{$t->time}}</option>
                @endforeach
        </select>
    </div>

    <!-- Semester Id Field -->
    <div class="form-group col-sm-4">
        <select class="form-control" name="semester_id" id="semester_id">
            <option value="">Select Semester</option>
                @foreach($semester as $s)
                    <option value="{{$s->semester_id}}">{{$s->semester_name}}__{{$s->semester_code}}</option>
                @endforeach
        </select>
    </div>

    <!-- Start Time Field -->
    <div class="form-group col-sm-6">
            <label>Start Date</label>
            <input type="text" class="form-control" name="start_date" id="start_date">
    </div>


    @push('scripts')
        <script type='text/javascript'>
            $('#start_date').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: false
            })
        </script>
    @endpush


    <!-- End Time Field -->
    <div class="form-group col-sm-6">
            <label>End Date</label>
            <input type="text" class="form-control" name="end_date" id=" end_date">
    </div>



 @push('scripts')
    <script type='text/javascript'>
        $('#end_date').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: false
        });

    </script>
    @endpush


    @push('scripts')
        <script type="text/javascript">
             $('#course_id').on('change', function(e){
                console.log(e);

                var course_id = e.target.value;

                $('#level_id').empty();
                $.get('dynamicLevel?course_id=' + course_id, function(data){
                    console.log(data);
                })
            })
        </script>
    @endpush

</div>
<!-- End row -->

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>

</div>
<div class="modal-footer">
    <a href="{{ route('classSchedulings.index') }}" class="btn btn-warning">Close</a>
    {!! Form::submit('Create Class Schedule', ['class' => 'btn btn-success']) !!}
</div>
</div>
</div>
</div>
