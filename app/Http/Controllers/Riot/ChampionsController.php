<?php

namespace App\Http\Controllers\Riot;

use App\Models\Champion;
use Illuminate\Http\Request;
use RiotAPI\LeagueAPI\LeagueAPI;
use App\Connector\RiotGameConnector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Blood72\Riot\Facades\DataDragonAPI;

class ChampionsController extends Controller
{

    protected $riot;

    public function __construct()
    {
        $this->riot = new RiotGameConnector;
    }


    public function index()
    {
        $champions = Champion::with('media')->get();

        return view('pages.champions.index', [
            'champions' => $champions,
            'amount' => $champions->count(),
        ]);
    }

    // show specific champion
    public function show(Champion $champion)
    {

        $championRiot = $this->riot->getChampion($champion->name);

        $skinsDatas = $championRiot['skins'];

        $skinsNum = [];

        foreach ($skinsDatas as $skinsData) {
            $skinsNum[] = $skinsData['num'];
        }

        return view('pages.champions.show', [
            'champion' => $champion,
            'champData' => $championRiot,
            'skinsNum' => $skinsNum,
        ]);
    }

    // weekly rotations
    public function weeklyRotations()
    {
        $weeklyRotations = app('league-api')->getChampionRotations();

        $freeChampionsId = $weeklyRotations->freeChampionIds;

        $freeChampionsData = Champion::whereIn('key', $freeChampionsId)->get();

        return view('pages.champions.weeklyRotation', [
            'freeChampionsData' => $freeChampionsData,
        ]);
    }

    // newbie rotations
    public function newbieRotations()
    {
        $freeRotation = app('league-api')->getChampionRotations();

        $newbieChampionId = $freeRotation->freeChampionIdsForNewPlayers;

        $newbieLevel = $freeRotation->maxNewPlayerLevel;

        $newbieChampionData = Champion::whereIn('key', $newbieChampionId)->get();

        return view('pages.champions.newbieRotation', [
            'newbieChampionData' => $newbieChampionData,
            'newbieLevel' => $newbieLevel,
        ]);
    }
}
