<?php

namespace App\Http\Controllers\Nav;

use App\Models\User;
use App\Models\Summoner;
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

    public function show($id)
    {
        $user = Auth()->user();

        $userId = Auth()->user()->id;

        $profiles = Summoner::all();


        return view('pages.user.show', [
            'user' => $user,
            'profiles' => $profiles,
        ]);
    }

    public function update(Request $request)
    {
        $userId = Auth::user()->id;
        $user = User::findOrFail($userId);

        $user->update([
            $user->givenName = request('givenName'),
            $user->familyName = request('familyName'),
            $user->region = request('region'),
        ]);

        return redirect()->back()->with('message', 'Úspešně jsi změnil data');
    }


    public function store(Request $request)
    {
        $summoner = Summoner::create([
            'username' => $request -> input('username'),
            'region' => $request -> input('region'),
            'summoner_id' => auth()->user()->id
        ]);

        return redirect()->back();

    }


}
