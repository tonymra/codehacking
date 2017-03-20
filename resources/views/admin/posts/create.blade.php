@extends('layouts.admin')



@section('content')



    <h1>Create Post</h1>



    @include('includes.form_error');

    {!! Form::open(['method'=>'POST' ,'action'=>'AdminPostsController@store', 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null,
            array('class'=>'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id',
            [''=>'Choose category...'] + $categories,
            null,
            array('class'=>'form-control' )) !!}
    </div>


    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body', null,
            array('class'=>'form-control','rows'=>5)) !!}
    </div>





    <div class="form-group">
        {!! Form::label('photo_id','Upload Photo') !!}
        {!! Form::file('photo_id',['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post',
          array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}



@stop