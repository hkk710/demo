<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        @include('partials._head')
        <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet' type='text/css'>
        <link href="https://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    </head>
    <body style="background-image: url('images/bg.jpg'); background-repeat: no-repeat; background-size: auto 100%; background-position: center;">
        @include('partials._nav')
        <div class="col-md-12">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <a href="contact_us" data-dismiss="alert" class="close">&times;</a>
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger text-left">
                    Errors:
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
            <div class="col-sm-6">
                <div id="content">
                    <div class="" style="text-align:center;">
                        <h3 style="text-align:center;"><b><strong>കേശവപുരം  ശ്രീകൃഷ്ണസ്വാമി  ക്ഷേത്രം</strong></b></h3>
                        <p><strong> കേശവപുരം  റോഡ് , മരുതംകുഴി</strong></p>
                <!--        <p><strong>തിരുവനന്തപുരം , പിൻകോഡ് :695030</strong></p>-->
                        <p><strong>ഫോൺ: 0471 2362600, 9442362600</strong></p>
                                <!-- Add Google Maps-->
                                <br>
                                <div id="googleMap" class="w3-round-large w3-greyscale slideanim" style="width:100%s;height:400px;"></div>
                    </div>
                 </div>
            </div>

            <div class="col-sm-6">
                <div id="content" style="overflow: hidden;">
                    <h1>Contact</h1>

                    {!! Form::open(['action' => 'SubpagesController@contactus', 'style' => 'overflow: hidden']) !!}
                    <p>
                        {{ Form::label('name', ' Name:', ['class'=> 'icon-user','style' => 'float: left;']) }}
                        <span class="required">&nbsp; *</span>
                        {{ Form::text('name', null, ['class' => 'form-control w3-margin-bottom ', 'placeholder' => 'Name...*']) }}
                    </p>
                    <p>
                        {{ Form::label('email', ' E-mail address:', ['class'=> 'icon-envelope','style' => 'float: left;']) }}
                        <span class="required">&nbsp; *</span>
                        {{ Form::email('email', null, ['class' => 'form-control w3-margin-bottom', 'placeholder' => 'Email...*']) }}
                    </p>
                    <p>
                        {{ Form::label('subject', 'Subject:', ['class'=> 'icon-bullhorn','style' => 'float: left;']) }}
                        {{ Form::text('subject', 'FeedBack', ['class' => 'form-control w3-margin-bottom', 'placeholder' => 'subject...*']) }}
                    </p>

                        {{ Form::label('comment', 'Message:', ['class'=> 'icon-comment','style' => 'float: left;']) }}
                        <span class="required"> &nbsp; *</span>
                        {{ Form::textarea('comment', null, ['class' => 'form-control w3-margin-bottom', 'placeholder' => 'Your valuable feedback...*']) }}

                        <p class="indication">Fields with
                            <span class="required"> * </span>are required</p>
                        {{ Form::submit('Send this mail !', ['class' => 'btn btn-success']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        @include('partials._js')
        @include('partials._footer')
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            // Google Map Location
            var myCenter = new google.maps.LatLng(8.514961, 76.977591);

            function initialize() {
                var mapProp = {
                    center: myCenter,
                    zoom: 12,
                    scrollwheel: false,
                    draggable: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                });

                marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
