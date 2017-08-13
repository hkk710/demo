@extends('layouts.admin')

@section('content')
    {!! Form::model($vtype) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        
    {!! Form::close() !!}
    <div class="col-sm-6">
        <a href="{{ route('vtype.edit', $vtype->id) }}" class="btn btn-block btn-warning">Edit</a>
    </div>
    <div class="col-sm-6">
        <a href="{{route('vtype.delete', $vtype->id)}}" class="btn btn-block btn-danger">Delete</a>
    </div>
@endsection
