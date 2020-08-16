@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Academic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($academic, ['route' => ['academics.update', $academic->academic_id], 'method' => 'patch']) !!}

                   <div class="form-group col-sm-6">
                    {!! Form::label('academic_year', 'Academic Year:') !!}
                    {!! Form::text('academic_year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <div>
                    {!! Form::submit('Update Academic', ['class' => 'btn btn-info']) !!}
                    <a href="{{ route('academics.index') }}" class="btn btn-warning">Close</a>
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
