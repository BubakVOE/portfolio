<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesterController extends Controller
{
    public function index()
    {
        return view('pages.test.index');
    }
}
