<?php

namespace App\Console\Commands;

use App\Models\Champion;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchChampions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lolko:champions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all champions';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $newestPatch = Http::get('https://ddragon.leagueoflegends.com/api/versions.json')->collect()[0];

        $response = Http::get('https://ddragon.leagueoflegends.com/cdn/'.$newestPatch.'/data/cs_CZ/champion.json')->collect();

        $champions = $response['data'];

        foreach ($champions as $champion) {

            $exists = Champion::where('key', '=', $champion['key'])->exists();

            if($exists) {
                $this->info('Champion ' . $champion['name'] . ' is exists in database');

            } else {
                $newChampion = Champion::create([
                    'key' => $champion['key'],
                    'nickname' => $champion['id'],
                    'name' => $champion['name'],
                    'title' => $champion['title'],
                    'tags' => json_encode($champion['tags']),
                    'img' => $champion['image']['full'],
                    'difficulty' => $champion['info']['difficulty'],

                ]);

                $pathImage = 'https://ddragon.leagueoflegends.com/cdn/11.15.1/img/champion/' . $champion['image']['full'];

                $this->info('Champion ' . $newChampion->name . ' is created to database');
            }
        }
    }
}
