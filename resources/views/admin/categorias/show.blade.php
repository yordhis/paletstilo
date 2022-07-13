@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

<title>@yield('title','Paletstilo - Categorias')</title>

@section('pagina')
    <h1>Detalles de la Categoria</h1>
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
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->name }}</td>
            <td>{{ $categoria->slug }}</td>
            <td>{{ $categoria->created_at }}</td>
            <td>{{ $categoria->updated_at }}</td>
            
        </tr>
    </table>

    <a href=" {{ route('admin.categorias.index') }} ">Ver todas las categorias</a>
    
@endsection