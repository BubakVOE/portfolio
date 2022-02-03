<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Connector\RiotGameConnector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    protected $riot;

    public function __construct()
    {
        $this->riot = new RiotGameConnector;
    }


    public function index()
    {
        $euneTopPlayers = Http::get('https://eun1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key=' . env('RIOT_API_KEY') . '')
            ->collect()
            ->take(4);


        $euwTopPlayers = Http::get('https://euw1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key=' . env('RIOT_API_KEY') . '')
            ->collect()
            ->take(4);


        return view('pages.home', [
            'euneTopPlayers' => $euneTopPlayers,
            'euwTopPlayers' => $euwTopPlayers,
        ]);
    }
}


       // // EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW EUW
        // // prvních 5 nejlepších z EUNE | SoloQ
        // $euwChalls = Http::get('https://euw1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key=' . env('RIOT_API_KEY') . '')
        //     ->collect()
        //     ->take(4);

        // // vytáhnout si jména hráčů
        // $euwChallNames = [];

        // // další detaily - tier,rank,LP
        // $euwChallOthers = [];

        // foreach ($euwChalls as $euwChall) {
        //     $euwChallNames[] = $euwChall['summonerName'];
        //     $euwChallOthers[] = $euwChall;
        // }
        // // vytáhnout zvlášť data o uživatelích
        // $euwChallData = [];

        // foreach ($euwChallNames as $euwChallName) {
        //     $euwChallData[] = Http::get('https://eun1.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $euwChallName . '?api_key=' . env('RIOT_API_KEY') . '')->collect();
        // }
