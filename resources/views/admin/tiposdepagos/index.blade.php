
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
                    <i class="bi bi-cash"></i>
                    Tipos de pagos
                </h1>
            </div>

            {{-- Boton de crear --}}
            <div class="mt-8 text-2xl">
                <a href="{{route('admin.tiposdepagos.create')}}" class="btn btn-primary">Configurar tipo de pago</a>
            
            </div>
        
            <div class="mt-6 text-gray-500">
                @if (!empty($tiposdepagos))
                    
                    <x-table>
                            <x-slot name="headTable"> 
                                    <tr>
                                        <td>N°</td>
                                        <td>Nombre</td>
                                        <td>Titular</td>
                                        <td>Numero de cuenta</td>
                                        <td>Identificacion (Id Card)</td>
                                        <td>E-mail</td>
                                        <td>Acciones</td>
                                    </tr>
                            </x-slot>
                            @php
                                $i= $tiposdepagos->firstItem();
                            @endphp
                            <x-slot name="bodyTable">

                        
                                @foreach ($tiposdepagos as $tiposdepago)
                                    <tr>
                                        <td>{{$i++}}</td>

                                        <td>
                                            {{$tiposdepago->name}} <br>
                                        </td>
                                        <td>
                                            {{$tiposdepago->titular}} 
                                        </td>
                                        <td>
                                            {{$tiposdepago->accountNumber}} 
                                        </td>
                                    
                                        <td>
                                            {{$tiposdepago->idCard}} 
                                        </td>
                                        <td>
                                            {{$tiposdepago->email}} 
                                        </td>
                                    
                                        
                                        <td>
                                            <ul class="list-group list-group-horizontal">

                                                <li class="list-group-item text-white fs-6 ">
                                                    <a href="{{route('admin.tiposdepagos.edit', $tiposdepago)}}" class="btn btn-warning">Editar</a> 
                                                </li>
                                        
                                        

                                                <li class="list-group-item text-white fs-6">
                                                    <form action="{{ route('admin.tiposdepagos.destroy', $tiposdepago) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </li>
                                            
                                            </ul>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                {{ $tiposdepagos->links() }}
                            </x-slot>


                    </x-table>
                @else
                    <div class="col-12 rounded bg-gray-200 text-center text-primary">

                        <p>
                            {{'No hay tipos de pagos configurados.'}}
                        </p> 
                        <p class="text-warning">
                            {{'Por favor haga clic en configurar tipo de pago'}}
                        </p> 
                    </div>

                @endif
            </div>       

    </x-jet-welcome>  
</x-app-layout>