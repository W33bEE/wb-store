@extends('layouts.admin')
@section('dash')
    Products:
@stop
@section('content')

    <div class="animated fadeIn mx-auto">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">All Products:</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-dark table-hover table-responsive table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Owner</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>size</th>
                            <th>Price</th>
                            <th>Price +btw</th>

                        </tr>
                        </thead>
                        <tbody>
                        @if($products)
                            @foreach($products as $product)
                     <tr>
                         <td class="text-center">{{$product->id}}</td>
                         <td>{{$product->photo_id}}</td>
                         <td>{{$product->user->Last_name.' '.$product->user->First_name}}</td>
                         <td>{{$product->category_id}}</td>
                         <td>{{$product->brand_id}}</td>
                         <td>{{$product->title}}</td>
                         <td>{{$product->body}}</td>
                         <td>{{$product->size_id}}</td>
                         <td class="text-center">{{$product->price}}€</td>
                         <td class="text-center">{{(($product->price)/100)*21+($product->price)}}€</td>

                     </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
@stop
