<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChampionsController extends Controller
{


    public function index()
    {


        $test = http::get('https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/data/cs_CZ/champion.json')->collect();
        $champions = Champion::all();


        return view('pages/champions/index',[
            'champions' => $champions,
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
        return view('pages/champions/freeRotation');

    }

    public function newbieRotation()

    {
        return view('pages/champions/newbieRotation');

    }


}
