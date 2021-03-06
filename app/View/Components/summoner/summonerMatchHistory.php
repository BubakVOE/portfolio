<?php

namespace App\View\Components\summoner;

use Illuminate\View\Component;

class summonerMatchHistory extends Component
{

    public $matchId;
    public $username;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($matchId, $username)
    {
        $this->matchId = $matchId;
        $this->username = $username;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.summoner.summoner-match-history');
    }
}
