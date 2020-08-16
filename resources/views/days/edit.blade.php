@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                   <div class="form-group col-md-6">
                    <span class="input-group-addon">Days</span>
                    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    </div>
                    <a href="{{ route('days.index') }}" class="btn btn-warning">Close</a>
                    {!! Form::submit('Update Course', ['class' => 'btn btn-info']) !!}

                    <div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
