<?php

namespace App\Connector;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class RiotGameConnector
{
    public function getSummoner($username, $params = [])
    {
        return Cache::remember(
            $username,
            3600,
            function () use ($username) {
                return app('league-api')->getSummonerByName($username);
            }
        );
    }

    public function getSummonerStats($summoner)
    {
        $endpoint = 'https://eun1.api.riotgames.com/lol/league/v4/entries/by-summoner/' . $summoner->id . '?api_key=' . env('RIOT_API_KEY');

        $response = Http::get($endpoint);

        return $response->collect();
    }

    public function getSummonerTopChampionsList($summoner)
    {
        return app('league-api')->getChampionMasteries($summoner->id);
    }

    public function getSummonerMatchHistoriesIds($summoner, $count = 6)
    {
        return Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/by-puuid/' . $summoner->puuid . '/ids?start=0&count=' . $count . '&api_key=' . env('RIOT_API_KEY') . '')
            ->collect();
    }

    public function getMatchHistories($ids, $summoner)
    {
        return Cache::remember(
            'match-histories-' . $summoner->id,
            3600,
            function () use ($ids) {
                $matchHistories = collect([]);

                $ids->each(function ($id) use ($matchHistories) {
                    $match = Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/' . $id . '?api_key=' . env('RIOT_API_KEY') . '')->collect()['info'];

                    $matchHistories->push($match);
                });

                return $matchHistories;
            }
        );
    }

    public function getMatchDetail($id)
    {
        return Http::get('https://europe.api.riotgames.com/lol/match/v5/matches/' . $id . '?api_key=' . env('RIOT_API_KEY') . '')->collect()['info'];
    }

    public function getChampion($name)
    {
        $response = Cache::remember(
            'champion-' . $name,
            3600,
            function () use ($name) {
                return Http::get('https://ddragon.leagueoflegends.com/cdn/' . env('patch') . '/data/cs_CZ/champion/' . $name . '.json')->collect();
            }
        );

        return $response['data'][$name];
    }
}
