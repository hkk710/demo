 <!DOCTYPE html>
<html>
    <head>
        @section('title', config('app.name'))
        @include('partials._head')
    </head>
    <body style="background-image: url('/images/set.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center top; background-attachment: fixed;">
        <div class="container" style="margin-bottom: 20px;">
            <div class="col-md-10 col-md-offset-1">
                <div class="main-div">
                    <div class="main-div-img">
                        <img src="{{asset('images/demoback2.png')}}" width="100%" draggable="false" style="background-color:#000; border-bottom: 8px solid #fff" onload="setTopHeight()">
                    </div>
                    <div>
                        @include('partials._nav')
                    </div>
                    <marquee style="color: #990000; background-color:#fff!important; font-size:22px;">
    				    <b>ഹരേ	രാമ		ഹരേ	രാമ	....രാമ	രാമ		ഹരേ	ഹരേ...........ഹരേ		കൃഷ്ണ	ഹരേ	കൃഷ്ണ.......കൃഷ്ണ കൃഷ്ണ	ഹരേ	ഹരേ...</b>
    			    </marquee>
                                <div class="col-md-12 no-padding">
                                    <div class="col-md-3 no-padding">
                                        <div class="col-md-12">
                                            <div class="main-div-sub" style="margin-bottom: 10px;">
                                                <div class="main-div-sub-head">
                                                    <b>Dashboard</b>
                                                </div>
                                    <div class="main-div-sub-body">
                                        <ul>
                                            <li>
                                                <a href="#daily_rituals" class="btn btn-primary btn-block" style="text-decoration: none!important; background-color:#990000;" data-toggle="tab">
                                                    <i class= "fa fa-sun-o" style='color:#F14700;'></i>&nbsp; &nbsp; Daily Rituals
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#offerings" class="btn btn-primary btn-block" style="text-decoration: none!important; background-color:#990000;" data-toggle="tab">
                                                    <i class="fa fa-paper-plane" style='color:#F14700;'></i>&nbsp; &nbsp; Offerings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#pooja_details" class="btn btn-primary btn-block" style="text-decoration: none!important; background-color:#990000;" data-toggle="tab">
                                                    <i class="fa fa-fire" style="color:#F14700;"></i> &nbsp; &nbsp; Pooja Details
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#gallery" class="btn btn-primary btn-block " style="text-decoration: none!important; background-color:#990000;" data-toggle="tab">
                                                    <i class="fa fa-picture-o" style='color:#F14700;'></i>&nbsp;  &nbsp; Gallery
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{url('/online_vazhipad')}}" class="btn btn-primary btn-block" style="text-decoration: none!important; background-color:#990000;">
                                                    <i class= "fa fa-credit-card-alt" style='color:#F14700;'></i> &nbsp; Online Vazhipad
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="main-div-sub">
                                    <div class="main-div-sub-head" style="background-image: url('/images/newsfeeed.jpg'); background-size: cover; background-repeat: no-repeat; color:#990000; font-size:22px;">
                                        <b><u>News Update</u></b>
                                    </div>
                                    <div class="main-div-sub-body" style="background-image: url('/images/newsfeeed.jpg'); background-size: cover; background-repeat: no-repeat; text-align: left;">
                                        <marquee scrolldelay="20" scrollamount="1" direction="up">
                                            @foreach ($news as $new)
                                            <div class="" style="color:#900000; font-size:16px;">
                                                <tr>
                                                    <td><b>{{$new->date}}</b></td><br>
                                                    <td>{{$new->title}}</td><br>
                                                </tr>
                                            </div>
                                            @endforeach
                                        </marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="main-div-sub" style="background-image: url('/images/newsfeeed.jpg'); background-size: cover; background-repeat: no-repeat;">
                                <div class="main-div-sub-body">
                                    <div class="main-div-sub-body-main-1">
                                        <img src="{{asset('images/kannan.jpg')}}" class="img-circle" draggable="false" width="100%">
                                    </div>
                                    <div class="main-div-sub-body-main-2">
                                        <div class="text-center">
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active">
                                                    <h4 style="color:#a5011f">
                                                        <br><br><b>ശ്രീകൃഷ്ണധ്യാനം</b>
                                                    </h4>
                                                    <br>
                                                    <h6>
                                                        <br><br>
                                                        കസ്തൂരി തിലകം ലലാട ഫലകേ
                                                        <br><br>
                                                        വക്ഷസ്ഥലേ കൗസ്തുഭം
                                                        <br><br>
                                                        നാസാഗ്രേ നവ  മൗക്തികം കരതലേ
                                                        <br><br>
                                                        വേണും കരേ കങ്കണം
                                                        <br><br>
                                                        സർവ്വാംഗേ ഹരിചന്ദനം ചകലയൻ
                                                        <br><br>
                                                        കണ്ധെ ച മുക്താ വലീം
                                                        <br><br>
                                                         ഗോപസ്ത്രീ പരിവേഷ്ട്ടിതോ വിജയതേ
                                                        <br><br>
                                                        ഗോപലച്ചുധാമണി
                                                        <br><br><br>
                                                        സാരം :  നെറ്റിയിൽ കസ്തൂരിതിലകം.
                                                        <br><br>
                                                        മാറിൽ കൗസ്തുഭമണി, മൂക്കിൽ പവിഴം
                                                        <br><br>
                                                        പതിച്ച നാസാമണി, കരതളിരുകളിൽ
                                                        <br><br>
                                                        വേണു, കൈത്തണ്ടയിൽ  കങ്കണം
                                                        <br><br>
                                                        ദേഹമാസകലം ചന്ദനം, കഴുത്തിൽ
                                                        <br><br>
                                                        മുത്തുമാല, അങ്ങനെ ഗോപാലന്മാർക്കു
                                                        <br><br>
                                                        ശിരോലങ്കാരമായ കൃഷ്ണൻ
                                                        <br><br>
                                                        ഗോപാംഗനകളാൽ ചുറ്റപ്പെട്ട്  വിജയിച്ചരുളുന്നു.
                                                        <br><br>
                                                    </h6>
                                                    <br><br><br>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="daily_rituals">
                                                    <h4>
                                                        <span style="color:#a5041f">
                                                            <br><b><br>&nbsp; &nbsp; Daily Rituals</b>
                                                        </span>
                                                    </h1>
                                                    <br><br><br><br>
                                                    <h6>
                                                        <p><span style="color:#a5011f;"> MORNING</span></p>
                                                        5.00 :
                                                        PALLIYUNARTHU <br>
                                                        5.10 :
                                                        NIRMALYADARSANAM<br>
                                                        5.35 :
                                                        ABHISHEKAM<br>
                                                        5.45 :
                                                        GANAPATHY HOMAM <br>
                                                        6.00 :
                                                        DEEPARADHANA <br>
                                                        6.30 :
                                                        USHA POOJA <br>
                                                        6.40 :
                                                        DEEPARADHANA<br>
                                                        8.30 :
                                                        NIVEDHYAM<br>
                                                        9.00 :
                                                        PRASANNA POOJA<br>
                                                        10.00 :
                                                        NIVEDHYAM<br>
                                                        11.00 :
                                                        UCHA POOJA<br>
                                                        11.30 :
                                                        NADA ADAKUNNU<br>
                                                        <br><br>
                                                        <p> <span style="color:#a5011f;">EVENING</span></p>
                                                        5.00 : NADA THURAPPU <br>
                                                        6.45 :
                                                        DEEPARADHANA<br>
                                                        7.30 :
                                                        ATHAZHA POOJA <br>
                                                        8.00 :
                                                        DEEPARADHANA <br>
                                                        8.05 :
                                                        NADA ADAKUNNU<br>
                                                        <br>
                                                        <div class="alert alert-info " role="alert" style="font-size:10">
                                                            POOJA TIMINGS MAY BE ALTERED ON SPECIAL OCCASIONS<br>
                                                            Besides these "Kunjoonu" (Choroonu - first rice feeding ceremony for children) <br>Thulabharam, Vidyarambham, Archana etc.<br> can be done at this temple.<br>
                                                        </div>
                                                        <br><br><br><br><br><br><br>
                                                    </h6>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="offerings">
                                                    <h4>
                                                        <span style="color:#a5011f">
                                                            <br><b><br>Offerings</b>
                                                        </span>
                                                    </h4>
                                                    <br><br><br><br>
                                                    <h6>
                                                        <b>
                                                            May the blessings of God SREEKRISHNA SWAMI <br>be bestowed upon you,
                                                            <br> reduce agony and save lives <br>through the limitless showering of His mercy.
                                                            <br><br>
                                                            Contributions are welcome from individuals and organisations.
                                                            <br><br><br>
                                                            <div>
                                                                Cheques and drafts drawn in favour of
                                                                "Secretary,<br> KESAVAPURAM SREEKRISHNA SWAMI TEMPLE TRUST"
                                                                <br> sent to the following address.<br><br>
                                                                Secretary<br>
                                                                KESAVAPURAM SREEKRISHNA SWAMI TEMPLE TRUST<br>
                                                                MARUTHAMKUZHY<br>
                                                                THIRUVANANTHAPURAM<br>
                                                                PIN CODE -695 030<br>
                                                                PH -0471 2362600<br>
                                                                <br><br><br><br><br><br>
                                                            </div>
                                                        </b>
                                                    </h6>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="pooja_details">
                                                    <h4>
                                                        <span style="color:#a5011f;">
                                                            <br><br><b><br><br>Pooja Details</b>
                                                        </span>
                                                    </h4>
                                                    <br><br><br>
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <ul class="nav">
                                                            <li class="active"><a data-toggle="tab" style="color:#a5011f;font-size:14px" href="#pooja1">വഴിപാടിനങ്ങൾ(1)</a></li>
                                                            <li><a data-toggle="tab" style="color:#a5011f;font-size:12px" href="#pooja2">വഴിപാടിനങ്ങൾ(2)</a></li>
                                                            <li><a data-toggle="tab" style="color:#a5011f;font-size:12px" href="#pooja3">വിശേഷാൽ പൂജകൾ</a></li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="pooja1" class="tab-pane active">
                                                                <div style="margin-top: 20px; color: #4000ff; font-size: 14px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                                                                    <h7 class="text-center" style="font-size:12px;">
                                                                        <p>
                                                                            <span style="color:#a5011f ; font-size:14px;">
                                                                                <br>വഴിപാടിനങ്ങൾ(1)
                                                                            </span>
                                                                        </p>
                                                                        <br>
                                                                        ഉദയാസ്തമനപൂജ <br>
                                                                        അലങ്കാര മുഴുക്കാപ്പ് <br>
                                                                        നിറമാല <br>
                                                                        സഹസ്രാവർത്തി ശംഖാഭിഷേകം <br>
                                                                        ഭഗവതിസേവ <br>
                                                                        നാരായണീയം വായന<br>
                                                                        മുഴുക്കാപ്പ് <br>
                                                                        നാഗരൂട്ട് <br>
                                                                        പ്രഭാതപൂജ <br>
                                                                        ജന്മനക്ഷത്രപൂജ <br>
                                                                        ഉണ്ണിയപ്പം <br>
                                                                        ഗണപതിഹോമം <br>
                                                                        അരവണ <br>
                                                                        ശർക്കരപ്പായസം <br>
                                                                        പാൽപ്പായസം <br>
                                                                        നൂറുംപാലും <br>
                                                                        തേൻ അഭിഷേകം <br>
                                                                        പാലഭിഷേകം <br>
                                                                        കരിക്കഭിഷേകം(11 കരിക്ക് )<br>
                                                                        അവിൽ നിവേദ്യം
                                                                        <br><br><br>
                                                                    </h7>
                                                                </div>
                                                            </div>
                                                            <div id="pooja2" class="tab-pane fade">
                                                                <div style="margin-top: 20px; color: #4000ff; font-size: 14px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                                                                    <h4 class="text-center" style="font-size:12px;">
                                                                        <p>
                                                                            <span style="color:#a5011f ; font-size:14px;">
                                                                                <br>വഴിപാടിനങ്ങൾ(2)
                                                                            </span>
                                                                        </p>
                                                                        <br>
                                                                        മലർ നിവേദ്യം<br>
                                                                        തൃക്കൈവെണ്ണ<br>
                                                                        തട്ടനിവേദ്യം <br>
                                                                        നെയ്യ് വിളക്ക് <br>
                                                                        അഷ്‌ട്ടോത്തരാർച്ചന <br>
                                                                        ഐക്യമത്യസൂക്തർച്ചന <br>
                                                                        മറ്റ്  അർച്ചനകൾ <br>
                                                                        ആയില്യപൂജ <br>
                                                                        കുഞ്ഞുണ് <br>
                                                                        നാമകരണം <br>
                                                                        വിദ്യാരംഭം <br>
                                                                        തുലാഭാരം <br>
                                                                        മാലപൂജ <br>
                                                                        പള്ളിക്കെട്ട് <br>
                                                                        പേനപൂജ <br>
                                                                        താക്കോൽപൂജ<br>
                                                                        നടയ്ക്കുവയ്ക്കുന്നതിന്
                                                                        <br><br><br><br><br><br><br>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div id="pooja3" class="tab-pane fade">
                                                                <div style="margin-top: 20px; color: #4000ff; font-size: 14px; font-family: 'Roboto Slab', serif;" class="container-fluid">
                                                                    <h4 class="text-center" style="font-size:12px;">
                                                                        <p>
                                                                            <span style="color:#a5011f ; font-size:14px;">വിശേഷാൽ പൂജകൾ
                                                                            </span>
                                                                        </p>
                                                                        <br>
                                                                        അഷ്ടദ്രവ്യഗണപതിഹോമം <br>
                                                                        പുഷ്‌പാഭിഷേകം <br>
                                                                        മുഴുക്കാപ്പ് ,ചിറപ്പ് <br>
                                                                        ധന്വന്തരിഹോമം <br>
                                                                        കളഭാഭിഷേകം <br>
                                                                        സുകൃതഹോമം <br>
                                                                        സർപ്പബലി <br>
                                                                        കലശപൂജ <br>
                                                                        ഇളനീർ അഭിഷേകം (108)<br>
                                                                        പഞ്ചാമൃതാഭിഷേകം <br>
                                                                        ഭഗവതിസേവ <br>
                                                                        ലക്ഷ്മിനാരായണപൂജ<br>
                                                                        നെയ്യ് വിളക്ക് ,നെയ്യ് അഭിഷേകം <br>
                                                                        ഉറിപ്പൂജ <br>
                                                                        അഷ്ട്ടാഭിഷേകം <br>
                                                                        <br><br><br><br><br><br><br><br><br>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="gallery">
                                                    <h1 class="text-center">
                                                        <span style="color:#a5011f">
                                                            <b>Gallery</b>
                                                        </span>
                                                    </h1>
                                                    <br><br>
                                                    <div>
                                                        <div class="d-inline-block" style="width: 33.22%">
                                                            <a href="{{url('/gallery1')}}"><img class="main-div-sub-body-main-2-img" src="{{asset('images/gallls/gall4.jpg')}}" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="d-inline-block" style="width: 33.22%">
                                                            <a href="{{url('/gallery2')}}"><img class="main-div-sub-body-main-2-img" src="{{asset('images/gallls/gall2.png')}}" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="d-inline-block" style="width: 33.22%">
                                                            <a href="{{url('/gallery3')}}"><img class="main-div-sub-body-main-2-img" src="{{asset('images/gallls/gall3.jpg')}}" style="width: 100%;"></a>
                                                        </div>
                                                        <div class="d-inline-block" style="width: 33.22%">
                                                            <a href="{{url('/gallery4')}}"><img class="main-div-sub-body-main-2-img" src="{{asset('images/gallls/gall6.jpg')}}" style="width: 100%;"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partials._js')
        @include('partials._footer')
    </body>
</html>
