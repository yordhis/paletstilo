<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Helper, Product, Categorie, Article, Carrito};
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public $helperClass;
    public $user;
    public $productos;
    public $categorias;
    public $productosPorCategoria;
    public $productosDestacados;
    public $carritoDeCompra;
    public $favoritos;

    public function __construct()
    {   
        
        $this->helperClass = new Helper;
      
        $this->productos = $this->helperClass->setProductos(Product::all());
        $this->helperClass->setAll();
        
        $this->categorias = Categorie::all();
        foreach ($this->categorias as $categoria) {  
          
                $this->helperClass->setProductosPorCategoria($categoria, $categoria->slug);
            
        }
        
        $this->productos = $this->helperClass->getProductos();
        $this->productosDestacados = $this->helperClass->getProductosDestacados();
      
        $this->productosPorCategoria = $this->helperClass->getProductosPorCategoria();

        
        // $this->setCarrito();
       

    }

    public function index(){
    
        
        $productosPorCategoria = $this->productosPorCategoria;
        $categorias = $this->categorias;
        $productosDestacados = $this->productosDestacados;
        
        return  view('web.welcome', 
                compact('productosPorCategoria', 'categorias', 'productosDestacados'));

       
    }

    public function mostrarProducto($slug){
        if (Auth::user() != null) {
           
            $carritos = Carrito::where('idUser', Auth::user()->id)->get();
    
            if ($carritos != null) {
                $this->setCarrito($carritos);
                $carritos = $this->carritoDeCompra =  $this->getCarrito();
            }else {
                return "llego aqui";
                $carritos = [];
            }
        }else{
            $carritos = [];
        }
       
      
       
        $producto = $this->helperClass->getProducto($slug);
        // return $producto;
        $productosDestacados = $this->productosDestacados;
        return view('web.producto', compact('producto', 'productosDestacados', 'carritos'));
    }


    public function empresa(){

        $empresa = Article::where('section', 'empresa')->get();
        // return $empresa;
        return view('web.empresa', compact('empresa'));
    }

    public function politicas(){

        $empresa = Article::where('section', 'politicas')->get();
        // return $empresa;
        return view('web.politicas', compact('empresa'));
    }

    public function setCarrito($carritos){
       
           
        foreach ($this->productos as $producto) {
            foreach ($carritos as $carrito) {
                if ($producto->id == $carrito->idProduct) {
                    $producto['cantidad'] = $carrito->cantidad;
                    $producto['idCarrito'] = $carrito->id;
                    $producto['idUser'] = $carrito->idUser;
                    $this->carritoDeCompra[] = $producto;
                }
            }
        }
    }

    public function getCarrito(){
        return $this->carritoDeCompra;
    }
}
