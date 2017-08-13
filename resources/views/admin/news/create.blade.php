@extends('layouts.admin')

@section('content')
    <h1><center>Add New News</center></h1><br>
    {!! Form::open(['action' => 'AdminController@newsStore']) !!}
        {{ Form::label('date', 'Date:') }}
        {{ Form::date('date', null, ['class' => 'form-control w3-margin-bottom']) }}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'title...']) }}
        {{ Form::submit('Create', ['class' => 'btn btn-block btn-success w3-margin-top']) }}
    {!! Form::close() !!}

@endsection
