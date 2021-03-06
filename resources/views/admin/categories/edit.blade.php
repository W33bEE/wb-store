@extends('layouts.admin')
@section('dash')
    Edit Category:
    @stop
@section('content')
    <div class="col-md-6 text-white">
        {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update Category',['class'=>'btn btn-success col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Category',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    @stop
