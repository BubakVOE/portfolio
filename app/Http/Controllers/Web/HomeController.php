<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(User $id)
    {

    // prvních 5 nejlepších z EUNE | SoloQ
        $chall_summoners = Http::get('https://eun1.api.riotgames.com/lol/league-exp/v4/entries/RANKED_SOLO_5x5/CHALLENGER/I?page=1&api_key=RGAPI-2f022c18-2cc9-473d-94c9-4be5391fc08d')
                ->collect()
                ->take(5);

    // vytáhnout si jména hráčů
        $chall_summoners_name = [];
        $chall_summoners_other = [];

        foreach ($chall_summoners as $chall_summoner) {
            $chall_summoners_name [] = $chall_summoner['summonerName'];
            $chall_summoners_other [] = $chall_summoner;
        }



    // vytáhnout zvlášť data o uživatelích
        $summoners_data = [];

        foreach ($chall_summoners_name as $chall_summoner_name) {
            $summoners_data[] = app('league-api')->getSummonerByName($chall_summoner_name);
        }



        return view('pages.home', [
            'summoners_data'=> $summoners_data,
            'chall_summoners_other' => $chall_summoners_other,
        ]);
    }
}
