@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')
    
<title>@yield('title','Paletstilo - Provincias')</title>

@section('pagina')
    <h1>Crear Provincia</h1>
@endsection

@section('formulario')

    <strong>{{ $mensaje ?? " "}} </strong>
    <form action=" {{ route('admin.provincias.store') }}" method="post">
        {{-- para poder mandar un formulario hay que generar el token --}}
        @csrf

        {{-- select de la region --}}
        <select name="idRegion" id="region">
            <option value="">Selecciones una región</option>

            @foreach ($regiones as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach

        </select> <br>  
        @error('idRegion')
            <br>  
            <small> {{ $message}} </small>
            <br>        
        @enderror

        <input type="text" name="name" placeholder="nombrar la provincia" id="name"
         value="{{ old('name') }}"><br>
        @error('name')
           
            <small> {{ $message}} </small>
            <br>        
        @enderror
    
        <button>Enviar</button>
    </form>

    <a href=" {{ route('admin.provincias.index') }} ">Ver todas las provincias</a>
    
@endsection