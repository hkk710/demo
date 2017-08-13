@extends('layouts.admin')

@section('content')
    <h1 class="w3-text-red text-center">Are you sure you want to delete this Income?</h1>
    <hr>
    {!! Form::model($incomes) !!}

        {{ Form::label('type', 'Type:') }}
        {{ Form::text('type', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('amount', 'Amount:') }}
        {{ Form::text('amount', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}

    {!! Form::close() !!}

    <div class="col-sm-6">
        <a href="{{ route('income.show', $incomes->id) }}" class="btn btn-block btn-info">Cancel</a>
    </div>
    <div class="col-sm-6">
        {!! Form::open(['route' => ['income.destroy', $incomes->id], 'method' => 'DELETE']) !!}
            {{ Form::submit("Delete", ['class' => ' btn btn-block btn-danger']) }}
        {!! Form::close() !!}
    </div>
@endsection
