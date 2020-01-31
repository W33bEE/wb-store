@extends('layouts.store-home')
@section('content')
    <div class="col-lg-12">
        <h1 class="text-center p-3 slide-in-left welcome m-3"> Welcome To The Fat-Flamingo</h1>
        <div class="row">
            <div class="col-12 mx-auto d-flex mb-3 "><div id="carouselExampleIndicators" class="carousel slide my-4 mx-auto" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('images/slider/slide-05.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('images/slider/slide-06.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('images/slider/slide-08.jpg')}}" alt="Third slide">
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
            </div>

        </div>
    </div>
    <div class="col-lg-6 my-3">
        <img class="d-block img-fluid" src="{{asset('images/bg/about.jpg')}}" alt="">
    </div>
    <div class="col-lg-6 my-3" >
        <h2 class="m-3" id="about">About us:</h2>
        <p class="m-2">We are a award winning local skatestore that delivers full support in helping you getting started.... <br>Come and checkout what is new at our <a class="my-2 btn btn-outline-success btn-block" href="{{url('/shop')}}">Store</a> </p>

    </div>
    <div class="col-lg-6 my-4 ">
        <h2 class="m-3" id="about">News:</h2>
        <p class="m-2">We are the first shop in the world that can deliver on the spot. And we also integrate a place were you can find local spots. We are working on keeping it up-to-date <br>Come and checkout some <a class="my-2 btn btn-outline-secondary btn-block" href="{{url('/spots')}}">Spots..</a> </p>


    </div>
    <div class="col-lg-6 my-4 " >
        <img class="d-block img-fluid" src="{{asset('images/bg/shopdeck.jpg')}}" alt="">
    </div>

@stop
