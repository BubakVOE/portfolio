<?php

namespace App\Http\Controllers\other;

use App\Models\User;
use App\Models\Summoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class SummonerController extends Controller
{

// index
    public function index()
    {
        // $userId = Auth()->user()->id;

        // $summoner = Summoner::whereIn('summoner_id', [$userId])
        //             ->get();

        return view('pages.summoner.index');
    }

// show
    public function show($username)
    {
        $summoner = app('league-api')->getSummonerByName($username);
            $championMastery = app('league-api')->getChampionMasteries($summoner->id);


        $test = Http::get('https://eun1.api.riotgames.com/lol/spectator/v4/active-games/by-summoner/KqkRkbhbaFRwA07rpzEFA1PpKsao8G5Fq0-CkBGquz3irwk?api_key='.env('RIOT_APP').'')->collect();
        dd($test);

        return view('pages.summoner.show', [
            'summoner' => $summoner,
            'championMastery' => $championMastery
        ]);
    }

}
