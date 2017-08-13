@extends('layouts.admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
@endsection

@section('content')
    <table class="table w3-border" style="border-radius: 4px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th><a href="/admin/vtypes/create" class="btn btn-primary">Create new Vazhipad type</a></th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($vtypes as $vtype)
                <tr>
                    <th>{{$vtype->id}}</th>
                    <td>{{$vtype->name}}</td>
                    <td>
                        <a href="{{route('vtype.show', $vtype->id)}}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{route('vtype.edit', $vtype->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('vtype.delete', $vtype->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
