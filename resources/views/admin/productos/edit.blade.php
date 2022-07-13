<x-app-layout>  

    <x-jet-welcome class="mt-5" >
        @isset($mensaje)
            <x-alert>
                <x-slot name="title">
                    {{$mensaje}}
                </x-slot>
            </x-alert>
        @endisset

        <x-progreso>
            <x-slot name="color">
                bg-success
            </x-slot>
            <x-slot name="porcentaje">
                25%
            </x-slot>
        </x-progreso>

        <div>
            <h1 class="block h-12 w-auto">
                <i class="bi bi-box-seam"></i>
                Editando un producto
            </h1>
        </div>

        <x-form>
            
            <x-slot name="route">
                {{route("admin.productos.update", $producto)}}
            </x-slot>  

            <x-slot name="method">
                POST
            </x-slot>   

            <x-slot name="inputs">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <label for="name">Nombre del producto</label>
                        <input type="text" class="form-control" placeholder="Ejemplo: Sillón Premium" name="name" value="{{ old('name', $producto->name) }}" required>
                        @error('name')
                            <small> {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                    <div class="col">
                        <label for="categoria">Categoria</label>
                        <select name="idCategorie" id="categoria" class="form-control">
                            <option value="{{$nameCategoria->id}}">{{$nameCategoria->name ?? 'Selecciones una categoria'}}</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                
                            @endforeach
                        </select>
                        @error('idCategorie')
                            <small> {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                  
                    <div class="col">
                        <label for="price">Precio</label>
                        <input type="text" class="form-control" placeholder="Ejemplo: 1.000CLP" value="{{ old('price', $producto->price) }}" name="price">
                        @error('price')
                            <small> {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                </div>

                
                
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary">Actualizar y continuar</button>
                    </div>
                </div>
            </x-slot>   

        </x-form>

        {{-- navegacion de las acciones --}}

        <x-nav-acciones>
            <a href="{{route("admin.productos.index")}}" class="btn btn-secondary  mt-5">
                Volver
            </a>
            <a href="{{route("admin.files.edit", $producto->id)}}" class="btn btn-primary  mt-5">
                Editar Fotos del producto
            </a>

            {{-- <form action="{{route("admin.medidasproductos.create", $producto->id)}}" method="post">
                <button class="btn btn-primary  mt-5"> Editar medidas del producto</button>
            </form> --}}
            
            <a href="{{route("admin.medidasproducto.crear", $producto->id)}}" class="btn btn-success mt-5">
                Editar medidas del producto
            </a>
          
        </x-nav-acciones>
    </x-jet-welcome>
    
    

    
</x-app-layout>  




