@extends('layouts.admin')
@section('dash')
    Users:
    @stop
@section('content')
    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_user')}}</p>
        @endif
    <div class="animated fadeIn mx-auto">


            <div class="col-md-12">
                <div class="card">

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
                                <td class="text-center">{{$user->id}}</td>
                                <td class="text-center"><img class="user-avatar rounded-circle" src="{{$user->photo ? asset($user->photo->file) : 'http://placehold.it/40x40'}}" alt="User image" class="img-fluid"></td>
                                <td><a href="{{route('users.edit',$user->id)}}">{{$user->Last_name.' '.$user->First_name}} </a></td>
                                <td>{{$user->email}} </td>
                                <td>{{$user->role ? $user->role->name : 'User without role'}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->is_active == 1 ? 'online': 'Offline!'}}</td>
                            </tr>
                            @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



    </div><
@stop
