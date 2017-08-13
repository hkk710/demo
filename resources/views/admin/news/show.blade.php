@extends('layouts.admin')

@section('content')
    <h1><center>Manage News</center></h1><br>
    {!! Form::model($news) !!}
        {{ Form::label('date', 'Date:') }}
        {{ Form::text('date', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class' => 'form-control w3-margin-bottom', 'readonly']) }}
    {!! Form::close() !!}
    <div class="col-sm-6">
        <a href="{{ route('news.edit', $news->id) }}" class="btn btn-block btn-warning">Edit</a>
    </div>
    <div class="col-sm-6">
        <a href="{{route('news.delete', $news->id)}}" class="btn btn-block btn-danger">Delete</a>
    </div>
@endsection
