<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItemChild extends Component
{
    public $title;
    public $toggler;
    public $slot;
    public $isActive;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$toggler,$isActive=false,$slot=null)
    {
        $this->title = $title;
        $this->toggler = $toggler;
        $this->isActive=$isActive;
        $this->slot =$slot;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-item-child',['title' => $this->title,'toggler'=>$this->toggler ,'isActive'=>$this->isActive,'svg'=> optional($this->slot)->svg]);
    }
}
