<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroSection extends Component
{
    public $hero;

    public function __construct($hero)
    {
        $this->hero = $hero;
    }

    public function render()
    {
        return view('components.hero-section');
    }
}
