@extends('layouts.admin')

@section('content')
    {!! Form::model($vname) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('vtypes_id', 'Vazhipad Type:') }}
        <a href="{{ route('vtype.show', $vname->vtypes_id) }}">
            <input type="text" name="vtypes_id" id="vtypes_id" class="form-control w3-margin-bottom" readonly value="{{ $vname->vtypes_id }} ({{ $vname->vtype->name }})">
        </a>
        {{ Form::label('prathishtas_id', 'Prathishta Id') }}
        <input type="text" name="vtypes_id" id="vtypes_id" class="form-control w3-margin-bottom" readonly value="{{ $vname->prathishtas_id }} ({{ $vname->prathishta->name }})">
        {{ Form::label('price', 'Price:') }}
        <div class="input-group w3-margin-bottom">
            <span class="input-group-addon"><b>&#8377;</b></span>
            {{ Form::number('price', null, ['class' => 'form-control', 'readonly']) }}
        </div>

    {!! Form::close() !!}
    <div class="col-sm-6">
        <a href="{{ route('vname.edit', $vname->id) }}" class="btn btn-block btn-warning">Edit</a>
    </div>
    <div class="col-sm-6">
        <a href="{{route('vname.delete', $vname->id)}}" class="btn btn-block btn-danger">Delete</a>
    </div>
@endsection
