<div class="modal fade" id="add-level-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Level</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

<!-- Level Field -->
            <div class="form-group col-sm-6">
                <select class="form-control" name="level_id" id="level_id">
                    <option value="">Select Level</option>
                        @foreach ($levels as $lev)
                            <option value="{{$lev->level_id}}">{{$lev->level}}</option>
                        @endforeach
                </select>
            </div>

            <!-- Course Id Field -->
            <div class="form-group col-sm-6">
                <select class="form-control" name="course_id" id="course_id">
                    <option value="">Select Course</option>
                        <!--@foreach($course as $cour)
                            <option value="{{$cour->course_id}}">{{$cour->course_name}}</option>
                        @endforeach
                        -->
                </select>
            </div>

            <!-- Level Description Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('level_description', 'Level Description:') !!}
                {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
            </div>

                @push('scripts')
                    <script type="text/javascript">
                        $('#level_id').on('change', function(e){
                            console.log(e);

                            var level_id = e.target.value;

                            $('#course_id').empty();
                            $.get('dynamicCourse?level_id=' + level_id, function(data){
                                console.log(data);

                                $.each(data, function(index, cour){
                                    $('#course_id').append('<option value"' +cour.course_id+ '">'+cour.course_name+'</option>')
                                });
                            })
                        });
                    </script>
                @endpush


            </div>
            <div class="modal-footer">
                <a href="{{ route('levels.index') }}" class="btn btn-warning">Close</a>
                {!! Form::submit('Create Level', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
</div>
