@extends('layouts.admin')



@section('content')

<h1>Users</h1>

  @if(Session::has('deleted_user'))


    <p class="bg-danger">{{session('deleted_user')}}</p>

    @endif

@if(Session::has('updated_user'))


    <p class="bg-primary">{{session('updated_user')}}</p>

@endif

@if(Session::has('created_user'))


    <p class="bg-success">{{session('created_user')}}</p>

@endif

   <table class="table table-bordered">
           <thead>


           <tr>
               <th>ID</th>
               <th>Photo</th>
               <th>Name</th>
               <th>Email</th>
               <th>Role</th>
               <th>Status</th>
               <th>Created at</th>
               <th>Updated at</th>
           </tr>
           </thead>
           <tbody>

           @if($users)

           @foreach($users as $user)

           <tr>
               <td>{{$user->id}}</td>
               <td><img height ="50" src="{{$user->photo ? $user->photo->file:'No Photo'}}"></td>
               <td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>
               <td>{{$user->email}}</td>
               <td>{{$user->role->name}}</td>
               <td>{{$user->is_active == 1 ? 'Active':'Inactive'}}</td>
               <td>{{$user->created_at->diffforHumans()}}</td>
               <td>{{$user->updated_at->diffforHumans()}}</td>
           </tr>
           @endforeach

               @endif
           </tbody>
       </table>



@stop