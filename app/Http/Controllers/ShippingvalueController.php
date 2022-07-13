<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Shippingvalue;
use App\Http\Requests\StoreShippingvalueRequest;
use App\Http\Requests\UpdateShippingvalueRequest;
use App\Models\Commune;

class ShippingvalueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preciosdedespachos = Shippingvalue::orderBy('id','desc')->paginate(15);
        if(count($preciosdedespachos) > 0){
            foreach ($preciosdedespachos as $preciosdedespacho) {
                $comuna = Commune::findOrFail($preciosdedespacho->idCommune);
                $preciosdedespacho->comuna = $comuna->name;
                $preciosdedespacho->kmDiference =  $preciosdedespacho->kmDiference . ' Km';
                
                $preciosdedespacho->kmValue = number_format($preciosdedespacho->kmValue, 2,',', '.') . ' CLP';
                $preciosdedespacho->price = number_format($preciosdedespacho->price, 2,',', '.') . ' CLP';
            }
        }else {
            $preciosdedespachos = null;
        }
        // return $preciosdedespachos;

        return view('admin.preciosdedespachos.index', compact('preciosdedespachos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunas = Commune::all();

        return view('admin.preciosdedespachos.create', compact('comunas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShippingvalueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingvalueRequest $request)
    {
     
        
        $result = Shippingvalue::create($request->all());
        if ($result) {
           $mensaje = "Configuración de despacho se guardo correctamente";
           $color = "success";
        }else{
            $mensaje = "Error al configuracion de despacho";
            $color = "danger";
        }

        $comunas = Commune::all();
        return redirect()->route('admin.preciosdedespachos.create', compact('mensaje', 'comunas', 'color'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shippingvalue  $shippingvalue
     * @return \Illuminate\Http\Response
     */
    public function show(Shippingvalue $preciosdedespacho)
    {
        return view('admin.preciosdedespachos.show', compact('preciosdedespacho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shippingvalue  $shippingvalue
     * @return \Illuminate\Http\Response
     */
    public function edit(Shippingvalue $preciosdedespacho)
    {
        $comunas = Commune::all();

        $nameComuna = Commune::findOrFail($preciosdedespacho->idCommune);

        return view('admin.preciosdedespachos.edit', compact('preciosdedespacho', 'comunas', 'nameComuna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingvalueRequest  $request
     * @param  \App\Models\Shippingvalue  $shippingvalue
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShippingvalueRequest $request, Shippingvalue $preciosdedespacho)
    {
        
        if ($preciosdedespacho->update($request->all())) {
            $mensaje = "Editó Correctamente";
            $color = "success";
           
         }else{
             $mensaje = "Error al editar";
             $color = "danger";
         }

         $comunas = Commune::all();
         $nameComuna = Commune::findOrFail($preciosdedespacho->idCommune);

         return redirect()->route('admin.preciosdedespachos.edit', compact('mensaje', 'color', 'preciosdedespacho', 'comunas', 'nameComuna'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shippingvalue  $shippingvalue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shippingvalue $preciosdedespacho)
    {
        if ($preciosdedespacho->delete()) {
            $mensaje = "El precio de despacho se eliminó Correctamente";
            $color = "success";
        }else{
            $mensaje = "El precio de despacho No se eliminó!!!";
            $color = "danger"; 
        }
        
      
        return redirect()->route('admin.preciosdedespachos.index', compact('mensaje', 'color'));
    }
}
