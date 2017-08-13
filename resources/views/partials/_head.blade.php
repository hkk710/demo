<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf_token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset('favicon.ico') }}">
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{asset('/css/font-awesome.css')}}">
<link rel="stylesheet" href={{ ('/css/font-awesome-4.7.0/css/font-awesome.min.css') }}>

<script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>
@yield('head')
