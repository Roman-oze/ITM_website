<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientFeatures extends Component
{
    public $clients;

    public function __construct( $clients)
    {
        $this-> clients =  $clients;
    }

    public function render()
    {
        return view('components.client-features');
    }
}
