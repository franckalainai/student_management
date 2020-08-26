<div class="modal fade" id="add-department-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 80%" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Departments</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- Faculty Id Field -->
            <div class="row">
                <div class="form-group col-md-4">
                {!! Form::label('faculty_id', 'Faculties:') !!}
                    <select name="faculty_id" id="faculty_id" class="form-control">
                        <option value="">Select faculty</option>
                            @foreach($faculties as $faculty)
                                <option value="{{$faculty->faculty_id}}"> {{ $faculty->faculty_name }}</option>
                            @endforeach
                    </select>
                </div>

                <!-- Department Name Field -->
                <div class="form-group col-md-4">
                    {!! Form::label('department_name', 'Department Name:') !!}
                    {!! Form::text('department_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Department Code Field -->
                <div class="form-group col-md-4">
                    {!! Form::label('department_code', 'Department Code:') !!}
                    {!! Form::text('department_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <!-- Department Description Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('department_description', 'Department Description:') !!}
                    {!! Form::textarea('department_description', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Department Status Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('department_status', 'Department Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('department_status', 0) !!}
                        {!! Form::checkbox('department_status', '1', null) !!}
                    </label>
                </div>

            </div>


            </div>
            <div class="modal-footer">
                <a href="{{ route('departments.index') }}" class="btn btn-warning">Close</a>
                {!! Form::submit('Save Department', ['class' => 'btn btn-success']) !!}
            </div>
        </div>
    </div>
</div>
