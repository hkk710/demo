<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubpagesController extends Controller
{
    public function upadevas(){
        return view('upadevas.index');
    }

    public function activities (){
        return view('activities.index');
    }

    public function festivals(){
        return view('festivals.index');
    }

    public function facilities (){
        return view('facilities.index');
    }

    public function contactus(){
        return view('contactus.index');
    }
}
