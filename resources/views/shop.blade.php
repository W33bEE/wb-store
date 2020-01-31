@extends('layouts.store-home')

@section('content')

        <div class="col-lg-12 filters ">
            <h3 class="p-3">Product Overview:</h3>
            <div class="button-group d-md-flex justify-content-md-center" data-filter-group ="categorie">
                <button class="button btn btn-outline-success"  data-filter="">All</button>
                @if($categories)
                    @foreach($categories as $category)

                        <button class="button btn btn-outline-success" data-filter=".{{$category->name}}">
                            {{$category->name}}
                        </button>
                    @endforeach
                @endif

            </div>

            <div class="button-group " data-filter-group ="brands">
                <button class="button btn btn-outline-secondary"  data-filter="">All</button>
                @if($brands)
                    @foreach($brands as $brand)

                        <button class="button btn btn-outline-secondary" data-filter=".{{$brand->name}}">
                            {{$brand->name}}
                        </button>
                    @endforeach
                @endif
                </div>


            </div>




        </div>
        <div class="col">
            <div class="row d-flex justify-content-around my-2 grid ">



                @if($products)
                    @foreach($products as $product)
                            <div class="col-md-3 col-sm-6   categorie-brands {{$product->category ? $product->category->name : 'Uncategorized'}} {{$product->brand ? $product->brand->name : 'Uncategorized'}} ">
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
                                    <form action="{{route('cart.store')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->title}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="img" value="{{asset($product->photo->file)}}">
                                        <li><button type="submit" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></button></li>
                                    </form>
                                </ul>
                            </div>
                        </div>




                    @endforeach
                @endif
            </div>
        </div>



    <!-- /.row -->

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
                                                        <form action="{{route('cart.store')}}" method="POST">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="id" value="{{$product->id}}">
                                                            <input type="hidden" name="name" value="{{$product->title}}">
                                                            <input type="hidden" name="price" value="{{$product->price}}">
                                                            <input type="hidden" name="img" value="{{asset($product->photo->file)}}">
                                                            <button class=" btn btn-outline-success" type="submit" data-tip="Add to Cart">Add to Cart</button>
                                                        </form>
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

