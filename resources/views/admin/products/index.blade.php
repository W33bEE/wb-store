@extends('layouts.admin')
@section('dash')
    Products:
@stop
@section('content')

    <div class="animated fadeIn mx-auto">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">All Users:</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-dark table-hover table-responsive table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Owner</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Price +btw</th>
                            <th>Review</th>
                        </tr>
                        </thead>
                        <tbody>
                     <tr>

                     </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div><
@stop
