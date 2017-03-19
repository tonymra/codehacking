@extends('layouts.admin')



@section('content')



    <h1>Posts</h1>


    @if(Session::has('deleted_post'))


        <p class="bg-danger">{{session('deleted_post')}}</p>

    @endif

    @if(Session::has('updated_post'))


        <p class="bg-primary">{{session('updated_post')}}</p>

    @endif

    @if(Session::has('created_post'))


        <p class="bg-success">{{session('created_post')}}</p>

    @endif

    <table class="table table-bordered">
        <thead>


        <tr>
            <th>ID</th>
            <th>Category</th>
            <th>Owner</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->photo_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffforHumans()}}</td>
                    <td>{{$post->updated_at->diffforHumans()}}</td>
                </tr>

            @endforeach

        @endif
        </tbody>
    </table>


@stop