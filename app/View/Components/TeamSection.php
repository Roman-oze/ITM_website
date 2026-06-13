<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;



class TeamSection extends Component
{
    public $boardOfDirectors;
    public $technicalTeam;
    public $teachers;

    public function __construct($boardOfDirectors, $technicalTeam, $teachers)
    {
        $this->boardOfDirectors = $boardOfDirectors;
        $this->technicalTeam = $technicalTeam;
        $this->teachers = $teachers;
    }

    public function render()
    {
        return view('components.team-section');
    }
}
