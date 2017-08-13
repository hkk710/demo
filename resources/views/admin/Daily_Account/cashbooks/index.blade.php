@php
    $totalincome = DB::table("incomes")->sum('amount');
    $totalexpenses = DB::table("expenses")->sum('amount');
    if ($totalincome > $totalexpenses) {
        $excess = $totalincome-$totalexpenses;
        $content = "Income over Expenses : ";
    }
    elseif ($totalexpenses > $totalincome) {
        $excess = $totalexpenses-$totalincome;
        $content = "Expenses over Income : ";
    }
    else {
        $excess = $totalincome-$totalexpenses;
        $content = "Income over Expenses : ";
    }
@endphp

@extends('layouts.admin')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/filter.css') }}">
@endsection

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-md-12" style="overflow: auto;">
                <div class="pull-left">
                    From:
                    <input type="text" name="from" placeholder="dd/mm/yyyy" v-on:keyup="checkDate()" id="fromDate">
                </div>
                <div class="pull-right">
                    To:
                    <input type="text" name="to" placeholder="dd/mm/yyyy" v-on:keyup="checkDate()" id="toDate">
                </div>
            </div>
            <div class="col-md-6">
                <h1><center>Incomes</center></h1>
                <table class="table w3-border" style="border-radius: 4px; background-color:lightgreen;color:#000;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Type</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody id="tbody1">
                        @foreach ($incomes as $income)
                            <tr>
                                <th>{{$income->id}}</th>
                                <td>{{$income->type}}</td>
                                <td>{{$income->amount}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h1><center>Expenses</center></h1>
                <table class="table w3-border" style="border-radius: 4px; background-color:#FFB2B2;color:#000;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Head</th>
                            <th>Amount</th>
                            <th>Discription</th>
                        </tr>
                    </thead>
                    <tbody id="tbody2">
                        @foreach ($expenses as $expense)

                            <tr>
                                <th>{{$expense->id}}</th>
                                <td>{{$expense->head}}</td>
                                <td>{{$expense->amount}}</td>
                                <td>{{$expense->discription}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table w3-border" style="border-radius: 4px; background-color:lightgreen;color:#000;">
                    <thead>
                        <tr>
                            <th>Total Income</th>
                            <th id="totalincome">{{ $totalincome }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table w3-border" style="border-radius: 4px; background-color:#FFB2B2;color:#000;">
                    <thead>
                        <tr>
                            <th>Total Expense</th>
                            <th id="totalexpenses">{{ $totalexpenses }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table w3-border" style="border-radius: 4px;background-color:#9e9e9e;color:#000;">
                    <thead>
                        <tr>
                            <th>Excess of <span id="final1">{{ $content }}</span></th>
                            <th id="final2">{{ $excess }}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection
