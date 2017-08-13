@extends('layouts.admin')

@section('content')
    {!! Form::model($vtype, ['route' => ['vtype.update', $vtype->id], 'method' => 'PUT']) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom']) }}

        <div class="col-sm-6">
            <a href="{{ route('vtype.show', $vtype->id) }}" class="btn btn-block btn-info">Cancel</a>
        </div>
        <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-success']) }}
        </div>

    {!! Form::close() !!}
@endsection
