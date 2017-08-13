@extends('layouts.admin')

@section('content')
    <style media="screen">
        [v-cloak] {
            display: none;
        }
    </style>
<div id="app">
    <div v-if="password">
        <input v-model="passwordvalue" type="password" name="password" v-on:keyup.enter="passwordCheck">
        <button type="button" v-on:click="passwordCheck" name="button" v-on:type>Go</button>
    </div>
    <div v-else v-cloak>
        {!! Form::model($vname, ['route' => ['vname.update', $vname->id], 'method' => 'PUT']) !!}

            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom']) }}

            <select class="form-control w3-margin-bottom" name="vtypes_id">
                @foreach ($vtypes as $vtype)
                    <option value="{{ $vtype->id }}" {{ $vtype->id == $vname->vtypes_id ? 'selected' : '' }}>{{ $vtype->name }}</option>
                @endforeach
            </select>

            {{ Form::label('prathishtas_id', 'Prathishta Id') }}
            <select class="form-control w3-margin-bottom" name="prathishtas_id">
                @foreach ($prathishtas as $prathishta)
                    <option value="{{ $prathishta->id }}" {{ $prathishta->id == $vname->prathishtas_id ? 'selected' : '' }}>{{ $prathishta->name }}</option>
                @endforeach
            </select>

            <div class="input-group w3-margin-bottom">
                <span class="input-group-addon"><b>&#8377;</b></span>
                {{ Form::number('price', null, ['class' => 'form-control']) }}
            </div>

            <div class="col-sm-6">
                <a href="{{ route('vname.show', $vname->id) }}" class="btn btn-block btn-info">Cancel</a>
            </div>
            <div class="col-sm-6">
                {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-success']) }}
            </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection
