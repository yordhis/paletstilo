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
                Creando un producto
            </h1>
        </div>

        <x-form>
            
            <x-slot name="route">
                {{route("admin.productos.store")}}

            </x-slot>  

            <x-slot name="method">
                {{'POST'}}
            </x-slot>   

            <x-slot name="inputs">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="name">Nombre del producto</label>
                        <input type="text" class="form-control" placeholder="Ejemplo: Sillón Premium" name="name" value="{{ old('name', $producto->name ?? '') }}" required>
                        @error('name')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                    <div class="col">
                        <label for="categoria">Categoria</label>
                        <select name="idCategorie" id="categoria" class="form-control">
                            <option value="">Selecciones una categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                
                            @endforeach
                        </select>
                        @error('idCategorie')
                            <small class="text-danger"> {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                  
                    <div class="col">
                        <label for="price">Precio</label>
                        <input type="text" class="form-control" placeholder="Ejemplo: 1.000CLP" value="{{ old('price',$producto->price ?? '') }}" name="price">
                        @error('price')
                            <small class="text-danger"> {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>
                </div>

                
                
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary">Guardar producto y continuar</button>
                    </div>
                </div>
            </x-slot>   

        </x-form>

        {{-- navegacion de las acciones --}}

        <x-nav-acciones>
            <a href="{{route("admin.productos.index")}}" class="btn btn-secondary  mt-5">
                Volver
            </a>

            <x-modal color="danger">
                <x-slot name="nameBoton">
                    <i class="bi bi-palette"></i>
                    <b>Eliminar Categoria</b>
                </x-slot>

                <x-slot name="myModal">
                    eliminarCategoriaModal
                </x-slot>

                <x-slot name="title">
                    Eliminando Categoria
                </x-slot>
           
             
                <x-table class="col-4">
                    <x-slot name="headTable"> 
                            <tr>
                                <th>N°</th>
                                <th>Nombre</th>
                                <th >Acciones</th>
                            </tr>
                    </x-slot>
                    @php
                        
                        $i=  1;
                    @endphp
                    <x-slot name="bodyTable">

                   
                        @foreach ($categoriasPaginadas as $categoriasPaginada)
                            <tr>
                                <td>{{$i++}}</td>

                                <td>
                                    {{$categoriasPaginada->name}} 
                                </td>
                                
                              
                                
                                <td>
                                    <ul class="list-group list-group-horizontal">

                                        <li class="list-group-item text-white fs-6 ">
                                            <a href="{{route('admin.categorias.edit', $categoriasPaginada)}}" class="btn btn-warning"><i class="bi bi-pencil"></i></a> 
                                        </li>
                                
                                   

                                        <li class="list-group-item text-white fs-6">
                                            <form action="{{ route('admin.categorias.destroy', $categoriasPaginada) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="modal" value="active">
                                                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </li>
                                    
                                    </ul>
                                </td>
                                
                            </tr>
                        @endforeach
                       
                    </x-slot>


                </x-table>
                
            </x-modal>
            
            <x-modal color="warning">
                <x-slot name="nameBoton">
                    <i class="bi bi-palette"></i>
                    <b>Agregar Categoria</b>
                </x-slot>

                <x-slot name="myModal">
                    categoriaModal
                </x-slot>

                <x-slot name="title">
                    Nueva Categoria
                </x-slot>

                

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
                                <input type="text" class="form-control" placeholder="Ejemplo: Terrazas" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <small class="text-danger" > {{ $message}} </small>
                                    <br>        
                                @enderror
                            </div>
                           
                            <div class="col-6">
                                <label for="eslogan">Frace o eslogan</label>
                                <input type="text" class="form-control" max="25" placeholder="Ejemplo: Lo mejor para tu terraza" name="eslogan" value="{{ old('eslogan') }}">
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
                        
                        <input type="hidden" name="modal" value="active">
                        
                        <div class="row">
                            <div class="col mt-2">
                                <button class="btn btn-primary">Guardar Categoria</button>
                            </div>
                        </div>
                    </x-slot>   
        
                </x-form>
                
            </x-modal>
           
        
          
        </x-nav-acciones>


      
        
    </x-jet-welcome>
    
    
   
</x-app-layout>  

