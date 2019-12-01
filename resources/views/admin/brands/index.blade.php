@extends('layouts.admin')
@section('dash')
    All Brands
@stop
@section('content')
    <div class="col-md-6 text-white">
        {!! Form::open(['method'=>'POST','action'=>'AdminBrandsController@store']) !!}
        <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Add Brand',['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    <div class="col-md-6 text-white">
        @if($brands)
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td><a href="{{route('brands.edit',$brand->id)}}">{{$brand->name}}</a></td>
                        <td>{{$brand->created_at ? $brand->created_at : 'no date'}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@stop

