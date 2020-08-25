@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Departments</h1>
        <h1 class="pull-right">
           <a data-toggle="modal" data-target="#add-department-modal" class="btn btn-success pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"> Add New Department</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        @include('adminlte-templates::common.errors')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('departments.table')

                    {!! Form::open(['route' => 'departments.store']) !!}

                    @include('departments.fields')

                    {!! Form::close() !!}
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

