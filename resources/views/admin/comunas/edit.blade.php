@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')
    
<title>@yield('title','Paletstilo - Comunas')</title>

@section('pagina')
    <h1>Editar Comunas</h1>
@endsection

@section('formulario')
    
   
    <strong>{{ $mensaje ?? " "}} </strong>
    <form action=" {{ route('admin.comunas.update', $comuna) }}" method="post">
        {{-- para poder mandar un formulario hay que generar el token --}}
        @csrf
        @method('put')

         {{-- select de la region --}}
         <select name="idProvince" id="provincia">
            {{-- <option value="">Selecciones una región</option> --}}
            <option value="{{ $nameProvincia->id }}">{{ $nameProvincia->name }}</option>

            @foreach ($provincias as $provincia)
                <option value="{{ $provincia->id }}">{{ $provincia->name }}</option>
            @endforeach

        </select> <br>  

        <input type="text" name="name" id="name" 
        placeholder="ingresar la comunas" value="{{ old('name', $comuna->name)}}"><br>

        @error('name')
            <br>
            <small> {{ $message}} </small>
            <br>        
        @enderror

        <button>Editar comuna</button>
    </form>

    <a href=" {{ route('admin.comunas.index') }} ">Ver todas las comunas</a>
    
@endsection