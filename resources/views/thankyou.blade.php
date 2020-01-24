@extends('layouts.store-home')
@section('content')

@php dd(session())
@endphp
            @if(session()->has('success_message'))
                <div class="col-12 alert alert-success">
                    {{session()->get('success_message')}}
                </div>
            @endif
               <h1> merci twas een batje!!!!!!!!</h1>




    @stop
