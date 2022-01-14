<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Summoner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\Base\Definitions\Region;

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

            // soloq/duoq | flexky
                $summonerData = Http::get('https://eun1.api.riotgames.com/lol/league/v4/entries/by-summoner/'.$summoner->id.'?api_key='.env('RIOT_API_KEY').'')
                                    ->collect();


            //EUN1_2946376800, EUN1_2946376000, ....
            // aktuálně je historie 5 zápasů, pro zvětšení změnít => count na větší
                $matchIds = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/by-puuid/'.$summoner->puuid.'/ids?start=0&count=6&api_key='.env('RIOT_API_KEY').'')
                                ->collect();

            // protočím všech 5 match historii
                $matchHistories = [];

                    foreach ($matchIds as $matchId) {
                        $matchHistories [] = $matchId = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/'.$matchId.'?api_key=RGAPI-2f022c18-2cc9-473d-94c9-4be5391fc08d')
                                        ->collect()['info'];
                    }


            return view('pages.summoner.show', [
                'username' => $username,

                'summoner' => $summoner,
                'championMastery' => $championMastery,
                'matchHistories' => $matchHistories,
                'summonerData' => $summonerData,
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
