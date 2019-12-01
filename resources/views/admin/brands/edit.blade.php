@extends('layouts.admin')
@section('dash')
    Edit Brand:
@stop
@section('content')
    <div class="col-md-6 text-white">
        {!! Form::model($brand,['method'=>'PATCH','action'=>['AdminBrandsController@update',$brand->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Brand',['class'=>'btn btn-success col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminBrandsController@destroy',$brand->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Brand',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop
