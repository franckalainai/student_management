@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Department
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($department, ['route' => ['departments.update', $department->department_id], 'method' => 'patch']) !!}

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

                <div class="form-group col-sm-12">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
                </div>


                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
