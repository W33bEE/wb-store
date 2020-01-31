@extends('layouts.store-home')
@section('content')
<div class="col">
    <h1 class="p-3">Let Yourself loose .......</h1>
    @if($spots)
        @foreach($spots as $spot)
    <div class="card mb-3">
        <div class="col-12 mx-auto  mb-3 "><div id="carouselExampleIndicators" class="carousel slide my-4 mx-auto" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{asset('images/slider/slide-01.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('images/slider/slide-02.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{asset('images/slider/slide-07.jpg')}}" alt="Third slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="card-body h-50">
            <h5 class="card-title">{{$spot->title}}</h5>
            <p class="card-text">{{$spot->body}}</p>
                <a class="btn btn-outline-success" href="{{$spot->link}}">Go There !!!....</a>
            </div>
        </div>
    </div>
        @endforeach
    @endif
</div>
    @stop
