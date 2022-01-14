<?php

namespace App\Http\Controllers\Riot;

use App\Models\Champion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Blood72\Riot\Facades\DataDragonAPI;
use RiotAPI\LeagueAPI\LeagueAPI;

class ChampionsController extends Controller
{

// champions - all
    public function index()
    {
        $test = http::get('https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/data/cs_CZ/champion.json')
                ->collect();

        $champions = Champion::all();

        $amount = Champion::count();

        return view('pages.champions.index',[
            'champions' => $champions,
            'amount' => $amount,
        ]);
    }

// show specific champion
    public function show(Champion $champion, $name)
    {
        $champion = Champion::where('name', $name)->get()[0];

        $champData = Http::get('https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/data/cs_CZ/champion/'.$champion->name.'.json')
                    ->collect()['data'][$name];

            $skinsDatas = $champData['skins'];

            $skinsNum = [];

            foreach ($skinsDatas as $skinsData) {
                $skinsNum [] = $skinsData['num'];
            }

        return view('pages.champions.show', [
            'champion' => $champion,
            'champData' => $champData,
            'skinsNum' => $skinsNum,
        ]);
    }

// weekly rotations
    public function weeklyRotations()
    {
        $weeklyRotations =app('league-api')->getChampionRotations();

            $freeChampionsId = $weeklyRotations->freeChampionIds;

                $freeChampionsData = Champion::whereIn('key', $freeChampionsId)->get();

        return view('pages.champions.weeklyRotation',[
            'freeChampionsData' => $freeChampionsData,
        ]);
    }

// newbie rotations
    public function newbieRotations()
    {
        $freeRotation =app('league-api')->getChampionRotations();

            $newbieChampionId = $freeRotation->freeChampionIdsForNewPlayers;

            $newbieLevel = $freeRotation->maxNewPlayerLevel;

                $newbieChampionData = Champion::whereIn('key', $newbieChampionId)->get();

        return view('pages.champions.newbieRotation',[
            'newbieChampionData' => $newbieChampionData,
            'newbieLevel' => $newbieLevel,
        ]);
    }


}
