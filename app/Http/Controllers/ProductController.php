<?php

namespace App\Http\Controllers;

use App\Http\Requests\{StoreProductRequest, UpdateProductRequest};
use App\Models\{Helper, Categorie, File, Measure, Measureproduct, Product};

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public $productos;
    public $helperClass;

    public function __construct()
    {  
        $this->helperClass = new Helper;
        $paginacion = Product::orderBy('id','desc')->paginate(15);

        $this->helperClass->setProductos($paginacion);
        $this->helperClass->setAll();
        
        $this->productos = $this->helperClass->getProductos();
    }

    public function index()
    {
        $productos = $this->productos;
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categorie::all();
        $categoriasPaginadas = Categorie::all();
        

        return view('admin.productos.create', compact('categorias', 'categoriasPaginadas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
       // asignacion de slug
       $slugName = Str::slug($request->name, '-');
       $request['slug'] = $slugName;
    
       
       $producto = Product::create($request->all());
       $categorias = Categorie::all();
       
       $files = File::where('idProduct', $producto->id)->get();

       if ($producto) {
          $mensaje = "El producto se a guardado";
          return view('admin.files.create', compact('mensaje', 'producto', 'files'));
       }else{
           $mensaje = "Error al registrar";
           return view('admin.productos.create', compact('mensaje', 'categorias'));
       }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $producto)
    {
        return view('admin.productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $producto)
    {
        $categorias = Categorie::all();
        $nameCategoria = Categorie::findOrFail($producto->idCategorie);

        return view('admin.productos.edit', compact('producto', 'categorias', 'nameCategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $producto)
    {
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;

        $categorias = Categorie::all();
        $nameCategoria = Categorie::findOrFail($producto->idCategorie);
        $files = File::where('idProduct', $producto->id)->get();

        if ($producto->update($request->all())) {
            $mensaje = "Actualización del producto exitosa";
            return view('admin.files.edit', compact('mensaje', 'producto', 'files'));
           
         }else{
             $mensaje = "Error al editar";
             return view('admin.productos.edit', compact('mensaje', 'producto', 'categorias', 'nameCategoria'));
         }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $producto)
    {
        

        $files = File::where('idProduct', $producto->id)->get();
        $medidas = Measureproduct::where('idProduct', $producto->id)->get();

        foreach ($medidas as $medida) {
            if ($medida->delete()) {
               echo "eliminado M";
            }else {
                echo "fallo M";
            }
            
        }

        foreach ($files as $file) {
            $paths = str_replace('storage','public', $file->url);

            Storage::delete($paths);
            if ($file->delete()) {
               echo "eliminado F";
            }else {
                echo "fallo F";
            }
            
        }
       

        $producto->delete();

        return redirect()->route('admin.productos.index');
    }
}
