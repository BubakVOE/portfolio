<?php

namespace App\Http\Controllers\Riot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Runes;
use Illuminate\Support\Facades\Http;

class RunesController extends Controller
{
    public function index()
    {

        $newestPatch = Http::get('https://ddragon.leagueoflegends.com/api/versions.json')->collect()[0];

        $response = Http::get('https://ddragon.leagueoflegends.com/cdn/'.$newestPatch.'/data/cs_CZ/runesReforged.json')->collect();

        $runes = $response;

        foreach($runes as $rune) {
            $exists = Runes::where('key', '=', $rune['key'])->exists();

            if ($exists) {
                $this->info('Runes' . $rune['name'] . 'existuje v databázi');
            } else {
                $newRune = Runes::create([
                    'key' => $rune['key'],
                    'icon' => $rune['icon'],
                    'name' => $rune['name'],
                ]);
            }

        }

        dd($runes);

        return view('pages.runes.index');
    }
}
