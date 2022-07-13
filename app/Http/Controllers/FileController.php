<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\Article;
use App\Models\Measure;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.files.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFileRequest $request)
    {
        
        $imagen = $request->file('file')->store('public/productos');
        // return $imagen;
        $url = Storage::url($imagen);
       
        $result = File::create([
            'url' => $url, 
            'idProduct'=>$request->idProducto
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit($idProducto)
    {
        $files = File::where('idProduct', $idProducto)->get();
        $producto = Product::findOrFail($idProducto);
        return view('admin.files.edit', compact('files','producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFileRequest  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFileRequest $request, File $file)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $idProducto = $file->idProduct;

        $paths = str_replace('storage','public', $file->url);

        Storage::delete($paths);
        
        $file->delete();
        
        $files = File::where('idProduct', $idProducto)->get();
        $producto = Product::findOrFail($idProducto);

       return view('admin.files.edit', compact('files', 'producto'));
    }
}
