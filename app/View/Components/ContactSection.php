<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Closure;

class ContactSection extends Component
{
    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function render(): View|Closure|string
    {
        return view('components.contact-section');
    }
}
