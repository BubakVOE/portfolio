<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Summoner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AccountController extends Controller
{

    public function index(){

        $user = Auth()->user();

        $userId = Auth()->user()->id;

        $profiles = Summoner::whereIn('summoner_id', [$userId])
        ->get();


        return view('pages.account.account-index', [
            'user' => $user,
            'profiles' => $profiles,
        ]);
    }


    public function edit($username)
    {
        $user = Auth()->user();


        $profiles = Summoner::whereIn('summoner_id', [$user->id])
            ->get();

        return view('pages.account.account-edit', [
            'user' => $user,
            'profiles' => $profiles,
        ]);
    }


    public function store(Request $request)
    {
        $summoner = Summoner::create([
            'username' => $request -> input('username'),
            'region' => $request -> input('region'),
            'summoner_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('message', 'Úspěšně jsi přidal účet');
    }


    public function update(Request $request, $id)
    {

        $test = Summoner::findOrFail($id);


        $test->update([
            'username' => $request -> input('username'),
            'region' => $request -> input('region'),
        ]);

        return redirect()->back()->with('message', 'Úspešně jsi změnil data');
    }


    public function delete($id)
    {
        $test = Summoner::find($id);

        $test->delete();

        return back()->with('message', 'Úspešně se ti povedlo smazat');
    }
}
