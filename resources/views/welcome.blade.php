@extends('layouts.store-home')
@section('content')
    <div class="col-lg-12">
        <h1 class="text-center p-3 slide-in-left"> Welcome To The Fat-Flamingo</h1>
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
            </div>

        </div>
        <h3 class="p-3">Product Overview:</h3>
        <div class="button-group filters-button-group mx-auto d-flex justify-content-center my-3 ">
            <button class="btn btn-outline-success is-checked" data-filter="*">
                All Categories
            </button>
            @if($categories)
                @foreach($categories as $category)
                    <button class="btn btn-outline-success" data-filter=".{{$category->name}}">
                        {{$category->name}}
                    </button>
                @endforeach
            @endif

        </div>

        <div class="row d-flex justify-content-around my-2 grid">



            @if($products)
                @foreach($products as $product)
                    <div class="col-md-3 col-sm-6  element-item {{$product->category ? $product->category->name : 'Uncategorized'}}">
                        <div class="product-grid6">
                            <div class="product-image6">
                                <a data-toggle="modal" data-target="#exampleModalCenter{{$product->id}}" href="">
                                    <img class="pic-1 img-fluid" src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}">
                                </a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">{{$product->brand->name}} <br>{{$product->title}}</a></h3>
                                <div class="price">€{{$product->price}}
                                    <span>€{{($product->price)+2,5}}</span>
                                </div>
                            </div>
                            <ul class="social">
                                <li><a class="" href="" data-tip="Quick View" data-toggle="modal" data-target="#exampleModalCenter{{$product->id}}"><i class="fa fa-search" ></i></a></li>
                                <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                <li><a href="{{url('/order')}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                    </div>




                @endforeach
            @endif
        </div>


        <!-- /.row -->

    </div>
    @stop
@section('modal')
    @if($products)
        @foreach($products as $product)
            <div class="modal fade scale-up-center" id="exampleModalCenter{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">{{$product->brand->name}} <br>{{$product->title}}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="content-wrapper">
                                    <div class="item-container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="product col-5 service-image-left">


                                                    <img class="img-fluid" id="item-display" src="{{$product->photo ? asset($product->photo->file) : 'http://placehold.it/400x400'}}" alt=""></img>

                                                </div>




                                                <div class="col-7">
                                                    <div class="product-title">{{$product->brand->name}} <br>{{$product->title}}</div>
                                                    <div class="product-desc">{{$product->body}}</div>
                                                    <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                                                    <hr>
                                                    <div class="product-price">€{{(($product->price)/100)*21+($product->price)}}</div>
                                                    <div class="product-stock">{{$product->stock_id}}:In Stock</div>
                                                    <hr>
                                                    <div class="btn-group cart">
                                                        <a href="" class="btn btn-outline-success">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                    <div class="btn-group wishlist">
                                                        <button type="button" class="btn btn-danger">
                                                            Add to wishlist
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @endif

@stop
