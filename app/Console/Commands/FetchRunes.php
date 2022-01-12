<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchRunes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lolko:runes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Vypsat do databaze vsechny runy';

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

        $response = Http::get('https://ddragon.leagueoflegends.com/cdn/'.$newestPatch.'/data/cs_CZ/runesReforged.json')->collect();



    }
}
