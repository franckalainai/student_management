<div class="modal fade left" id="academic-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered">Academics</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <!-- Academic Year Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('academic_year', 'Academic Year:') !!}
                {!! Form::text('academic_year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

      </div>
        <div class="modal-footer">
            <a href="{{ route('academics.index') }}" class="btn btn-warning">Close</a>
            {!! Form::submit('Save Academic', ['class' => 'btn btn-success']) !!}
        </div>
      </div>
    </div>
</div>
