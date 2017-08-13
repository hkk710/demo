@extends('main')

@section('title', 'Cart')

@section('content')
    @if (Session::has('success'))
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ Session::get('success') }}
            </div>
        </div>
    @endif
    <div style="overflow: auto;">
        <table class="table table-bordered table-hover" style="margin: 0;">
            <thead style="background: #aaa; color: white; text-shadow: 0px 0px 5px #555;">
                <tr>
                    <th>Name</th>
                    <th>Vazhipad Name</th>
                    <th>Vazhipad Type</th>
                    <th>Prathishta</th>
                    <th>Date</th>
                    <th>Star</th>
                    <th>Phone</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody style="background: white;">
                @if (count($carts) > 0)
                    @foreach ($carts as $cart)
                        <tr>
                            <td>{{ $cart->name }}</td>
                            <td>{{ App\Vname::find($cart->vname)->name }}</td>
                            <td>{{ App\Vtype::find($cart->vtype)->name }}</td>
                            <td>{{ App\Prathishta::find($cart->prathishta)->name }}</td>
                            <td>{{ $cart->date }}</td>
                            <td>{{ App\Star::find($cart->star)->star }}</td>
                            <td>{{ $cart->phone }}</td>
                            <td>&#8377; {{ $cart->price }}</td>
                            <td>
                                {!! Form::open(['route' => ['cart.destroy', $cart->id], 'method' => 'DELETE']) !!}
                                    <button type="submit" class="btn btn-danger btn-block btn-sm btn-delete" style="margin-bottom: 5px;"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                {!! Form::close() !!}
                                <a href="{{ route('cart.edit', $cart->id) }}" class="btn btn-warning btn-block btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
                                <a href="{{ $cart->longurl }}" class="btn btn-primary btn-block btn-sm"><i class="fa fa-credit-card" aria-hidden="true"></i> Pay</a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="text-center">
                        <td colspan="9">You have no items in your cart.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function(e) {
                var deleteCheck = confirm('Do you want to delete this item?');
                if (deleteCheck == false) {
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection
