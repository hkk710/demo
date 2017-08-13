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
                <th>Vazhipad type id</th>
                <th>Prathishta type id</th>
                <th>Price</th>
                <th><a href="/admin/vnames/create" class="btn btn-primary">Create new Vazhipad name</a></th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($vnames as $vname)
                <tr>
                    <th>{{$vname->id}}</th>
                    <td>{{$vname->name}}</td>
                    <td>
                        <a href="{{ route('vtype.show', $vname->vtypes_id) }}">{{ $vname->vtypes_id }} ({{ $vname->vtype->name }})</a>
                    </td>
                    <td>{{ $vname->prathishtas_id }} ({{ $vname->prathishta->name }})</td>
                    <td>&#8377; {{ $vname->price }}</td>
                    <td>
                        <a href="{{route('vname.show', $vname->id)}}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{route('vname.edit', $vname->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('vname.delete', $vname->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
