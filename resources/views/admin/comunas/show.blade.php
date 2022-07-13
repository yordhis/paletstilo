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
            <td>Pertenece a la provincia</td>
            <td>Creado</td>
            <td>Actualizado</td>
        </tr>
        <tr>
            <td>{{ $comuna->id }}</td>
            <td>{{ $comuna->name }}</td>
            <td>{{ $comuna->slug }}</td>
            <td>{{ $comuna->idProvince }}</td>
            <td>{{ $comuna->created_at }}</td>
            <td>{{ $comuna->updated_at }}</td>
            
        </tr>
    </table>

    <a href=" {{ route('admin.comunas.index') }} ">Ver todas las comunas</a>
    
@endsection