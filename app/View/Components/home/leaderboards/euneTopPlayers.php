<?php

namespace App\View\Components\home\leaderboards;

use Illuminate\View\Component;

class euneTopPlayers extends Component
{

    public $euneTopPlayer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($euneTopPlayer)
    {
        $this->euneTopPlayer=$euneTopPlayer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.leaderboards.eune-top-players');
    }
}
