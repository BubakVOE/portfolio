<?php

namespace App\Http\Controllers\other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SummonerController extends Controller
{

    public function index()
    {
        return view('pages.summoner.index');
    }

    public function show($username){


        $summoner = app('league-api')->getSummonerByName($username);

            $championMastery = app('league-api')->getChampionMasteries($summoner->id);

        return view('pages.summoner.show', [
            'summoner' => $summoner,
            'championMastery' => $championMastery
        ]);
    }
}
