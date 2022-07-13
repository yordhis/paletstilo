<x-app-layout>
    @php
        $mensaje = $_GET['mensaje'] ?? null != null ? $_GET['mensaje'] : null;
        $color = $_GET['color'] ?? null != null ? $_GET['color'] : null;
    @endphp
 
    <x-jet-welcome> 
            @isset($mensaje)
                <x-alert :color="$color">
                    <x-slot name="title">
                        {{$mensaje ?? $_GET['mensaje']}}
                    </x-slot>
                </x-alert>
            @endisset

            <div>
                <h1 class="block h-12 w-auto">
                    <i class="bi bi-layers"></i>
                    Categorias
                </h1>
            </div>

            {{-- Boton de crear --}}
            <div class="mt-8 text-2xl">
                <a href="{{route('admin.categorias.create')}}" class="btn btn-primary">Agregar Categoria</a>
            
            </div>
        
            <div class="mt-6 text-gray-500">

                <x-table>
                        <x-slot name="headTable"> 
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>Eslogan</th>
                                    <th>Estatus</th>
                                    <th >Acciones</th>
                                </tr>
                        </x-slot>
                        @php
                            $pagina = $_GET['page'] ?? 1;
                            $catidadElementos = $_GET['count'] ?? 1;
                            
                            $i= $pagina == 1 ? 1 : $catidadElementos + 1;
                        @endphp
                        <x-slot name="bodyTable">

                       
                            @foreach ($categorias as $categoria)
                                <tr>
                                    <td>{{$i++}}</td>

                                    <td>
                                        {{$categoria->name}} <br>
                                        @if ($categoria->image)
                                            
                                            <img src="{{env('APP_URL').$categoria->image}}" height="150" width="150" alt="imagen">
                                        @endif
                                    </td>
                                    <td>
                                        {{$categoria->eslogan}} 
                                    </td>
                                    <td>
                                        {{$categoria->estatus}} 
                                    </td>
                                  
                                    
                                    <td>
                                        <ul class="list-group list-group-horizontal">

                                            <li class="list-group-item text-white fs-6 ">
                                                <a href="{{route('admin.categorias.edit', $categoria)}}" class="btn btn-warning">Editar</a> 
                                            </li>
                                    
                                       

                                            <li class="list-group-item text-white fs-6">
                                                <form action="{{ route('admin.categorias.destroy', $categoria) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </li>
                                        
                                        </ul>
                                    </td>
                                    
                                </tr>
                            @endforeach
                            {{ $categorias->onEachSide(3)->links() }}
                        </x-slot>


                </x-table>
            </div>       

    </x-jet-welcome>  
</x-app-layout>


