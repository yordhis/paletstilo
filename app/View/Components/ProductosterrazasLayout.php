<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductosterrazasLayout extends Component
{
    public $value;
    public $titulo;
    public $eslogan;
    public $categoria;
    public $nameImage;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value, $titulo, $eslogan, $categoria, $nameImage)
    {
        $this->value = $value;
        $this->titulo = $titulo;
        $this->eslogan = $eslogan;
        $this->categoria = $categoria;
        $this->nameImage = $nameImage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $productos =  $this->value;
        $titulo =  $this->titulo;
        $eslogan =  $this->eslogan;
        $categoria =  $this->categoria;
        $nameImage =  $this->nameImage;
        return view('components.productosterrazas-layout', compact('nameImage','productos', 'titulo', 'eslogan', 'categoria'));
    }
}
