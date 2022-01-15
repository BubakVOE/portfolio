<?php

namespace App\Http\Controllers\Riot;

use App\Models\Champion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class SkinsController extends Controller
{
    public function index()
    {
        $nicknames = Champion::all();

            $saveNicknames = [];

                foreach ($nicknames as $nickname) {
                    $saveNicknames[] = $nickname;
                }

        return view('pages.skins.index',[
            'saveNicknames'=>$saveNicknames,
        ]);
    }

    public function show($username)
    {

        $championName = $username;


        $dataSkin = Http::get('https://ddragon.leagueoflegends.com/cdn/'.env('patch').'/data/cs_CZ/champion/'.$username.'.json')
                    ->collect()['data'][$username]['skins'];

        return view('pages.skins.show',[
            'championName' => $championName,
            'dataSkin' => $dataSkin,
        ]);
    }
}
