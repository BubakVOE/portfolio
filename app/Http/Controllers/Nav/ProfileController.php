<?php

namespace App\Http\Controllers\nav;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Summoner;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{

// índex
    public function index(){

        $user = Auth()->user();

        return view('pages.profile.profile-index', [
            'user' => $user,
        ]);
    }

// edit
    public function edit($id)
    {
        $user = Auth()->user();

        $userId = Auth()->user()->id;

        $profiles = Summoner::whereIn('summoner_id', [$userId])
        ->get();

        return view('pages.profile.profile-edit', [
            'user' => $user,
            'profiles' => $profiles,
        ]);
    }


// store
    public function store(Request $request)
    {
        $summoner = Summoner::create([
            'username' => $request -> input('username'),
            'region' => $request -> input('region'),
            'summoner_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Úspěšně jsi přidal účet');
    }


// update
    public function update(Request $request, $id)
    {

        $test = Summoner::findOrFail($id);


        $test->update([
            'username' => $request -> input('username'),
            'region' => $request -> input('region'),
        ]);

        return redirect()->back()->with('message', 'Úspešně jsi změnil data');
    }

// delete
    public function delete($id)
    {
        $test = Summoner::find($id);

        $test->delete();

        return back()->with('message', 'Úspešně se ti povedlo smazat');
    }




}







