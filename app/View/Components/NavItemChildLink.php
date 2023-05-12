<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItemChildLink extends Component
{
   public $title;
   public $href;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$href)
    {
        $this->title=$title;
        $this->href=$href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-item-child-link',['title'=>$this->title,'href'=>$this->href]);
    }
}
