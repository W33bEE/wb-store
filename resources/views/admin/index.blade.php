@extends('layouts.admin')
@section('content')
    <?php use Carbon\Carbon;?>
    <div class="col-sm-12 mb-4">
        <div class="card-group">
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-users"></i>
                    </div>

                    <div class="h4 mb-0">
                        <span class="count">87500</span>
                    </div>

                    <small class="text-muted text-uppercase font-weight-bold">Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <a href="{{route('users.create')}}"><i class="fa fa-user-plus"></i></a>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">{{$users = DB::table('users')->count()}}</span>
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">New Clients</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-2" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <a href="{{route('products.create')}}"><i class="fa fa-cart-plus"></i></a>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">0</span>
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">Products sold</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-3" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">28</span>%
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">Returning Visitors</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-4" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="h4 mb-0">{{Carbon::now()}}</div>

                    <small class="text-muted text-uppercase font-weight-bold">Avg. Time</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-5" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-md-6 no-padding ">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-comments-o"></i>
                    </div>
                    <div class="h4 mb-0">
                        <span class="count">972</span>
                    </div>
                    <small class="text-muted text-uppercase font-weight-bold">COMMENTS</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-flat-color-1" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
        </div>
    </div>


@stop
