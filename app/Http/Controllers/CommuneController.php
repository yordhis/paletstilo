<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Http\Requests\StoreCommuneRequest;
use App\Http\Requests\UpdateCommuneRequest;
use App\Models\Province;
use Illuminate\Support\Str;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunas = Commune::all();
        
        return view('admin.comunas.index', compact('comunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias = Province::all();
        return view('admin.comunas.create', compact('provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommuneRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommuneRequest $request)
    {
        $provincias = Province::all();

        // asignacion de slug
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;
        

        $result = Commune::create($request->all());
        if ($result) {
           $mensaje = "Registro Correctamente";
        }else{
            $mensaje = "Error al registrar";
        }
        return view('admin.comunas.create', compact('mensaje', 'provincias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function show(Commune $comuna)
    {
        return view('admin.comunas.show', compact('comuna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function edit(Commune $comuna)
    {
        $provincias = Province::all();

        $nameProvincia =  Province::findOrFail($comuna->idProvince);

        return view('admin.comunas.edit', compact('provincias', 'comuna', 'nameProvincia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommuneRequest  $request
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommuneRequest $request, Commune $comuna)
    {
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;
       

        if ($comuna->update($request->all())) {
            $mensaje = "Editó Correctamente";
           
         }else{
             $mensaje = "Error al editar";
         }

         $provincias = Province::all();
         $nameProvincia =  Province::findOrFail($comuna->idProvince);

         return view('admin.comunas.edit', compact('mensaje', 'comuna', 'nameProvincia', 'provincias'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commune  $commune
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commune $comuna)
    {
        $comuna->delete();

        return redirect()->route('admin.comunas.index');
    }
}
