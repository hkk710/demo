@extends('layouts.admin')

@section('content')

    {!! Form::open(['action' => 'AdminController@vnameStore']) !!}
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'name...']) }}
        {{ Form::label('vtypes_id', 'Vazhipad Type:') }}
        <select class="form-control w3-margin-bottom" name="vtypes_id">
            @foreach ($vtypes as $vtype)
                <option value="{{ $vtype->id }}">{{ $vtype->name }}</option>
            @endforeach
        </select>
        {{ Form::label('prathishtas_id', 'Prathishta Id') }}
        <select class="form-control w3-margin-bottom" name="prathishtas_id">
            @foreach ($prathishtas as $prathishta)
                <option value="{{ $prathishta->id }}">{{ $prathishta->name }}</option>
            @endforeach
        </select>
        <div class="input-group w3-margin-bottom">
            <span class="input-group-addon"><b>&#8377;</b></span>
            {{ Form::number('price', null, ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('Create', ['class' => 'btn btn-block btn-success w3-margin-top']) }}
    {!! Form::close() !!}

@endsection
