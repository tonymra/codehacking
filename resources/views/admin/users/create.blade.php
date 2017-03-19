@extends('layouts.admin')



@section('content')

    <h1>Create Users</h1>

    @include('includes.form_error');

     {!! Form::open(['method'=>'POST' ,'action'=>'AdminUsersController@store', 'files'=>true]) !!}

     <div class="form-group">
         {!! Form::label('name','Name') !!}
         {!! Form::text('name', null,
             array('class'=>'form-control',
                   'placeholder'=>'Enter the name')) !!}
     </div>


    <div class="form-group">
        {!! Form::label('password','Password') !!}
        {!! Form::password('password', null,
            array('class'=>'form-control',
                  'placeholder'=>'Enter the password')) !!}
    </div>


     <div class="form-group">
         {!! Form::label('email','Email') !!}
         {!! Form::email('email', null,
             array('class'=>'form-control',
                   'placeholder'=>'Type the email address')) !!}
     </div>

    <div class="form-group">
        {!! Form::label('role_id','Role') !!}
        {!! Form::select('role_id',
            [''=>'Choose options'] + $roles,
            null,
            array('class'=>'form-control' )) !!}
    </div>


    <div class="form-group">
        {!! Form::label('is_active','Status') !!}
        {!! Form::select('is_active',
            array(''=>'Please select',1=>'Active',0=>'Not Active'),
            null,
            array('class'=>'form-control' )) !!}
    </div>

     <div class="form-group">
         {!! Form::label('photo_id','Upload File') !!}
         {!! Form::file('photo_id',['class'=>'form-control'])!!}
     </div>

     <div class="form-group">
         {!! Form::submit('Create User',
           array('class'=>'btn btn-primary')) !!}
     </div>
   {!! Form::close() !!}


@stop