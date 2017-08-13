<!DOCTYPE html>
<html lang="en">
<head>
    @section('title', config('app.name'))
    @include('partials._head')
    </script>
</head>
<body style="background-image:url('/images/login4.jpg'); background-size: 100% 100%; background-repeat: no-repeat; background-attachment: fixed;">
    <nav class="navbar navbar-default navbar-static-top"  style="background-color:#CA8F44;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" style="color:#fff" href="{{ url('/') }}">
                <b>{{ config('app.name') }}</b>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" >
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a style="color:#fff" href="{{ url('/login') }}">Login</a></li>
                        <li><a style="color:#fff" href="{{ url('/register') }}">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    @include('partials._js')
    @include('partials._footer')
</body>
</html>
