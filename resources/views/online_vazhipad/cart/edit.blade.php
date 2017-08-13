@extends('main')

@section('title', "Cart - Edit")

@section('head')
	<style media="screen">
		form > div {
			margin-bottom: 15px;
		}
	</style>
@endsection

@section('content')
    @if (count($errors) > 0)
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="background: #e67300; color: #fff;">
                <b>Online Vazhipad</b>
            </div>
            <div class="panel-body">
                {!! Form::open(['id' => 'app', 'route' => ['cart.update', $cart->id], 'method' => 'PUT']) !!}
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Vazhipad Type: </strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <select class="form-control" name="vtype" id="vtype" v-on:change="changeFunction">
                                <option value="0">Select any</option>
                                @foreach ($vtypes as $vtype)
                                    <option value="{{$vtype->id}}">{{$vtype->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Prathista: </strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <select class="form-control" name="prathishta" v-on:change="prathishta" id="pra">
                                <option value="0">Select any</option>
                                @foreach ($prathishtas as $prathishta)
                                    <option value="{{ $prathishta->id }}">{{ $prathishta->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Vazhipad Name:</strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <select class="form-control" name="vname" id="vname" v-on:change="priceFunction">
                                <option value="0" price="0">Select any Vazhipad Type</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Your Star (nakshatram):</strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <select name="star" class="form-control">
                                <option value="0">Select any</option>
                                @foreach ($stars as $star)
                                    <option value="{{ $star->id }}" {{ $cart->star == $star->id ? 'selected' : '' }}>{{ $star->star }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Your Name:</strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <input type="text" placeholder="Your name...." class="form-control" name="name" value="{{ $cart->name }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Vazhipad Date:</strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <input type="date" name="date" class="form-control" placeholder="{{ date('d-M-Y') }}" value="{{ $cart->date }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Phone No:</strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <input type="number" name="phone" class="form-control" placeholder="phone...." value="{{ $cart->phone }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <strong>Price:</strong>
                        </div>
                        <div class="col-md-8 input-group-sm">
                            <div class="input-group">
                                <span class="input-group-addon"><b>&#8377;</b></span>
                                <label class="form-control" id="price">0</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-6">
                        <div class="col-md-5">
                            <span>
                                <input type="submit" class="btn btn-danger btn-block" style="margin-bottom: 10px;" value="Save Changes">
                            </span>
                        </div>
                        <div class="col-md-3">
                            <span>
                                <input type="reset" class="btn btn-danger btn-block" v-on:click="clearPrice" style="margin-bottom: 10px;">
                            </span>
                        </div>
                        <div class="col-md-4">
                            <span>
                                <a href="{{ url('online_vazhipad/cart') }}" class="btn btn-danger btn-block">Cancel</a>
                            </span>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
