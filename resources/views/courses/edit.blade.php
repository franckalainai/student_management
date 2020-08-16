@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['courses.update', $course->course_id], 'method' => 'patch']) !!}
                   <div class="form-group col-md-6">
                    {!! Form::label('course_name', 'Course Name:') !!}
                    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <div class="form-group col-md-6">
                        {!! Form::label('course_code', 'Course Code:') !!}
                        {!! Form::text('course_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Description Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('description', 'Description:') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
                    </div>

                    <!-- Status Field -->
                    <div class="form-group col-md-6">
                        {!! Form::label('status', 'Status:') !!}
                        <label class="checkbox-inline">
                            {!! Form::hidden('status', 0) !!}
                            {!! Form::checkbox('status', '1', null) !!}
                        </label>
                    </div>

                    </div>
                    <a href="{{ route('courses.index') }}" class="btn btn-warning">Close</a>
                    {!! Form::submit('Update Course', ['class' => 'btn btn-info']) !!}

                    <div>

               </div>
               <div>
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
