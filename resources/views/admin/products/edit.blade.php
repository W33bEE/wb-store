@extends('layouts.admin')
@section('dash')
    Edit Product:
@stop
@section('content')
    <div class="col-md-4">
        <img src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}" alt="product photo">
    </div>
    <div class="col-md-6 text-white mx-auto">
        {!! Form::model($product,['method'=>'PATCH','action'=>['AdminProductsController@update', $product->id],'files'=>true]) !!}
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
            {!! Form::submit('Update Product',['class'=>'btn btn-success col-sm-6 ']) !!}
        </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE','action'=>['AdminProductsController@destroy', $product->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete Product',['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    @include('includes.form_error')
@stop
