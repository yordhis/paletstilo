<x-app-layout>  

    <x-jet-welcome class="mt-5" >
        <strong>Progreso</strong>
        <x-progreso>
            <x-slot name="color">
                bg-success
            </x-slot>
            <x-slot name="porcentaje">
                95%
            </x-slot>
        </x-progreso>

        <div class="row">
            <div class="col-12">

                <h1 class="block mt-3 w-auto">
                    <i class="bi bi-box-seam"></i>
                    Agregar las medidas del producto: {{$producto->name ?? ''}}
                </h1>
            </div>
        </div>
      
            <div class="row d-inline-flex mt-3 p-3 shadow-sm bg-gray-100 w-100">
               <div class="col-12">

                   <x-jet-label class="fs-4">
                       Medidas Actuales del producto
                   </x-jet-label >
               </div>
               

                @if(count($medidasActuales) > 0)
                    
                
                    @foreach ($medidasActuales as $medidasActual)  
                        <div class="mt-2 position-relative col-12 col-sm-4 col-lg-3">
                            <form action="{{route("admin.medidasproductos.destroy", $medidasActual->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <p class="p-3 bg-info text-white">
                                <strong> {{$medidasActual->data->name}}:</strong>
                                <i>
                                    {{$medidasActual->data->largo . 'x' . $medidasActual->data->ancho . 'x' . $medidasActual->data->alto ?? 'No hay medidas registradas'}}
                                </i>
                                </p>
                                <button> <i class="bi bi-x fs-4 p-2 text-danger position-absolute top-0 end-0"></i> </button>
                            </form>   
                        
                        </div>
                    @endforeach
                @else 
                    <div class="p-2 position-relative col-12 text-center text-gray-500">
                        {{'No hay medidas registradas'}}
                    </div>
                @endif

            </div>


        <div class="row mt-3 p-3 shadow-sm bg-gray-100 w-100">
            <div class="col-12">
                <x-jet-label class="fs-4 mb-3">
                    Agregar nuevas medidas del producto
                </x-jet-label >
            </div>

            <div class="col-12">

                <x-form>
                    
                    <x-slot name="route">
                        {{route("admin.medidasproductos.store")}}
        
                    </x-slot>  
        
                    <x-slot name="method">
                        {{'POST'}}
                    </x-slot>  
        
                    <x-slot name="inputs">
                        @csrf
                            <div class="row ">
        
                                <div class="col-12 col-sm-3">
                                    <label for="medidaDelProducto">Medida de {{$producto->name ?? ''}}</label>
                                    <select name="medidaDelProducto" id="medidaDelProduto" class="form-control">
                                        <option value="">Selecciones una medida</option>
                                        @foreach ($medidas as $medida)
                                            @if ($medida->name != "Cojín Base" && $medida->name != "Cojín Respaldo")
                                                <option value="{{$medida->id}}">{{$medida->name . ' (' . $medida->largo . 'x' . $medida->ancho . 'x' . $medida->alto . ')'}}</option>
                                            @endif
                                        @endforeach
                                    </select>
        
                                    @error('medidaDelProducto')
                                    <small> {{ $message}} </small>
                                    <br>        
                                    @enderror
                                </div>
                            
                                <div class="col-12 col-sm-3">
                                    <label for="cojinBase">Medida de Cojín Base</label>
                                    <select name="cojinBase" id="cojinBase" class="form-control">
                                        <option value="">Selecciones una medida</option>
                                        @foreach ($medidas as $medida)
                                            @if ($medida->name == "Cojín Base")
                                                <option value="{{$medida->id}}">{{$medida->name . ' (' . $medida->largo . 'x' . $medida->ancho . 'x' . $medida->alto . ')'}}</option>
                                            @endif
                                            
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-12 col-sm-3">
                                    <label for="cojinRespaldo">Medida de Cojín Respaldo</label>
                                    <select name="cojinRespaldo" id="cojinRespaldo" class="form-control">
                                        <option value="">Selecciones una medida</option>
                                        @foreach ($medidas as $medida)
                                            @if ($medida->name == "Cojín Respaldo")
                                                <option value="{{$medida->id}}">{{$medida->name . ' (' . $medida->largo . 'x' . $medida->ancho . 'x' . $medida->alto . ')'}}</option>
                                            @endif
                                            
                                        @endforeach
                                    </select>
                                </div>
                            
                                <div class="col-12 col-sm-3">
                                    <label for="medidaDeMesa">Medida de Mesa</label>
                                    <select name="medidaDeMesa" id="medidaDeMesa" class="form-control">
                                        <option value="">Selecciones una medida</option>
                                        @foreach ($medidas as $medida)
                                            @if ($medida->name == "Mesa")
                                                <option value="{{$medida->id}}">{{$medida->name . ' (' . $medida->largo . 'x' . $medida->ancho . 'x' . $medida->alto . ')'}}</option>
                                            @endif
                                            
                                        @endforeach
                                    </select>
                                </div>
        
                                <input type="hidden" class="form-control" value=" {{$producto->id ?? ''}}" name="idProducto">
                            </div>
        
                            
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-3 mt-3">
                                    <button class="btn btn-info text-white">Guardar medidas</button>
                                </div>
                            </div>
                        
        
                    </x-slot>   
        
                </x-form>
            </div>
        </div>
        

        
        <x-nav-acciones class="mt-3 p-3  w-100 row">
            <a href="{{route("admin.productos.edit", $producto)}}" class="btn btn-primary text-white mt-5 col-12 col-sm-3">
                Regresar a editar producto
            </a>
        
            <a href="{{route("admin.files.edit", $producto->id)}}" class="btn btn-primary text-white  mt-5 col-12 col-sm-3">
                Cambiar las imagenes
            </a>
        
            <a href="{{route("admin.productos.index")}}"  class="btn btn-danger text-white  mt-5 col-12 col-sm-3" >
                Finalizar
            </a>
              
        </x-nav-acciones>
    </x-jet-welcome>
    
    

    
</x-app-layout>  




