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

        $puuid = $summoner->puuid;

        $matchIds = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/by-puuid/'.$puuid.'/ids?start=0&count=20&api_key='.env('RIOT_API_KEY').'')
                ->collect();


        $matchHistories = [];


        foreach ($matchIds as $matchId) {
            $matchHistories[] = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/'.$matchId.'?api_key='.env('RIOT_API_KEY').'')
                                ->collect();
        };





        return view('pages.summoner.show', [
            'summoner' => $summoner,
            'championMastery' => $championMastery,
            'matchHistories' => $matchHistories,
        ]);
    }


    public function matchHistory($username, $matchHistory)
    {
        return view('pages.summoner.matchHistory', [
            'username' => $username,
            'matchHistory' => $matchHistory,
        ]);
    }

}
