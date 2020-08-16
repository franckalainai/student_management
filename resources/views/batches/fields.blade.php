<div class="modal fade" id="add-batch-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Batch</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <!-- Batch Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('batch', 'Year:') !!}
            {!! Form::text('year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
        </div>
      </div>
        <div class="modal-footer">
            <a href="{{ route('batches.index') }}" class="btn btn-warning">Close</a>
            {!! Form::submit('Save Course', ['class' => 'btn btn-success']) !!}
        </div>
    </div>
  </div>
</div>
