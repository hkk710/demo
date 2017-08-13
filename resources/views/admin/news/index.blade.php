@extends('layouts.admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
@endsection

@section('content')
    <table class="table w3-border" style="border-radius: 4px; background-color:#ffb266;color:#000;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Title</th>
                <th><a href="/admin/news/create" class="btn btn-primary">Add new news</a></th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($news as $news)
                <tr>
                    <th>{{$news->id}}</th>
                    <td>{{$news->date}}</td>
                    <td>{{$news->title}}</td>
                    <td>
                        <a href="{{route('news.show', $news->id)}}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{route('news.edit', $news->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('news.delete', $news->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/filter.js') }}"></script>
    <script type="text/javascript">
        $('table').DataTable();
    </script>
@endsection
