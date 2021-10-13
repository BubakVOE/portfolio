<?php

namespace App\Http\Controllers\other;

use App\Models\User;
use App\Models\Summoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SummonerController extends Controller
{

// index
    public function index()
    {
        $userId = Auth()->user()->id;

        $summoner = Summoner::whereIn('summoner_id', [$userId])
                    ->get();

        return view('pages.summoner.index');
    }

// show
    public function show($username)
    {
        $summoner = app('league-api')->getSummonerByName($username);

        $championMastery = app('league-api')->getChampionMasteries($summoner->id);

        return view('pages.summoner.show', [
            'summoner' => $summoner,
            'championMastery' => $championMastery
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

// store
    public function delete($id)
    {
        $test = Summoner::find($id);

        $test->delete();

        return back()->with('message', 'Úspešně se ti povedlo smazat');
    }

// store
    public function update(Request $request, $id)
    {
        $update = Summoner::find($id);

        $update->update([
            'username' => $request -> input('username'),
            'region' => $request -> input('region'),
        ]);

        return redirect()->back();
    }




}
