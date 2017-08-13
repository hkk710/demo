<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.css') }}">
    <script>
        window.Laravel =  <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @yield('head')
  </head>
  <body style="background-image: url(/images/admin.jpg);">
    <nav class="navbar navbar-inverse w3-margin-0">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <button class="w3-opennav w3-xlarge w3-hide-large navbar-toggle" onclick="w3_open()">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">TEMPLE ONLINE SEVA APPLICATION</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <nav class="w3-sidenav w3-collapse w3-white w3-card-2 w3-animate-left" id="mySidenav" style="background-image: url(/images/admin.jpg);">
      <a href="javascript:void(0)" onclick="w3_close()"
      class="w3-closenav w3-large w3-hide-large" id="close-btn">Close &times;</a>
      <a style="background-color:orange;" href="{{url('admin/users')}}" class="{{Request::is('admin/users') ? 'w3-grey' : ''}} w3-border w3-margin-top"><i class="fa fa-users" aria-hidden="true" ></i> Users</a>
      <a style="background-color:orange;" href="{{url('admin/vtypes')}}" class="{{Request::is('admin/vtypes') ? 'w3-grey' : ''}} w3-border w3-margin-top"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Vazhipad Types</a>
      <a style="background-color:orange;" href="{{url('admin/vnames')}}" class="{{Request::is('admin/vnames') ? 'w3-grey' : ''}} w3-border w3-margin-top"><i class="fa fa-gamepad" aria-hidden="true"></i> Vazhipad Names</a>
       <a style="background-color:orange;" href="{{url('admin/incomes')}}" class="{{Request::is('admin/incomes') ? 'w3-grey' : ''}} w3-border w3-margin-top"><i class="fa fa-money" aria-hidden="true"></i> Manage Income</a>
       <a style="background-color:orange;" href="{{url('admin/expenses')}}" class="{{Request::is('admin/expenses') ? 'w3-grey' : ''}} w3-border w3-margin-top"><i class="fa fa-pencil" aria-hidden="true"></i> Manage Expenses</a>
       <a style="background-color:orange;" href="{{url('admin/cashbooks')}}" class="{{Request::is('admin/cashbooks') ? 'w3-grey' : ''}} w3-border w3-margin-top"><i class="fa fa-book" aria-hidden="true"></i> Cash Book</a>
       <a style="background-color:orange;" href="{{url('admin/news')}}" class="{{Request::is('admin/news') ? 'w3-grey' : ''}} w3-border w3-margin-top"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Manage News</a>

    </nav>
    <div class="" id="main-div">
      <div class="container-fluid w3-margin w3-padding">
          @if (Session::has('success'))

          	<div class="alert alert-success" role="alert">
          		<strong>Success: </strong>{{ Session::get('success') }}
          	</div>

          @endif

          @if (count($errors) > 0)

          	<div class="alert alert-danger" role="alert">
          		<strong>Error: </strong>
          		<ul>
          			@foreach ($errors->all() as $error)
          				<li>{{$error}}</li>
          			@endforeach
          		</ul>
          	</div>

          @endif
        @yield('content')
      </div>
    </div>
    <script type="text/javascript">
        function w3_open() {
          document.getElementById("mySidenav").style.display = "block";
        }
        function w3_close() {
          document.getElementById("mySidenav").style.display = "none";
        }
    </script>
    @include('partials._js')
    @yield('js')
  </body>
</html>
