@extends('layouts.admin')

@section('content')
    {!! Form::open(['action' => 'AdminController@vtypeStore']) !!}
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'name...']) }}
        {{ Form::submit('Create', ['class' => 'btn btn-block btn-success w3-margin-top']) }}
    {!! Form::close() !!}
@endsection
