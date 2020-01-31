@extends('layouts.store-home')
@section('extra')
    <link rel="stylesheet" href="{{asset('css/thnx.css')}}">
    @stop
@section('content')



    <audio  autoplay id="audioID">
        <source src="{{asset('./SFX/ADD.mp3')}}" type="audio/mpeg">
    </audio>
    <div class="col">
               <h1 class="thnx text-flicker-in-glow"> Thanx for your purchace!!!!!!!!</h1>
    <img class="img-fluid" src="{{asset('./images/bg/thanks.gif')}}" alt="">
    </div>


    @stop
@section('extrajs')
    <script>
        $( document ).ready(function() {
            let sound = document.getElementById("audioId");
            sound.currentTime = 0;
            sound.loop = true; //if you want it to restart playing automatically when it ends
            sound.play();
        });



    </script>
    @stop
