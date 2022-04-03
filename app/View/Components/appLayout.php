<?php

namespace App\View\Components;

use Illuminate\View\Component;

class appLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $styles = null;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'Azmi';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app');
    }
}
