@extends('layouts.admin')
@section('dash')
    All Categories
    @stop
@section('content')
    <div class="col-md-6">
        {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Category',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-6">
        @if($categories)
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at ? $category->created_at : 'no date'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
    </div>
    @stop
