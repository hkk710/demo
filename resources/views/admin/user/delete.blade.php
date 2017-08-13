@extends('layouts.admin')

@section('content')
    <h1 class="w3-text-red text-center">Are you sure you want to delete this User?</h1>
    <hr>
    {!! Form::model($user) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}

        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}

    {!! Form::close() !!}

    <div class="col-sm-6">
        <a href="{{ route('user.show', $user->id) }}" class="btn btn-block btn-info">Cancel</a>
    </div>
    <div class="col-sm-6">
        {!! Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE']) !!}
            {{ Form::submit("Delete", ['class' => ' btn btn-block btn-danger']) }}
        {!! Form::close() !!}
    </div>
@endsection
