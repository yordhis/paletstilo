@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

<title>@yield('title','Paletstilo - Regiones')</title>


@section('pagina')
    <h1>Detalles de la Region</h1>
@endsection

@section('show')

    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Url amigable</td>
            <td>Creado</td>
            <td>Actualizado</td>
        </tr>
        <tr>
            <td>{{ $region->id }}</td>
            <td>{{ $region->name }}</td>
            <td>{{ $region->slug }}</td>
            <td>{{ $region->created_at }}</td>
            <td>{{ $region->updated_at }}</td>
            
        </tr>
    </table>

    <a href=" {{ route('admin.regiones.index') }} ">Ver todas las regiones</a>
    
@endsection