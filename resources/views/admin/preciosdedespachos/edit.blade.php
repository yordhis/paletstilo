<x-app-layout>  

    @php
        $mensaje = $_GET['mensaje'] ?? null != null ? $_GET['mensaje'] : null;
        $color = $_GET['color'] ?? null != null ? $_GET['color'] : null;
    @endphp

    <x-jet-welcome  class="mt-5"> 
        @isset($mensaje)
            <x-alert :color="$color">
                <x-slot name="title">
                    {{$mensaje ?? $_GET['mensaje']}}
                </x-slot>
            </x-alert>
        @endisset

        <div>
            <h1 class="block h-12 w-auto">
                <i class="bi bi-signpost-2"></i>
               Actualizar Configuración de costo de despacho
            </h1>
        </div>

        
        <x-form>
            
            <x-slot name="route">
                {{route("admin.preciosdedespachos.update", $preciosdedespacho )}}

            </x-slot>  

            <x-slot name="method">
                {{'POST'}}
            </x-slot>   

            <x-slot name="inputs">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12 col-sm-6">
                    
                        <label for="categoria">Comuna</label>
                        <select name="idCommune" id="categoria" class="form-control">
                                <option value="{{ $preciosdedespacho->idCommune }}">
                                    {{ $nameComuna->name ?? 'Seleccione una Comuna' }}
                                </option>
                                    @foreach ($comunas as $comuna)
                                        <option value="{{$comuna->id}}">{{$comuna->name}}</option>
                                        
                                    @endforeach
                        </select>
                        @error('idCommune')
                            <small class="text-danger"> {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                   
                    <div class="col-12 col-sm-6">
                        <label for="kmValue">Valor del Kilometro</label>
                        <input type="number" class="form-control" min="1" max="1000000" placeholder="Ejemplo: 1.000 CLP" name="kmValue" value="{{ old('kmValue', $preciosdedespacho->kmValue ?? '') }}">
                        @error('kmValue')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="kmDiference">Diferencia de kilometros</label>
                        <input type="number" class="form-control" min="1" max="500" placeholder="Ejemplo: 35Km " name="kmDiference" value="{{ old('kmDiference', $preciosdedespacho->kmDiference ?? '') }}">
                        @error('kmDiference')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="price">Precio</label>
                        <input type="number" class="form-control" min="1" max="1000000" placeholder="Ejemplo: 1.599 CLP " name="price" value="{{ old('price', $preciosdedespacho->price ?? '') }}">
                        @error('price')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                </div>

                
                
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary">Actualizar configuracion</button>
                    </div>
                </div>
            </x-slot>   

        </x-form>
      

        {{-- navegacion de las acciones --}}

        <x-nav-acciones>
            <a href="{{route("admin.preciosdedespachos.index")}}" class="btn btn-secondary  mt-5">
                Volver
            </a>
        </x-nav-acciones>
        
    </x-jet-welcome>

</x-app-layout>  