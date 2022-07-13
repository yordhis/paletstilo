<?php

namespace App\Http\Controllers;

use App\Models\Measureproduct;
use App\Http\Requests\StoreMeasureproductRequest;
use App\Http\Requests\UpdateMeasureproductRequest;
use App\Models\Measure;
use App\Models\Product;
use Illuminate\Support\Facades\URL;

class MeasureproductController extends Controller
{
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($producto)
    {
      
        $producto = Product::findOrFail($producto);
        $medidasActuales = Measureproduct::where('idProduct', $producto->id)->get();
     
        foreach ($medidasActuales as $medidasActuale) {
            $medidasActuale['data'] = Measure::findOrFail($medidasActuale->idMeasure);
           
        }
       

        $medidas = Measure::all();
        return view('admin.medidasproductos.create', compact('medidas', 'producto', 'medidasActuales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMeasureproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeasureproductRequest $request)
    {

        // return $request;
        $setMedidas = [
            [
                'medida' => $request->medidaDelProducto ?? '0'
            ],
            [
                'medida' => $request->cojinBase ?? '0'
            ],
            [
                'medida' => $request->cojinRespaldo ?? '0'
            ],
            [
                'medida' => $request->medidaDeMesa ?? '0'
            ]   
        ];
      
        
        foreach ($setMedidas as $setMedida) {
            if ($setMedida['medida'] != 0) {
                
                Measureproduct::create([
                     'idProduct' => $request->idProducto,
                     'idMeasure' => $setMedida['medida'] 
                ]);
            }
        }
        // $medidasActuales = Measureproduct::where('idProduct', $request->idProducto)->get();
     
        // foreach ($medidasActuales as $medidasActuale) {
        //     $medidasActuale['data'] = Measure::findOrFail($medidasActuale->idMeasure);
           
        // }

        // $medidas = Measure::all();
        // $producto = Product::findOrFail($request->idProducto);
        return redirect()->route('admin.medidasproducto.crear',$request->idProducto);

        return view('admin.medidasproductos.create', compact('producto', 'medidas', 'medidasActuales'));

    }

   
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Measureproduct  $measureproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measureproduct $medidasproducto)
    {
      
            $idProducto = $medidasproducto->idProduct;
            $medidasproducto->delete();

            // $medidasActuales = Measureproduct::where('idProduct', $idProducto )->get();
        
            // foreach ($medidasActuales as $medidasActuale) {
            //     $medidasActuale['data'] = Measure::findOrFail($medidasActuale->idMeasure);
            
            // }
        

            // $medidas = Measure::all();
            // $producto = Product::findOrFail($idProducto);
            // return URL::current();
            return redirect()->route('admin.medidasproducto.crear',$idProducto);
            // return view('admin.medidasproductos.create', compact('producto', 'medidas', 'medidasActuales'));
      
    }
}
