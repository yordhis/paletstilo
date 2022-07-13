
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
                   Regiones
                </h1>
            </div>

            {{-- Boton de crear --}}
            <div class="mt-8 text-2xl">
                <a href="{{route('admin.regiones.create')}}" class="btn btn-primary">Configurar tipo de pago</a>
            
            </div>
        
            <div class="mt-6 text-gray-500">
                @if (!empty($regiones))
                    
                    <x-table>
                            <x-slot name="headTable"> 
                                    <tr>
                                        <td>N°</td>
                                        <td>Nombre</td>
                                        <td>Acciones</td>
                                    </tr>
                            </x-slot>
                            @php
                                $i= $regiones->firstItem();
                            @endphp
                            <x-slot name="bodyTable">

                        
                                @foreach ($regiones as $region)
                                    <tr>
                                        <td>{{$i++}}</td>

                                        <td>
                                            {{$region->name}} <br>
                                        </td>                                   
                                        
                                        <td>
                                            <ul class="list-group list-group-horizontal">

                                                <li class="list-group-item text-white fs-6 ">
                                                    <a href="{{route('admin.regiones.edit', $region)}}" class="btn btn-warning">Editar</a> 
                                                </li>
                                        
                                        

                                                <li class="list-group-item text-white fs-6">
                                                    <form action="{{ route('admin.regiones.destroy', $region) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </li>
                                            
                                            </ul>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                {{ $regiones->links() }}
                            </x-slot>


                    </x-table>
                @else
                    <div class="col-12 rounded bg-gray-200 text-center text-primary">

                        <p>
                            {{'No hay regiones registradas.'}}
                        </p> 
                        <p class="text-warning">
                            {{'Por favor haga clic en agregar región'}}
                        </p> 
                    </div>

                @endif
            </div>       

    </x-jet-welcome>  
</x-app-layout>

{{-- @extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

    
<title>@yield('title','Paletstilo - Regiones')</title>

@section('pagina')
    <h1>Regiones</h1>
@endsection

@section('create')

    <a href="{{ route('admin.regiones.create') }}">Crear región</a>
@endsection


@section('table')
    <table>
        <tr>
            <td>N°</td>
            <td>Nombre</td>
            <td>Acciones</td>
        </tr>
        @foreach ($regiones as $region)
            
        <tr>
            <td> {{$region->id}} </td>
            <td> {{$region->name}} </td>
            <td>
                <a href="{{ route('admin.regiones.edit', $region) }}">Editar</a>
            </td>
            <td>
                <form action="{{ route('admin.regiones.destroy', $region) }}" method="post">
                    @csrf
                    @method('delete')
                       <button>Eliminar</button>
                    </form>
            </td>

            <td>
                <a href="{{ route('admin.regiones.show', $region) }}">Ver mas...</a>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection --}}


