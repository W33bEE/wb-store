

    @extends('layouts.store-home')
    @section('content')
    <h1 class=" p-3 slide-in-left">Your Order:</h1><br>
    @if(session()->has('success_message'))
        <div class="col-12 alert alert-success">
            {{session()->get('success_message')}}
        </div>
    @endif
    @if(count($errors)>0)
        <div class="col-12 alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(Cart::count()>0)
        <h2 class="col-12">{{Cart::count()}} item(s) in shopping cart:</h2>
    @else
        <h3>no items in shopping cart...</h3>
    @endif
    <div class="col-sm-12 col-md-10 col-md-offset-1 scale-up-center">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th class="text-center">Price</th>
                <th class="text-center">Total</th>
                <th> </th>
            </tr>
            </thead>
            <tbody>
            @foreach(Cart::content() as $item)
            <tr>
                <td class="col-sm-8 col-md-6">
                    <div class="media ">
                        <a class=" thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">{{$item->title}}</a></h4>
                            <h5 class="media-heading">  <a href="#">{{$item->name}}</a></h5>
                            <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                        </div>
                    </div>
                </td>
                <td class="col-sm-1 col-md-1" style="text-align: center">
                    <input type="number" class="form-control"  value="{{$item->qty}}">
                </td>
                <td class="col-sm-1 col-md-1 text-center"><strong>€{{$item->price}}</strong></td>
                <td class="col-sm-1 col-md-1 text-center"><strong></strong></td>
                <td class="col-sm-1 col-md-1">
                    <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span> Remove
                    </button></form></td>
            </tr>
            @endforeach
            <tr>
                <td>   </td>
                <td>   </td>
                <td>   </td>
                <td><h5>Subtotal</h5></td>
                <td class="text-right"><h5><strong>€{{Cart::subtotal()}}</strong></h5></td>
            </tr>
            <tr>
                <td>   </td>
                <td>   </td>
                <td>   </td>
                <td><h5>tax</h5></td>
                <td class="text-right"><h5><strong>€{{Cart::tax()}}</strong></h5></td>
            </tr>
            <tr>
                <td>   </td>
                <td>   </td>
                <td>   </td>
                <td><h3>Total</h3></td>
                <td class="text-right"><h3><strong>€{{Cart::total()}}</strong></h3></td>
            </tr>
            <tr>
                <td>  <a href="{{route('shop.index')}}" class="btn btn-block  btn-secondary">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                    </a>  </td>
                <td>   </td>
                <td>   </td>
                <td>
                   </td>
                <td>
                            <a href="{{route('checkout.index')}}" class="btn btn-success">
                        Checkout <span class="glyphicon glyphicon-play"></span>
                    </a></td>
            </tr>

            </tbody>
        </table>

    </div>


@stop
