@extends('layouts.admin')
@section('dash')
    Edit Size:
@stop
@section('content')
    <div class="col-md-6 text-white">
        {!! Form::model($size,['method'=>'PATCH','action'=>['AdminSizesController@update',$size->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Size',['class'=>'btn btn-success col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminSizesController@destroy',$size->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Size',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
