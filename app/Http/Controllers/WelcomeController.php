<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\News;
class WelcomeController extends Controller{

    public function Index(Request $request) {
        $news = News::all();
        return view('welcome')->withNews($news);
    }
}
