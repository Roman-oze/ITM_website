<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;



class FeatureSection extends Component
{
    public $features;

    public function __construct($features)
    {
        $this->features = $features;
    }

    public function render()
    {
        return view('components.feature-section');
    }
}
