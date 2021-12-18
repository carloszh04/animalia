<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class App extends Component
{
    public $title;
    public $styles;
    public $scripts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = 'Inicio', $styles = null, $scripts = null)
    {
        $this->title = $title;
        $this->styles = $styles;
        $this->scripts = $scripts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.app');
    }
}
