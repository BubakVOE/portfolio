<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
    // EUNE EUNE EUNE EUNE EUNE EUNE EUNE EUNE EUNE EUN EUNE EUNE EUNE EUN EUNE EUNE EUNE EUN EUNE EUNE EUNE EUN EUNE EUNE EUNE EUNE
        // první 4 nejlepší z EUNE | SoloQ
        $euneChalls = Http::get('https://eun1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key=RGAPI-2f022c18-2cc9-473d-94c9-4be5391fc08d')
                ->collect()
                ->take(4);

                dd($euneChalls);

        // vytáhnout si jména hráčů
        $euneChallNames = [];

        // další detaily - tier,rank,LP
        $euneChallOthers = [];

        foreach ($euneChalls as $euneChall) {
            $euneChallNames [] = $euneChall['summonerName'];
            $euneChallOthers [] = $euneChall;
        }


        // vytáhnout zvlášť data o uživatelích
        $euneChallData = [];

        foreach ($euneChallNames as $euneChallName) {
            $euneChallData[] = app('league-api')->getSummonerByName($euneChallName);
        }

        dd($euneChallData);


    // EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW
        // prvních 5 nejlepších z EUNE | SoloQ
        $euwChalls = Http::get('https://euw1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key=RGAPI-2f022c18-2cc9-473d-94c9-4be5391fc08d')
                ->collect()
                ->take(4);

        // vytáhnout si jména hráčů
        $euwChallNames = [];

        // další detaily - tier,rank,LP
        $euwChallOthers = [];

        foreach ($euwChalls as $euwChall) {
            $euwChallNames [] = $euwChall['summonerName'];
            $euwChallOthers [] = $euwChall;
        }

        // vytáhnout zvlášť data o uživatelích
        $euwChallData = [];

        foreach ($euwChallNames as $euwChallNames) {
            $euwChallData[] = app('league-api')->getSummonerByName($euwChallNames);
        }


        return view('pages.home', [
            'euneChallData'=> $euneChallData,
            'euneChallOthers' => $euneChallOthers,

            'euwChallData'=> $euwChallData,
            'euwChallOthers' => $euwChallOthers,
        ]);
    }






}
