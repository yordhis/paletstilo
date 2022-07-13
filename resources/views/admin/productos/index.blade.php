<x-app-layout>

 
    <x-jet-welcome> 
            @isset($mensaje)
                <x-alert :color="$color">
                    <x-slot name="title">
                        {{$mensaje}}
                    </x-slot>
                </x-alert>
            @endisset

            <div>
                <h1 class="block h-12 w-auto">
                    <i class="bi bi-box-seam"></i>
                    Productos
                </h1>
            </div>

            {{-- Boton de crear --}}
            <div class="mt-8 text-2xl">
                <a href="{{route('admin.productos.create')}}" class="btn btn-primary">Agregar producto</a>
            
            </div>
        
            <div class="mt-6 text-gray-500">

                <x-table>
                        <x-slot name="headTable"> 
                                <tr>
                                    <th>N°</th>
                                    <th>Producto</th>
                                    <th>Información</th>
                                    <th>Precio</th>
                                    <th>Disponible</th>
                                    <th colspan="2" class="text-center">Acciones</th>
                                </tr>
                        </x-slot>
                        @php
                           
                            $v=  $productos->firstItem();
                            
                        @endphp
                        <x-slot name="bodyTable">
                            @foreach ($productos as $producto)
                                <tr>
                                 
                                    <td>{{$v++}}</td>
                                    

                                    <td>
                                        {{$producto->name}} <br>
                                        @php
                                            $i=0;
                                        @endphp
                                        @foreach ($producto->image as $imagen)
                                            @if ($i == 0)
                                            @php $i++; @endphp
                                                <img src="{{ env('APP_URL').$imagen->url}}" class="" alt="img" height="100" width="120" alt="imagen del producto">
                                            @endif
                                        @endforeach
                                    </td>

                                    <td>
                                        <ul>
                                            <li>Categoria: {{$producto->categoria}}</li>
                                            @foreach ($producto->medidasproductos as $medidasproducto)
                                            
                                                <li>{{$medidasproducto->medida->name}}: 
                                                   {{
                                                       $medidasproducto->medida->largo . 'x' .
                                                       $medidasproducto->medida->ancho . 'x' .
                                                       $medidasproducto->medida->alto 
                                                   }}
                                                </li>
                                            
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <strong>{{$producto->price}}</strong>
                                    </td>
                                    <td>
                                        @if($producto->available != 0)
                                        <strong class="text-success">En Stock</strong> 
                                        @else
                                            <strong class="text-danger">Stock Agotado</strong> 
                                        @endif
                                    </td>
                                    <td>
                                        <ul class="group-inline">

                                            <li class="fs-6">
                                                <a href="{{route('admin.productos.edit', $producto)}}" class="btn btn-warning">Editar</a> 
                                            </li>
                                    
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="nav">

                                            <li class="fs-6">
                                                <form action="{{ route('admin.productos.destroy', $producto) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </li>
                                        
                                        </ul>
                                    </td>
                                 
                                </tr>
                            @endforeach
                            {{ $productos->links() }}
                        </x-slot>


                </x-table>
            </div>       

    </x-jet-welcome>  
</x-app-layout>


