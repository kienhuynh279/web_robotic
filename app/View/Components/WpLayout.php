<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WpLayout extends Component
{
    public $sidebar;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($sidebar = false)
    {
        //
        $this->sidebar = $sidebar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.wp-layout');
    }
}
