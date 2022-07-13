<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductoLayout extends Component
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
        $producto = $this->value;
        return view('components.producto-layout', compact('producto'));
    }
}
