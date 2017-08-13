@extends('layouts.admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
@endsection

@section('content')
    <table class="table w3-border" style="border-radius: 4px;" id="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>
                    <a href="{{ url('/admin/users/create') }}" class="btn btn-primary">Create new User</a>
                </th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('user.delete', $user->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <th>{{ $admin->id }}</th>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('js/filter.js') }}"></script>
    <script type="text/javascript">
        $('#table').DataTable();
    </script>
@endsection
