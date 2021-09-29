<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionsController extends Controller
{


    public function index()

    {
        return view('pages/champions/index');

    }

    public function freeRotation()

    {
        return view('pages/champions/freeRotation');

    }

    public function newbieRotation()

    {
        return view('pages/champions/newbieRotation');

    }


}
