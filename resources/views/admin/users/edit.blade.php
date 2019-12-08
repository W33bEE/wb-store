@extends('layouts.admin')
@section('dash')
    Edit User:
@stop
@section('content')
    <div class="col-md-3 text-white mx-auto">
        <img src="{{$user->photo ? asset($user->photo->file) : 'http://place-hold.it/400x400'}}" alt="User image" class="img-fluid">
    </div>
    <div class="col-md-8 text-white mx-auto">
        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}
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
            {!! Form::select('is_active',array(1=>'Online',0=>'Offline'),null,['class'=>'form-control']) !!}
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
            {!! Form::submit('Update User', ['class'=>'btn btn-success col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete user', ['class'=>'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
        @include('includes.form_error')
    </div>
@stop
