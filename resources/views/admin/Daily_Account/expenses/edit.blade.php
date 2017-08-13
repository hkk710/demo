@extends('layouts.admin')

@section('content')
    {!! Form::model($expenses, ['route' => ['expenses.update', $expenses->id], 'method' => 'PUT']) !!}

        {{ Form::label('head', 'Head :') }}
        {{ Form::text('head', null, ['class' => 'form-control w3-margin-bottom']) }}

        {{ Form::label('amount', 'Amount :') }}
        {{ Form::number('amount', null, ['class' => 'form-control w3-margin-bottom']) }}

        {{ Form::label('discription', 'Discription :') }}
        {{ Form::text('discription', null, ['class' => 'form-control w3-margin-bottom']) }}

        <div class="col-sm-6">
            <a href="{{ route('expenses.show', $expenses->id) }}" class="btn btn-block btn-info">Cancel</a>
        </div>
        <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-success']) }}
        </div>

    {!! Form::close() !!}
@endsection
