@extends('layouts.admin')

@section('content')

    {!! Form::model($news, ['route' => ['news.update', $news->id], 'method' => 'PUT']) !!}
        {{ Form::label('date', 'Date:') }}
        {{ Form::date('date', null, ['class' => 'form-control w3-margin-bottom']) }}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', null, ['class' => 'form-control w3-margin-bottom']) }}

        <div class="col-sm-6">
            <a href="{{ route('news.show', $news->id) }}" class="btn btn-block btn-info">Cancel</a>
        </div>
        <div class="col-sm-6">
            {{ Form::submit('Save Changes', ['class' => 'btn btn-block btn-success']) }}
        </div>

    {!! Form::close() !!}
@endsection
