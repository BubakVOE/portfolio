<?php

namespace App\Http\Controllers\User;

use App\Connector\RiotGameConnector;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class SummonerController extends Controller
{


    protected $riot;

    public function __construct()
    {
        $this->riot = new RiotGameConnector;
    }

    public function index()
    {
        return view('pages.summoner.index');
    }


    public function show($username)
    {
        $summoner = $this->riot->getSummoner($username);
        $summonerStats = $this->riot->getSummonerStats($summoner);
        $championMastery = $this->riot->getSummonerTopChampionsList($summoner);
        $matchIds = $this->riot->getSummonerMatchHistoriesIds($summoner, 16);
        $matchHistories = $this->riot->getMatchHistories($matchIds, $summoner);

        return view('pages.summoner.show', [
            'username' => $username,
            'summoner' => $summoner,
            'championMastery' => $championMastery,
            'matchHistories' => $matchHistories,
            'summonerData' => $summonerStats,
        ]);
    }


        public function matchHistory($username, $matchHistory)
        {

            $matchHistory = $this->riot->getMatchDetail($matchHistory);

            return view('pages.summoner.matchHistory', [
                'username' => $username,
                'matchHistory' => $matchHistory,
            ]);
        }

    }
