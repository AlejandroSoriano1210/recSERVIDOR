<?php

namespace App\Livewire;

use Livewire\Component;

class BarraBusqueda extends Component
{
    public $busqueda;
    public $clase;
    public $comando;
    public function render()
    {
        $resultado = [];
        if (trim($this->busqueda) !== '') {
            $resultado = $this->clase::where($this->comando, 'like', '%'. $this->busqueda .'%')->get();
        }
        return view('livewire.barra-busqueda', ['resultado'=> $resultado]);
    }
}
