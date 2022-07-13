@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')
    
<title>@yield('title','Paletstilo - comunas')</title>

@section('pagina')
    <h1>Crear Comuna</h1>
@endsection

@section('formulario')

    <strong>{{ $mensaje ?? " "}} </strong>
    <form action=" {{ route('admin.comunas.store') }}" method="post">
        {{-- para poder mandar un formulario hay que generar el token --}}
        @csrf

        {{-- select de la provincia --}}
        <select name="idProvince" id="provincia">
            <option value="">Selecciones una provincia</option>

            @foreach ($provincias as $provincia)
                <option value="{{ $provincia->id }}">{{ $provincia->name }}</option>
            @endforeach

        </select> <br>  
        @error('idProvince')
            <br>  
            <small> {{ $message}} </small>
            <br>        
        @enderror

        <input type="text" name="name" placeholder="Ingrese la comuna" id="name"
         value="{{ old('name') }}"><br>
        @error('name')
           
            <small> {{ $message}} </small>
            <br>        
        @enderror
    
        <button>Registrar comuna</button>
    </form>

    <a href=" {{ route('admin.comunas.index') }} ">Ver todas las comunas</a>
    
@endsection