@extends('layouts.admin')

@section('content')
    {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom']) }}

        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control w3-margin-bottom']) }}

        {{ Form::label('password', 'Password:') }} <small>(If no need to change password, leave this field blank)</small>
        {{ Form::password('password', ['class' => 'form-control w3-margin-bottom']) }}

        {{ Form::label('password_confirmation', 'Confirm Password:') }}
        {{ Form::password('password_confirmation', ['class' => 'form-control w3-margin-bottom']) }}

        <div class="col-sm-6">
            <a href="{{ route('user.show', $user->id) }}" class="btn btn-block btn-info">Cancel</a>
        </div>
        <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-success']) }}
        </div>

    {!! Form::close() !!}
@endsection
