<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductosdestacadosmovilLayout extends Component
{
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $productosDestacados = $this->value;
        return view('components.productosdestacadosmovil-layout', compact('productosDestacados'));
    }
}
