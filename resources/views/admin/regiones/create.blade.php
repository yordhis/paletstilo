
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
                <i class="bi bi-geo-alt"></i>
               Agregando región
            </h1>
        </div>

        
        <x-form>
            
            <x-slot name="route">
                {{route("admin.regiones.store")}}

            </x-slot>  

            <x-slot name="method">
                {{'POST'}}
            </x-slot>   

            <x-slot name="inputs">
                @csrf
                <div class="row">
                   
                    <div class="col-12 col-sm-6">
                        <label for="name">Nombre de la región</label>
                        <input type="text" class="form-control" leng="50" placeholder="Ejemplo: Metropoli" name="name" value="{{ old('name', $region->name ?? '') }}">
                        @error('name')
                            <small class="text-danger" > {{ $message}} </small>
                            <br>        
                        @enderror
                    </div>

                </div>

                
                
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary">Guardar Configuración de tipo de pago</button>
                    </div>
                </div>
            </x-slot>   

        </x-form>
      

        {{-- navegacion de las acciones --}}

        <x-nav-acciones>
            <a href="{{route("admin.regiones.index")}}" class="btn btn-secondary  mt-5">
                Volver
            </a>
        </x-nav-acciones>
        
    </x-jet-welcome>

</x-app-layout>  


{{-- @extends('admin.layouts.categoria')
@extends('admin.layouts.admin')
    
<title>@yield('title','Paletstilo - Regiones')</title>

@section('pagina')
    <h1>Crear Region</h1>
@endsection

@section('formulario')
    
    
    <strong>{{ $mensaje ?? " "}} </strong>
    <form action=" {{ route('admin.regiones.store') }}" method="post">

        @csrf
        <input type="text" name="name" placeholder="nombrar la región" id="name"
         value="{{ old('name') }}"><br>
        @error('name')
            <br>
            <small> {{ $message}} </small>
            <br>        
        @enderror
    
        <button>Enviar</button>
    </form>

    <a href=" {{ route('admin.regiones.index') }} ">Ver todas las regiones</a>
    
@endsection --}}