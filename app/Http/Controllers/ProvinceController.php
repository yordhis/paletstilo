<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Models\Region;
use Illuminate\Support\Str;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincias = Province::all();
        
        return view('admin.provincias.index', compact('provincias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regiones = Region::all();
        return view('admin.provincias.create', compact('regiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProvinceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProvinceRequest $request)
    {
        $regiones = Region::all();

         // asignacion de slug
         $slugName = Str::slug($request->name, '-');
         $request['slug'] = $slugName;
         
 
         $result = Province::create($request->all());
         if ($result) {
            $mensaje = "Registro Correctamente";
         }else{
             $mensaje = "Error al registrar";
         }
         return view('admin.provincias.create', compact('mensaje', 'regiones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $provincia)
    {
        return view('admin.provincias.show', compact('provincia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit(Province $provincia)
    {
        $regiones = Region::all();

        $nameRegion =  Region::findOrFail($provincia->idRegion);

        return view('admin.provincias.edit', compact('regiones', 'provincia', 'nameRegion'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProvinceRequest  $request
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProvinceRequest $request, Province $provincia)
    {
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;
       

        if ($provincia->update($request->all())) {
            $mensaje = "Editó Correctamente";
           
         }else{
             $mensaje = "Error al editar";
         }
         $regiones = Region::all();
         $nameRegion =  Region::findOrFail($provincia->idRegion);

         return view('admin.provincias.edit', compact('mensaje', 'provincia', 'nameRegion', 'regiones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $provincia)
    {
        $provincia->delete();

        return redirect()->route('admin.provincias.index');
    }
}
