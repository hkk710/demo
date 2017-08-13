@extends('layouts.admin')

@section('content')
    <h1 class="w3-text-red text-center">Are you sure you want to delete this Vname?</h1>
    <hr>
    {!! Form::model($vname) !!}

        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('vtypes_id', 'Vazhipad Type:') }}

        <input type="text" name="vtypes_id" id="vtypes_id" class="form-control w3-margin-bottom" readonly value="{{ $vname->vtypes_id }} ({{ $vname->vtype->name }})">

        {{ Form::label('prathishtas_id', 'Prathishta Id') }}

        <input type="text" name="vtypes_id" id="vtypes_id" class="form-control w3-margin-bottom" readonly value="{{ $vname->prathishtas_id }} ({{ $vname->prathishta->name }})">
        {{ Form::label('price', 'Price:') }}
        <div class="input-group w3-margin-bottom">
            <span class="input-group-addon"><b>&#8377;</b></span>
            {{ Form::number('price', null, ['class' => 'form-control', 'readonly']) }}
        </div>

    {!! Form::close() !!}

    <div class="col-sm-6">
        <a href="{{ route('vname.show', $vname->id) }}" class="btn btn-block btn-info">Cancel</a>
    </div>
    <div class="col-sm-6">
        {!! Form::open(['route' => ['vname.destroy', $vname->id], 'method' => 'DELETE']) !!}
            {{ Form::submit("Delete", ['class' => ' btn btn-block btn-danger']) }}
        {!! Form::close() !!}
    </div>
@endsection
