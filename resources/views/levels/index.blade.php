@extends('layouts.add_level')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Add Level</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#add-level-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"> Add New Class Schedule</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('levels.table')

                    {!! Form::open(['route' => 'levels.store']) !!}

                    @include('levels.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

