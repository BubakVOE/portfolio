<?php

namespace App\Http\Controllers\other;

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

    public function show(Champion $champion)
    {
        $dataSkin = Http::get('https://ddragon.leagueoflegends.com/cdn/11.19.1/data/cs_CZ/champion/'.$champion->nickname.'.json')->collect()['data'][$champion->nickname]['skins'];

        // dd($skins);
        //     $saveSkins = [];

        //         foreach ($skins as $skin) {
        //             $saveSkins[] = $skin;
        //         }

        //     $saveName = [];

        //         foreach ($skins as $skin) {
        //             $saveName[] = $skin['name'];
        //         }

        return view('pages.skins.show',[
            'champion' => $champion,
            'dataSkin' => $dataSkin,
        ]);
    }
}
