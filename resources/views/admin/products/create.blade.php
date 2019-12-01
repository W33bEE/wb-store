@extends('layouts.admin')
@section('dash')
    Create Product:
    @stop
@section('content')
    <div class="col-md-6 text-white mx-auto">
    {!! Form::open(['method'=>'POST','action'=>'AdminProductsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('category_id','Category:') !!}
        {!! Form::select('category_id',[''=>'Choose Categories']+$categories,null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('brand_id','Brand:') !!}
        {!! Form::select('brand_id',[''=>'Choose Brand']+$brands,null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('size_id','Size:') !!}
        {!! Form::select('size_id',[''=>'Choose Size']+$sizes,null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Description:') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

    </div>
    <div class="form-group">
        {!! Form::submit('Create Product',['class'=>'btn btn-success btn-outline btn-block']) !!}
    </div>
    {!! Form::close() !!}
    </div>
    @include('includes.form_error')
    @stop
