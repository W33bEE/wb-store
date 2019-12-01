@extends('layouts.admin')
@section('dash')
    Edit category
    @stop
@section('content')
    <div class="col-md-6">
        {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group"></div>
        <div class="form-group"></div>
    </div>
    @stop
