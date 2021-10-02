<?php

namespace App\Http\Controllers\nav;

use App\Models\Champion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Blood72\Riot\Facades\DataDragonAPI;
use RiotAPI\LeagueAPI\LeagueAPI;



class ChampionsController extends Controller
{


    public function index()
    {

        $test = http::get('https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/data/cs_CZ/champion.json')->collect();
        $champions = Champion::all();
        $amount = Champion::count();


        return view('pages/champions/index',[
            'champions' => $champions,
            'amount' => $amount,
        ]);
    }


    public function show(Champion $champion)
    {
        $champData = Http::get('https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/data/cs_CZ/champion/'.$champion->nickname.'.json')->collect()['data'][$champion->nickname];

        $skinsDatas = $champData['skins'];

        $test = Http::get('ddragon.leagueoflegends.com/cdn/'.env('patch').'/img/spell/'.$champData['spells'][0]['id'].'.jpg')->collect();

        $skinsNum = [];

        foreach ($skinsDatas as $skinsData) {
            $skinsNum [] = $skinsData['num'];
        }


        return view('pages/champions/champion', [
            'champion' => $champion,
            'champData' => $champData,
            'skinsNum' => $skinsNum,
            'test' => $test
        ]);

    }



    public function freeRotation()
    {
        $freeRotation =app('league-api')->getChampionRotations();

            $freeChampionsId = $freeRotation->freeChampionIds;

                $freeChampionsData = Champion::whereIn('key', $freeChampionsId)->get();




        return view('pages/champions/freeRotation',[
            'freeChampionsData' => $freeChampionsData,
        ]);

    }



    public function newbieRotation()
    {
        $freeRotation =app('league-api')->getChampionRotations();

            $newbieChampionId = $freeRotation->freeChampionIdsForNewPlayers;

            $newbieLevel = $freeRotation->maxNewPlayerLevel;

                $newbieChampionData = Champion::whereIn('key', $newbieChampionId)->get();

        return view('pages/champions/newbieRotation',[
            'newbieChampionData' => $newbieChampionData,
            'newbieLevel' => $newbieLevel,
        ]);

    }


}
