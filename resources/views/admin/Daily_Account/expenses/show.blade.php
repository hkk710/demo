@extends('layouts.admin')

@section('content')
    <h1><center>Manage Expense</center></h1><br>
    {!! Form::model($expenses) !!}

        {{ Form::label('head', 'Head:') }}
        {{ Form::text('head', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('amount', 'Amount:') }}
        {{ Form::text('amount', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('discription', 'Discription:') }}
        {{ Form::text('discription', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
    {!! Form::close() !!}
    <div class="col-sm-6">
        <a href="{{ route('expenses.edit', $expenses->id) }}" class="btn btn-block btn-warning">Edit</a>
    </div>
    <div class="col-sm-6">
        <a href="{{route('expenses.delete', $expenses->id)}}" class="btn btn-block btn-danger">Delete</a>
    </div>
@endsection
