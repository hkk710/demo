@extends('main')

@section('title', 'Online Vazhipad')

@section('head')
	<style media="screen">
		form > div {
			margin-bottom: 15px;
		}
	</style>
@endsection

@section('content')

	@if (Auth::guard('web')->check() || Auth::guard('admin')->check())
		@if (count($errors) > 0)
			<div class="container" style="margin-top: 10px;">
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
		@if (Session::has('success'))
			<div class="container" style="margin-top: 10px;">
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					{{ Session::get('success') }}
				</div>
			</div>
		@endif
		<div class="col-md-12 text-center">
			<h1 style="color: #fff;">KESAVAPURAM SREEKRISHNASWAMY TEMPLE</h1>
			<br>
			<span class="h4">
				<h3 style="color:#fff;"><center>Online Vazhipad Booking</center></h3>
				<br>
				<span style="color:#fff" class="">Welcome: <b>{{ Auth::guard('web')->check() ? Auth::guard('web')->user()->name : Auth::guard('admin')->user()->name }}</b></span>
			</span><br>
			<span class="text-right">
				<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" style="color:#fff!Important;" aria-hidden="true"></i> Logout</a>
		    </span>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading" style="background: #e67300; color: #fff;">
							<b>Online Vazhipad</b>
						</div>
						<div class="panel-body">
							{!! Form::open(['id' => 'app', 'action' => 'MojoController@store']) !!}
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
												<option value="{{ $star->id }}">{{ $star->star }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<strong>Your Name:</strong>
									</div>
									<div class="col-md-8 input-group-sm">
										<input type="text" placeholder="Your name...." class="form-control" name="name" value="{{ old('name') }}">
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<strong>Vazhipad Date:</strong>
									</div>
									<div class="col-md-8 input-group-sm">
										<input type="date" name="date" class="form-control" placeholder="{{ date('d-M-Y') }}">
									</div>
								</div>
								<div class="col-md-12">
									<div class="col-md-4">
										<strong>Phone No:</strong>
									</div>
									<div class="col-md-8 input-group-sm">
										<input type="number" name="phone" class="form-control" placeholder="phone....">
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
									<div class="col-md-6">
										<span>
											<input type="submit" class="btn btn-danger btn-block" style="margin-bottom: 10px;" value="Add to Cart">
										</span>
									</div>
									<div class="col-md-6">
										<span>
											<input type="reset" class="btn btn-danger btn-block" v-on:click="clearPrice">
										</span>
									</div>
								</div>
								@if (!Auth::guard('web')->check() && Auth::guard('admin')->check())
									<div class="col-md-12" id="admin_error" style="display: none;">
										<blockquote>
											<b>Note:</b> Admin Cannot Submit the form
										</blockquote>
									</div>
								@endif
							{!! Form::close() !!}
						</div>
						@if (Auth::guard('web')->check())
							<div class="panel-footer" style="background: #e67300; color: #fff;">
								<a href="{{ url('online_vazhipad/cart') }}" class="btn btn-warning btn-block"><i class="fa fa-shopping-cart" aria-hidden="true">
									</i> View Your Cart &nbsp; <span class="badge">{{ $carts->where('user_id', '=', Auth::guard('web')->user()->id)->count() }}</span>
								</a>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	        {{ csrf_field() }}
	    </form>
	@else
		<div class="col-md-12 " style="text-align: center;">
			<div class="panel panel-primary">
				<h2>Welcome to Kesavapuram Sreekrishnaswamy Temple Online Vazhipad booking please Login to continue</h2>
				<h3><a href="{{url('/login')}}">Log in</a></h3><br>
				<h2>If your are not a member yet please register by clicking the link below</h2>
				<h3><a href="{{url('/register')}}">Register</a></h3>
				<br>
			</div>
		</div>
	@endif

@endsection

@section('js')
	@if (!Auth::guard('web')->check() && Auth::guard('admin')->check())
		<script type="text/javascript">
			$('form input[type="submit"]').click(function(e) {
				e.preventDefault();
				$('#admin_error').show();
			})
		</script>
	@endif
@endsection
