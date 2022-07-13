@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')
    
<title>@yield('title','Paletstilo - Regiones')</title>

@section('pagina')
    <h1>Editar Region</h1>
@endsection

@section('formulario')
    
  
    <strong>{{ $mensaje ?? " "}} </strong>
    <form action=" {{ route('admin.regiones.update', $region) }}" method="post">
        {{-- para poder mandar un formulario hay que generar el token --}}
        @csrf
        @method('put')
        <input type="text" name="name" id="name" 
        placeholder="nombrar la regiones" value="{{ old('name', $region->name)}}"><br>

        @error('name')
            <br>
            <small> {{ $message}} </small>
            <br>        
        @enderror

        <button>Enviar</button>
    </form>

    <a href=" {{ route('admin.regiones.index') }} ">Ver todas las regiones</a>
    
@endsection