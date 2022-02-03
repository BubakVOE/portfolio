<?php

namespace App\View\Components\home\leaderboards;

use Illuminate\View\Component;

class euwTopPlayers extends Component
{

    public $euwTopPlayer;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($euwTopPlayer)
    {
        $this->euwTopPlayer = $euwTopPlayer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.leaderboards.euw-top-players');
    }
}
