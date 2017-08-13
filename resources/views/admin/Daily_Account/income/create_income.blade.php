@extends('layouts.admin')

@section('content')
    <h1><center>Add New Income</center></h1><br>
    {!! Form::open(['action' => 'AdminController@incomesStore']) !!}
        {{ Form::label('type', 'Type:') }}
        <select class="" name="type">
            <option value="Pooja Income">Pooja Income</option>
            <option value="Donation">Donation</option>
            <option value="Pooja Items">Pooja Items</option>
            <option value="Rent">Rent</option>
        </select><br>
        <input type="text" name="date" value="{{ Carbon\Carbon::now()->day . "/" . Carbon\Carbon::now()->month . "/" . Carbon\Carbon::now()->year }}" placeholder="dd/mm/yyyy" class="form-control">
        {{ Form::label('amount', 'Amount:') }}
        {{ Form::number('amount', null, ['class' => 'form-control', 'placeholder' => 'amount....']) }}
        {{ Form::submit('Create', ['class' => 'btn btn-block btn-success w3-margin-top']) }}
    {!! Form::close() !!}

@endsection
