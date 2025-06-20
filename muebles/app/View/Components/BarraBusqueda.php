<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BarraBusqueda extends Component
{
    /**
     * Create a new component instance.
     */
    public $clase;
    public function __construct($clase)
    {
        $this->clase = $clase;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.barra-busqueda');
    }
}
