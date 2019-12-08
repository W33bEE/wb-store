@extends('layouts.admin')
@section('dash')
    Create User:
    @stop
@section('content')
    <div class="col-md-6 text-white mx-auto">
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name','Username:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('First_name','First_name:') !!}
        {!! Form::text('First_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Last_name','Last_name:') !!}
        {!! Form::text('Last_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('role_id','Role:') !!}
        {!! Form::select('role_id',[''=>'Choose Options']+$roles,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',array(1=>'Online',0=>'Offline'),0,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>
        <div class="form-group">
            {!! Form::label('photo_id','User Img:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-success btn-block']) !!}
    </div>
    {!! Form::close() !!}

    </div>
    @include('includes.form_error')
    @stop
