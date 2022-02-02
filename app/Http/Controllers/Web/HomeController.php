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
        $euneChalls = Http::get('https://eun1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key='.env('RIOT_API_KEY').'')
                ->collect()
                ->take(4);


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

        foreach($euneChallNames as $euneChallName)
        {
            // $euneChallData[] = app('league-api')->getSummonerByName($euneChallName);
            $euneChallData[] = Http::get('https://eun1.api.riotgames.com/lol/summoner/v4/summoners/by-name/'.$euneChallName.'?api_key='.env('RIOT_API_KEY').'')
            ->collect();
        }



    // EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW
        // prvních 5 nejlepších z EUNE | SoloQ
        $euwChalls = Http::get('https://euw1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key='.env('RIOT_API_KEY').'')
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

        foreach($euwChallNames as $euwChallName)
        {
            $euwChallData[] = Http::get('https://eun1.api.riotgames.com/lol/summoner/v4/summoners/by-name/'.$euwChallName.'?api_key='.env('RIOT_API_KEY').'')->collect();
        }




        return view('pages.home', [
            'euneChallData'=> $euneChallData,
            'euneChallOthers' => $euneChallOthers,

            'euwChallData'=> $euwChallData,
            'euwChallOthers' => $euwChallOthers,
        ]);
    }






}
