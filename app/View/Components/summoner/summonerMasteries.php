<?php

namespace App\View\Components\summoner;

use Illuminate\View\Component;

class summonerMasteries extends Component
{
    public $championData;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($championData)
    {
        $this->championData=$championData;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.summoner.summoner-masteries');
    }
}
