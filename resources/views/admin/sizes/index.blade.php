@extends('layouts.admin')
@section('dash')
    All Sizes
@stop
@section('content')
    <div class="col-md-6 text-white">
        {!! Form::open(['method'=>'POST','action'=>'AdminSizesController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Size',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-6 text-white">
        @if($sizes)
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sizes as $size)
                    <tr>
                        <td>{{$size->id}}</td>
                        <td><a href="{{route('sizes.edit',$size->id)}}">{{$size->name}}</a></td>
                        <td>{{$size->created_at ? $size->created_at : 'no date'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@stop

