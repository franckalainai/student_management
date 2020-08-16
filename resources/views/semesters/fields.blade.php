<div class="modal fade left" id="semester-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered">Semesters</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">
                    <!-- Semester Name Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('semester_name', 'Semester Name:') !!}
                        {!! Form::text('semester_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Semester Code Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('semester_code', 'Semester Code:') !!}
                        {!! Form::text('semester_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Semester Duration Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('semester_duration', 'Semester Duration:') !!}
                        {!! Form::text('semester_duration', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Semester Description Field -->
                    <div class="form-group col-md-12">
                        {!! Form::label('semester_description', 'Semester Description:') !!}
                        {!! Form::textarea('semester_description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
                    </div>


                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                    {!! Form::submit('Create Semester', ['class' => 'btn btn-success']) !!}
                    </div>
        </div>
    </div>
</div>
