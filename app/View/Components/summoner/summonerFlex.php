<?php

namespace App\View\Components\summoner;

use Illuminate\View\Component;

class summonerFlex extends Component
{

    public $summonerData;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($summonerData)
    {
        $this->summonerData=$summonerData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.summoner.summoner-flex');
    }
}
