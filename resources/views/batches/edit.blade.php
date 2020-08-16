@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batch
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batch, ['route' => ['batches.update', $batch->batch_id], 'method' => 'patch']) !!}

                   <div class="form-group col-sm-6">
                    {!! Form::label('batch', 'Year:') !!}
                    {!! Form::text('year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    </div>
                    <a href="{{ route('batches.index') }}" class="btn btn-warning">Close</a>
                    {!! Form::submit('Update batch', ['class' => 'btn btn-info']) !!}

                    <div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
