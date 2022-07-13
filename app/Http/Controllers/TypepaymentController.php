<?php

namespace App\Http\Controllers;

use App\Models\Typepayment;
use Illuminate\Support\Str;
use App\Http\Requests\StoreTypepaymentRequest;
use App\Http\Requests\UpdateTypepaymentRequest;

class TypepaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposdepagos = Typepayment::orderBy('id','desc')->paginate(15);

       if (count($tiposdepagos) == 0) {
            $tiposdepagos = null;
       } 
       
        return view('admin.tiposdepagos.index', compact('tiposdepagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.tiposdepagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypepaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypepaymentRequest $request)
    {
        // asignacion de slug
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;
        

        $result = Typepayment::create($request->all());
        if ($result) {
           $mensaje = "Registro Correctamente";
           $color = "success";
        }else{
            $mensaje = "Error al registrar";
            $color = "danger";
        }
        return redirect()->route('admin.tiposdepagos.create', compact('mensaje', 'color'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typepayment  $typepayment
     * @return \Illuminate\Http\Response
     */
    public function show(Typepayment $tiposdepago)
    {
        return view('admin.tiposdepagos.show', compact('tiposdepago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typepayment  $typepayment
     * @return \Illuminate\Http\Response
     */
    public function edit(Typepayment $tiposdepago)
    {
        return view('admin.tiposdepagos.edit', compact('tiposdepago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypepaymentRequest  $request
     * @param  \App\Models\Typepayment  $typepayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypepaymentRequest $request, Typepayment $tiposdepago)
    {
        $slugName = Str::slug($request->name, '-');
        $request['slug'] = $slugName;
       

        if ($tiposdepago->update($request->all())) {
            $mensaje = "Registro Correctamente";
            $color = "success";
         }else{
             $mensaje = "Error al registrar";
             $color = "danger";
         }

         return view('admin.tiposdepagos.edit', compact('mensaje', 'color','tiposdepago'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typepayment  $typepayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typepayment $tiposdepago)
    {
        
        if ($tiposdepago->delete()) {
            $mensaje = "Eliminó el tipo de pago correctamente";
            $color = "success";
         }else{
             $mensaje = "No se pudo eliminar el tipo de pago";
             $color = "danger";
         }

        return redirect()->route('admin.tiposdepagos.index', compact('mensaje', 'color'));
    }
}
