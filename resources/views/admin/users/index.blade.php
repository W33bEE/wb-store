@extends('layouts.admin')
@section('dash')
    Users
    @stop
@section('content')
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-dark table-hover table-responsive table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Created</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users)
                                @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->photo_id}}</td>
                                <td>{{$user->Last_name.' '.$user->First_name}} </td>
                                <td>{{$user->email}} </td>
                                <td>{{$user->role ? $user->role->name : 'User without role'}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->is_active == 1 ? 'Active': 'Not Active!'}}</td>
                            </tr>
                            @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><
@stop
