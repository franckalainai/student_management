@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classroom
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classroom, ['route' => ['classrooms.update', $classroom->classroom_id], 'method' => 'patch']) !!}

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
                <a href="{{ route('classrooms.index') }}" class="btn btn-warning">Close</a>
                {!! Form::submit('Update Classroom', ['class' => 'btn btn-info']) !!}

                <div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
