<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CrearTabla extends Component
{
    /**
     * Create a new component instance.
     */
    public $clase;
    public $cabeceras;
    public $datos;

    public function __construct($clase, $cabeceras, $datos)
    {
        $this->clase = $clase;
        $this->cabeceras = $cabeceras;
        $this->datos = $datos;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.crear-tabla');
    }
}
