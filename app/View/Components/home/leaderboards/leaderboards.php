<?php

namespace App\View\Components\home\leaderboards;

use Illuminate\View\Component;

class leaderboards extends Component
{
    public $euneTopPlayers;
    public $euwTopPlayers;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($euneTopPlayers, $euwTopPlayers)
    {
        $this->euneTopPlayers=$euneTopPlayers;
        $this->euwTopPlayers=$euwTopPlayers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.leaderboards.leaderboards');
    }
}
