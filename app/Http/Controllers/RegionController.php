<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use Illuminate\Support\Str;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regiones = Region::orderBy('id','desc')->paginate(10);
        
        return view('admin.regiones.index', compact('regiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regiones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegionRequest $request)
    {
        // asignacion de slug
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;
        

        $result = Region::create($request->all());
        if ($result) {
           $mensaje = "Registro Correctamente";
        }else{
            $mensaje = "Error al registrar";
        }
        return view('admin.regiones.create', compact('mensaje'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        return view('admin.regiones.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return view('admin.regiones.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegionRequest  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegionRequest $request, Region $region)
    {
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;

        $region->name = $request->name;
        $region->slug = $request->slug;

       

        if ($region->save()) {
            $mensaje = "Editó Correctamente";
         }else{
             $mensaje = "Error al editar";
         }
         return view('admin.regiones.edit', compact('mensaje', 'region'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();

        return redirect()->route('admin.regiones.index');
    }
}
