@extends('main')
@section('title', 'Upadevas')
@section('head')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
@endsection
@section('content')
    <div class="text-center"><h1 style="color:#990000;">Upadevas</h1></div>
        <div class="container">
        <ul class="nav nav-tabs" style="font-size:18px;">
        <li class="active"><a data-toggle="tab" style="color:#990000;" href="#f1"><b>GANAPATHY</b></a></li>
        <li><a data-toggle="tab" style="color:#990000;" href="#f2"><b>DEVI</b></a></li>
        <li><a data-toggle="tab" style="color:#990000;" href="#f3"><b>NAGAR</b></a></li>
        <li><a data-toggle="tab" style="color:#990000;" href="#f4"><b>BRAHMA REKSHASU & REKSHASU</b></a></li>
      </ul>
    </div>
    <div class="tab-content text-left container-fluid">
        <div id="f1" class="tab-pane active">
            <div class="panel panel-default">
                <div class="panel-body" style="background-color:#000;">
                    <div class="col-sm-6">
                        <img src="{{asset('images/ganapathi3.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6">

                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                            <div class="col-sm-8 col-md-offset-2">
                         <img src="{{asset('images/homam1.gif')}}" style="width: 100%; height: 500px">

                            </div>
                             <h2 style="color:#fff;" class="text-center"><u><p>Vinayaka Chathurthi is celebrated in the Temple with special poojas and Kootu Ganapathi Homam.</p> </u></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f2" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body" style="background-color:#881902">
                    <div class="col-sm-6">
                        <img src="{{asset('images/dugadevi.gif')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6" style="color: #4700b3; background-image: url('/images/devibg.gif'); background-size: cover; background-repeat: no-repeat;">
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <h2 style="color:#fff;" class="text-center"><u><p>Navarathri mahotsavam is celebrated in the Temple with special poojas and Pusthaka pooja.</p> </u></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f3" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body" style="background-color:#804C0B" >
                    <div class="col-sm-6"  >
                        <img src="{{asset('images/nagar.jpg')}}" style="width: 100%; height: 500px">
                    </div>
                    <div class="col-sm-6" style="color: #4700b3; background-image: url('/images/nagarbg.jpg'); background-size: cover; background-repeat: no-repeat;">
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <h2 style="color:#fff;" class="text-center"><u><p>Monthly Ayilla Pooja is conducted in this Temple.<br><br></p> </u></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="f4" class="tab-pane fade">
            <div class="panel panel-default">
                <div class="panel-body" style="background-color:#000">

                    <div class="col-sm-6">
                        <h2 style="color:#990000;"><u>BRAHMA REKSHASU & REKSHASU</u></h2>
                        <div style="margin-top: 20px; color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                        <h2 style="color:#fff;" class="text-center"><u><p>Palpayasam is offered on all Full Moon days(Pournami) in this Temple.<br><br></p> </u></h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
