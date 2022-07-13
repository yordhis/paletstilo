@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')
    
<title>@yield('title','Paletstilo - Provincias')</title>

@section('pagina')
    <h1>Editar Provincia</h1>
@endsection

@section('formulario')
    
   
    <strong>{{ $mensaje ?? " "}} </strong>
    <form action=" {{ route('admin.provincias.update', $provincia) }}" method="post">
        {{-- para poder mandar un formulario hay que generar el token --}}
        @csrf
        @method('put')

         {{-- select de la region --}}
         <select name="idRegion" id="region">
            {{-- <option value="">Selecciones una región</option> --}}
            <option value="{{ $nameRegion->id }}">{{ $nameRegion->name }}</option>

            @foreach ($regiones as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach

        </select> <br>  

        <input type="text" name="name" id="name" 
        placeholder="nombrar la provincias" value="{{ old('name', $provincia->name)}}"><br>

        @error('name')
            <br>
            <small> {{ $message}} </small>
            <br>        
        @enderror

        <button>Enviar</button>
    </form>

    <a href=" {{ route('admin.provincias.index') }} ">Ver todas las provincias</a>
    
@endsection