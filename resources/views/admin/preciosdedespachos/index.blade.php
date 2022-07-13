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
                    <i class="bi bi-signpost-2"></i>
                    Costos de despachos
                </h1>
            </div>

            {{-- Boton de crear --}}
            <div class="mt-8 text-2xl">
                <a href="{{route('admin.preciosdedespachos.create')}}" class="btn btn-primary">Configurar Costo de despacho</a>
            
            </div>
        
            <div class="mt-6 text-gray-500">
                @if (!empty($preciosdedespachos))
                    
                    <x-table>
                            <x-slot name="headTable"> 
                                    <tr>
                                        <td>N°</td>
                                        <td>Comuna</td>
                                        <td>Valor del kilometro</td>
                                        <td>Diferencia de Km (cantidad)</td>
                                        <td>precio</td>
                                        <td>Acciones</td>
                                    </tr>
                            </x-slot>
                            @php
                                $i= $preciosdedespachos->firstItem();
                            @endphp
                            <x-slot name="bodyTable">

                        
                                @foreach ($preciosdedespachos as $preciosdedespacho)
                                    <tr>
                                        <td>{{$i++}}</td>

                                        <td>
                                            {{$preciosdedespacho->comuna}} <br>
                                        </td>
                                        <td>
                                            {{$preciosdedespacho->kmValue}} 
                                        </td>
                                        <td>
                                            {{$preciosdedespacho->kmDiference}} 
                                        </td>
                                    
                                        <td>
                                            {{$preciosdedespacho->price}} 
                                        </td>
                                    
                                        
                                        <td>
                                            <ul class="list-group list-group-horizontal">

                                                <li class="list-group-item text-white fs-6 ">
                                                    <a href="{{route('admin.preciosdedespachos.edit', $preciosdedespacho)}}" class="btn btn-warning">Editar</a> 
                                                </li>
                                        
                                        

                                                <li class="list-group-item text-white fs-6">
                                                    <form action="{{ route('admin.preciosdedespachos.destroy', $preciosdedespacho) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </li>
                                            
                                            </ul>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                {{ $preciosdedespachos->onEachSide(3)->links() }}
                            </x-slot>


                    </x-table>
                @else
                    <div class="col-12 rounded bg-gray-200 text-center text-primary">

                        <p>
                            {{'No hay costos de despachos configurados.'}}
                        </p> 
                        <p class="text-warning">
                            {{'Por favor haga clic en configurar costo de despacho'}}
                        </p> 
                    </div>

                @endif
            </div>       

    </x-jet-welcome>  
</x-app-layout>





