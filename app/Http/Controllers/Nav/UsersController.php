<?php

namespace App\Http\Controllers\Nav;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{



    public function index(){

        $user = Auth()->user();

        return view('pages.user.index', [
            'user' => $user,
        ]);
    }

    public function show($username)
    {
        $user = Auth()->user();

        return view('pages.user.show', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $userId = Auth::user()->id;
        $user = User::findOrFail($userId);

        $user->update([
            $user->givenName = request('givenName'),
            $user->familyName = request('familyName'),
            $user->username = request('username'),
            $user->region = request('region'),
        ]);

        return redirect()->back()->with('message', 'Úspešně jsi změnil data');
    }


}
