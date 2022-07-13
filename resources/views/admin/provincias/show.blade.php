@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

<title>@yield('title','Paletstilo - Provincias')</title>

@section('pagina')
    <h1>Detalles de la Provincia</h1>
@endsection

@section('show')

    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Url amigable</td>
            <td>Región</td>
            <td>Creado</td>
            <td>Actualizado</td>
        </tr>
        <tr>
            <td>{{ $provincia->id }}</td>
            <td>{{ $provincia->name }}</td>
            <td>{{ $provincia->slug }}</td>
            <td>{{ $provincia->idRegion }}</td>
            <td>{{ $provincia->created_at }}</td>
            <td>{{ $provincia->updated_at }}</td>
            
        </tr>
    </table>

    <a href=" {{ route('admin.provincias.index') }} ">Ver todas las provincias</a>
    
@endsection