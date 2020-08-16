@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Semesters
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($semesters, ['route' => ['semesters.update', $semesters->semester_id], 'method' => 'patch']) !!}

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

                <div>
                    {!! Form::submit('Update Semester', ['class' => 'btn btn-info']) !!}
                    <a href="{{ route('semesters.index') }}" class="btn btn-warning">Close</a>
                </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
