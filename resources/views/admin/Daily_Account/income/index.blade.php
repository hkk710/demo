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
                <th>Amount</th>
                <th><a href="/admin/incomes/create" class="btn btn-primary">Add new income</a></th>
            </tr>
        </thead>
        <tbody id="tbody">
            @foreach ($incomes as $income)
                <tr>
                    <th>{{$income->id}}</th>
                    <td>{{$income->type}}</td>
                    <td>{{$income->amount}}</td>
                    <td>
                        <a href="{{route('income.show', $income->id)}}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{route('income.edit', $income->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('income.delete', $income->id)}}" class="btn btn-sm btn-danger">Delete</a>
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
