<?php

namespace App\Http\Controllers\nav;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('pages/news/index');
    }

    public function lolko(){
        return view('pages/news/lolko');
    }

    public function web(){
        return view('pages/news/web');
    }

}
