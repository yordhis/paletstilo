<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\File;
use App\Models\Measure;
use App\Models\Carrito;
use App\Models\Measureproduct;
use Illuminate\Support\Facades\Auth;

class Helper extends Model
{
    use HasFactory;

    public $productos;
    public $producto;
    public $productosPorCategoria;
    public $productosDestacados;
    public $slug = null;
    public $slugs;
    // public $favoritos; pendiente
    public $carritoDeCompra; 


    //retorno modelo de datos en array o objeto
    public function productosAll($productos){
        
        if ($productos) {
            
            foreach ($productos as $producto) {
                if ($producto->available == 1) {
                    $producto['disponible'] = "En Stock";
                }
                $producto['current'] = "CLP";
                $producto['price'] = number_format(doubleval($producto->price), 2, ',', '.');
                $categoria = Categorie::findOrFail($producto->idCategorie);
                $producto['categoria'] = $categoria->name;
                $files = File::where('idProduct', $producto->id)->get();
                if($files){
                    $cantidad = count($files);
                    $m = 1;
                    foreach ($files as $file) {
                        $nameFile = explode('/', $file->url);
                        $file['name'] = $nameFile[3];
                        $file['cantidadDeModelos'] =  $cantidad;
                        $file['modelo'] = $m;
                        $m++;
                    }
                    $producto['image'] = $files;
                    
                }else {
                    $producto['image'] = [];
                }
                $medidasproductos = Measureproduct::where('idProduct',$producto->id)->get();
                
                foreach ($medidasproductos as $medidasproducto) {
                    
                    $medidasproducto['medida'] = Measure::findOrFail($medidasproducto->idMeasure);
                    
                }
                
                
                $producto->medidasproductos = $medidasproductos;
    
            }
            
            return $productos;
        }
       
    }

    //inserciones
    public function setProductos($productos){
        $this->productos = $this->productosAll($productos);
    }
  

    public function setProductosPorCategoria($categoria, $slug){
     
        if($categoria->status == 1){
            $this->setSlug($slug);
            $nameCategoria = $this->getSlug();
            $categoriaNula = [];
            foreach ($this->productos as $producto) {
                if ($producto->idCategorie == $categoria->id) {
                    
                    $this->productosPorCategoria[$nameCategoria][] = $producto;
                }
            }

            if (count($this->productosPorCategoria[$nameCategoria]) > 0) {
             
                $this->productosPorCategoria[$nameCategoria] = $this->productosAll($this->productosPorCategoria[$nameCategoria]);
            }
            
        }

    }

    public function setProductosDestacados(){

        foreach ($this->productos as $producto) {
            if ($producto->destacado != 0) {
                $this->productosDestacados[] = $producto;
            }
        }
        $this->productosDestacados = $this->productosAll($this->productosDestacados);
    }

    public function setCarritoDeCompra($carritos){
        // $carritos = Carrito::where('idUser', Auth::user()->id)->get();
        foreach ($this->productos as $producto) {
            foreach ($carritos as $carrito) {
                if ($producto->id == $carrito->idProduct) {
                    $carrito[] = $producto;
                }
            }
        }

        $this->carritoDeCompra = $carritos;
    }

    /**
     * Setea un slug con lower cames case
     * 
     */
    public function setSlug($slug){
       
        $slugs = explode('-',$slug);
        $name = '';
        $i=1;
        foreach ($slugs as $slug) {
            if ($i == 1) {
                $name .= $slug;
            }else{
                $name .= ucwords($slug);
            }
            $i++;
        }

        $this->slug = $name;
    }
    /**
     * Setea los slug en un array
     */
    public function setSlugAll(){

    }
    
    //Setear todo
    public function setAll(){
        $this->setProductosDestacados();
    }

    //retornos
    public function getProductos(){
        return $this->productos;
    }
    
    public function getProducto($slug){
        foreach ($this->productos as $producto) {
            if($producto->slug == $slug){
                    $this->producto = $producto;
            }
        }
        return $this->producto;
    }
    public function getProductosPorCategoria(){
        return $this->productosPorCategoria;
    }

    public function getProductosDestacados(){
        return $this->productosDestacados;
    }
    
    /**
     * Retorna el carrito d compra del usuario
     * 
     */
    public function getCarritoDeCompra(){
        return $this->carritoDeCompra;
    }

    /**
     * Retorna un slug
     */
    public function getSlug(){
        return $this->slug;
    }

    /**
     * Retorna el array de slugs
     */
    public function getSlugs(){
        return $this->slugs;
    }


 

   

  
}
