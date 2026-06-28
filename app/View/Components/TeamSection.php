<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;



class TeamSection extends Component
{
    public $boardOfDirectors;
    public $technicalTeam;
    public $teammembers;

    public function __construct($boardOfDirectors, $technicalTeam, $teammembers)
    {
        $this->boardOfDirectors = $boardOfDirectors;
        $this->technicalTeam = $technicalTeam;
        $this->teammembers = $teammembers;
    }

    public function render()
    {
        return view('components.team-section');
    }
}
