<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItem extends Component
{
    public $href;
    public $isActive;
    public function __construct($href, $isActive = false)
    {
        $this->href = $href;
        $this->isActive = $isActive;
    }

    public function render(): View|Closure|string
    {
        return view('components.nav-item',['href' => $this->href,'isActive' => $this->isActive]);
    }
}
