@extends('layouts.admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
@endsection

@section('content')
    <h1><center>Manage Expenses</center></h1><br>
    <table class="table w3-border" style="border-radius: 4px;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Discription</th>
                <th><a href="/admin/expenses/create" class="btn btn-primary">Add new expense</a></th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($expenses as $expense)
                <tr>
                    <th>{{$expense->id}}</th>
                    <td>{{$expense->head}}</td>
                    <td>{{$expense->amount}}</td>
                    <td>{{$expense->discription}}</td>
                    <td>
                        <a href="{{route('expenses.show', $expense->id)}}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{route('expenses.edit', $expense->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('expenses.delete', $expense->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
