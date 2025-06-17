<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BotonEditar extends Component
{
    /**
     * Create a new component instance.
     */
    public $objeto;
    public $ruta;

    public function __construct($objeto , $ruta)
    {
        $this->objeto = $objeto;
        $this->ruta = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.boton-editar');
    }
}
