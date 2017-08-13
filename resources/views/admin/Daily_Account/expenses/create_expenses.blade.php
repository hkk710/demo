@extends('layouts.admin')

@section('content')
    <h1><center>Add New Expense</center></h1><br>
    {!! Form::open(['action' => 'AdminController@expensesStore']) !!}
        {{ Form::label('head', 'Head:') }}
        <select class="" name="head">
        <option value="">Select</option>
        <option value="Pooja Expenses">Pooja Expenses</option>
        <option value="Annadhanam Expenses">Annadhanam Expenses</option>
        <option value="Lights and Sounds">Lights and Sounds</option>
        <option value="Maintenance">Maintenance</option>
        <option value="Stage and Decoration">Stage and Decoration</option>
        <option value="Print and Stationery">Print and Stationery</option>
        <option value="Salary">Salary</option>
        </select><br>
        {{ Form::label('amount', 'Amount:') }}
        {{ Form::number('amount', null, ['class' => 'form-control', 'placeholder' => 'amount....']) }}
        {{ Form::label('discription', 'Discription:') }}
        {{ Form::text('discription', null, ['class' => 'form-control', 'placeholder' => 'discription...']) }}
        {{ Form::submit('Create', ['class' => 'btn btn-block btn-success w3-margin-top']) }}
    {!! Form::close() !!}

@endsection
