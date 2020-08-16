<div class="modal fade" id="add-day-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="input-group col-sm-12">
                <span class="input-group-addon">Days</span>
                {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

        </div>
        <div class="modal-footer">
            <a href="{{ route('days.index') }}" class="btn btn-warning">Close</a>
            {!! Form::submit('Save Day', ['class' => 'btn btn-success']) !!}
        </div>
      </div>
    </div>
</div>
