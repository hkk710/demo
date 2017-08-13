@extends('layouts.admin')

@section('content')
    {!! Form::model($incomes) !!}

        {{ Form::label('type', 'Type:') }}
        {{ Form::text('type', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('amount', 'Amount:') }}
        {{ Form::text('amount', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}

    {!! Form::close() !!}
    <div class="col-sm-6">
        <a href="{{ route('income.edit', $incomes->id) }}" class="btn btn-block btn-warning">Edit</a>
    </div>
    <div class="col-sm-6">
        <a href="{{route('income.delete', $incomes->id)}}" class="btn btn-block btn-danger">Delete</a>
    </div>
@endsection
