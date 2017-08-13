@extends('main')

@section('title', 'Activites')

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
@endsection

@section('content')
        <h1 class="text-center" style="color:#990000;"><strong><u>Activites</u></strong></h1>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <img class="img-circle" style="width: 10%; background-color:#DEB781; " src="{{asset('images/bhagavadgita.jpg')}}"></span>
                            <b class="h3">GEETHA CLASS</b>
                            <div class="caret" style="float: right; margin-top: 4%;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Bhagavad Geetha classes where given to students of all age groups on all sundays by VC Vijaya Kumar of VSSC and Anjal Babu in the temple premises.</i></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <img class="img-circle" style="width: 10%;" src="{{asset('images/kkp.jpg')}}"></span>
                            <b class="h3">KSHETRA KALAPEEDOM</b>
                            <span class="caret" style="float: right; margin-top: 4%;"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Class for PANCHAVADIYAM , CLASICAL MUSIC , DANCE , DRAWING & PAINTING , TABLA, SPOKEN ENGLISH , VIOLIN , WESTERN KEYBOARD , GUITAR , ASHTAPATHY etc are given to students of all age groups by our Kalasamskarika Peedom teachers in the temple premises.</i>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <img class="img-circle" style="width: 10%;" src="{{asset('images/veda.jpg')}}"></span>
                            <b class="h3">VEDA CLASS</b>
                            <div class="caret" style="float: right; margin-top: 4%;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Veda class where given to students of all age groups on all saturday by Kalasamskarika Peedom teachers in the temple premises.</i></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            <img class="img-circle" style="width: 10%;" src="{{asset('images/narayaneeyam.jpg')}}"></span>
                            <b class="h3">NARAYANYEEAM PARAYANAM</b>
                            <div class="caret" style="float: right; margin-top: 4%;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Narayanyeem Parayanam where conducted on third Thursday of every month in the temple.</i></p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <img class="img-circle" style="width: 10%;" src="{{asset('images/bhagavatham.jpg')}}"></span>
                            <b class="h3">BHAGAVATHA PARAYANAM</b>
                            <div class="caret" style="float: right; margin-top: 4%;"></div>
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                        <p><i>Bhagavatha Parayanam where conducted on all Thursday of every month in the temple.</i></p>
                    </div>
                </div>
            </div>
        </div>
@endsection
