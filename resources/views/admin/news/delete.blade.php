@extends('layouts.admin')

@section('content')
    <h1 class="w3-text-red text-center">Are you sure you want to delete this News?</h1>
    <hr>
    {!! Form::model($news) !!}

        {{ Form::label('date', 'Date:') }}
        {{ Form::text('date', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}

    {!! Form::close() !!}

    <div class="col-sm-6">
        <a href="{{ route('news.show', $news->id) }}" class="btn btn-block btn-info">Cancel</a>
    </div>
    <div class="col-sm-6">
        {!! Form::open(['route' => ['news.destroy', $news->id], 'method' => 'DELETE']) !!}
            {{ Form::submit("Delete", ['class' => ' btn btn-block btn-danger']) }}
        {!! Form::close() !!}
    </div>
@endsection
