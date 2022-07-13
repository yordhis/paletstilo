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
                <i class="bi bi-box-seam"></i>
                Creando una categoria
            </h1>
        </div>

        
        <x-form>
            
            <x-slot name="route">
                {{route("admin.categorias.store")}}

            </x-slot>  

            <x-slot name="method">
                {{'POST'}}
            </x-slot>   

            <x-slot name="inputs">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="name">Nombre de la categorias</label>
                        <input type="text" class="form-control" placeholder="Ejemplo: Terrazas" name="name" value="{{ old('name', $categoria->name ?? '') }}" required>
                        @error('name')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                   
                    <div class="col-6">
                        <label for="eslogan">Frace o eslogan</label>
                        <input type="text" class="form-control" max="25" placeholder="Ejemplo: Lo mejor para tu terraza" name="eslogan" value="{{ old('eslogan', $categoria->eslogan ?? '') }}">
                        @error('eslogan')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                    <div class="col-6 mt-2">
                        <label for="status">¿Desea publicar esta categoria?</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="mySwitch" name="status" value="1" checked>
                            <label class="form-check-label" for="mySwitch">Publicar</label>
                          </div>
                        @error('status')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="imagen">Agregar imagen</label>
                        <div class="input-group">
                            
                            <input type="file" class="form-control " name="file" id="file" accept="image/*">
                          </div>
                        @error('file')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                </div>

                
                
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary">Guardar Categoria</button>
                    </div>
                </div>
            </x-slot>   

        </x-form>
      

        {{-- navegacion de las acciones --}}

        <x-nav-acciones>
            <a href="{{route("admin.categorias.index")}}" class="btn btn-secondary  mt-5">
                Volver
            </a>
        
          
        </x-nav-acciones>
        
    </x-jet-welcome>
    
    
   
</x-app-layout>  

