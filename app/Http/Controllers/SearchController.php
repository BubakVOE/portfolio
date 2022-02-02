<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $username = $request->username;

        return redirect(route('summoner-show', $username));
    }
}
