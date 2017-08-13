@extends('layouts.admin')

@section('content')

    {!! Form::model($incomes, ['route' => ['income.update', $incomes->id], 'method' => 'PUT']) !!}
        {{ Form::label('type', 'Previous Type:') }}
        {{ Form::text('type', null, ['class' => 'form-control w3-margin-bottom','readonly']) }}
        {{ Form::label('type', 'Select new Type:') }}
        <select class="" name="type">
            <option value="">Select</option>
            <option value="Pooja Income">Pooja Income</option>
            <option value="Donation">Donation</option>
            <option value="Pooja Items">Pooja Items</option>
            <option value="Rent">Rent</option>
        </select><br>
        {{ Form::label('amount', 'Amount:') }}
        {{ Form::text('amount', null, ['class' => 'form-control w3-margin-bottom']) }}

        <div class="col-sm-6">
            <a href="{{ route('income.show', $incomes->id) }}" class="btn btn-block btn-info">Cancel</a>
        </div>
        <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-success']) }}
        </div>

    {!! Form::close() !!}
@endsection
