<?php

namespace App\Http\Controllers\nav;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Summoner;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index(){

        $user = Auth()->user();

        return view('pages.profile.profile-index', [
            'user' => $user,
        ]);
    }

    public function edit($id)
    {
        $user = Auth()->user();

        $userId = Auth()->user()->id;
        
        $profiles = Summoner::all();


        return view('pages.profile.profile-edit', [
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


    // public function store(Request $request)
    // {
    //     $summoner = Summoner::create([
    //         'username' => $request -> input('username'),
    //         'region' => $request -> input('region'),
    //         'summoner_id' => auth()->user()->id
    //     ]);

    //     return redirect()->back();

    // }

}







