<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateCategorieRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categorias = Categorie::all();
        $categorias = Categorie::paginate(5);
       
        $categorias->withPath('/admin/categorias?count=' . $categorias->count() );
        foreach ($categorias as $categoria) {
           if ($categoria->status == 1) {
                $categoria['estatus'] = "Publicado";
           }else {
                $categoria['estatus'] = "No publicado";
           }
        }
        
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // return 'controlador funcionando create';
        return view('admin.categorias.create');
        
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorieRequest $request)
    {   
        $url = null;
        $modal = $request->modal ?? null;
        //recibimos la imagen en caso de tener
        if ($request->file('file')) {
            $imagen = $request->file('file')->store('public/categorias');
            // return $imagen;
            $url = Storage::url($imagen);
        }
        
        //asignamos la imagen a la categoria
        $request['image'] = $url;
        // return $request;
        
        // asignacion de slug
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;
        
        // $categorias = Categorie::all();
        $categorias = Categorie::paginate(15);
        $categorias->withPath('/admin/categorias');

        //creamos la categoria
        $categoria = Categorie::create($request->all());

        if ($categoria) {
             //Si estamos creando desde un modal redireccionanmos a la url previa
            if ($modal != null) {
            
                return redirect(URL::previous(),201);
            }else{

                $color = 'success';
                $mensaje = "La categoria {$request->name} se registro correctamente!!!";
                return redirect()->route('admin.categorias.index', compact('mensaje', 'categorias', 'color'));
            }
        }else{
            return $request;
            $mensaje = "Error al registrar";
            return view('admin.categorias.create', compact('mensaje'));
        }
    }

  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categoria)
    {
        return view('admin.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categoria)
    {
        
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorieRequest  $request
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorieRequest $request, Categorie $categoria)
    {
        
        $url = null;
        //recibimos la imagen en caso de tener
        if ($request->file('file')) {
            $imagen = $request->file('file')->store('public/categorias');
            // return $imagen;
            $url = Storage::url($imagen);

            //eliminamos la imagen actual 
            if ($categoria->image) {
                $paths = str_replace('storage','public', $categoria->image);
                Storage::delete($paths);
            }
        }else{
            $url = $categoria->image;
        }
        
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;

        $categoria->name = $request->name;
        $categoria->eslogan = $request->eslogan;
        $categoria->status = intval($request->status);
        $categoria->slug = $request->slug;
        $categoria->image = $url;

       

        if ($categoria->save()) {
            $mensaje = "La categoria {$request->name} se editó correctamente";
            $color = "success";
        }else{
            $mensaje = "Error al editar la categoria {$categoria->name}";
            $color = "danger";
         }

         return redirect()->route('admin.categorias.edit', compact('mensaje', 'categoria', 'color') );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categoria)
    {
        $modal = $_REQUEST['modal'] ?? null;

        $paths = str_replace('storage','public', $categoria->image);

        Storage::delete($paths);

        $categoria->delete();

        if ($modal != null) {
            
            return redirect(URL::previous(),200);
        }else{
        
        $categorias = Categorie::paginate(5);
        $categorias->withPath('count=' . $categorias->count() . '&page=' .  $categorias->currentPage());
        return redirect()->route('admin.categorias.index', compact('categorias'));
        }
    }
    
    
}
