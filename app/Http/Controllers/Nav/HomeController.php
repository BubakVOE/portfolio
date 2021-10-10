<?php

namespace App\Http\Controllers\nav;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(User $id)
    {

        $test = User::find($id);

        return view('pages.home', [
            'test' => $test
        ]);
    }
}
