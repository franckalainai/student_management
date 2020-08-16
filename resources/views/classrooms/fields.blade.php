<div class="modal fade" id="add-classroom-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Classroom</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- Classroom Name Field -->
            <div class="form-group col-md-12">
                {!! Form::label('classroom_name', 'Classroom Name:') !!}
                {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Classroom Code Field -->
            <div class="form-group col-md-12">
                {!! Form::label('classroom_code', 'Classroom Code:') !!}
                {!! Form::text('classroom_code', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Classroom Description Field -->
            <div class="form-group col-md-12">
                {!! Form::label('classroom_description', 'Classroom Description:') !!}
                {!! Form::textarea('classroom_description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
            </div>

            <!-- Classroom Status Field -->
            <div class="form-group col-md-6">
                {!! Form::label('classroom_status', 'Classroom Status:') !!}
                    {!! Form::hidden('classroom_status', 0) !!}
                    {!! Form::checkbox('classroom_status', '1', null) !!}
            </div>

        </div>
        <div class="modal-footer">
            <a href="{{ route('classrooms.index') }}" class="btn btn-warning">Close</a>
            {!! Form::submit('Save Classroom', ['class' => 'btn btn-success']) !!}
        </div>
      </div>
    </div>
</div>
