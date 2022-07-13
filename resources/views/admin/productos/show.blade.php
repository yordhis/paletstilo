@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

<title>@yield('title','Paletstilo - Productos')</title>

@section('pagina')
    <h1>Detalles del Producto</h1>
@endsection

@section('show')

    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Url amigable</td>
            <td>Precio</td>
            <td>Medidas</td>
            <td>Descripción</td>
            <td>Categoria</td>
            <td>Estatus de disponibilidad</td>
            <td>Creado</td>
            <td>Actualizado</td>
        </tr>
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->name }}</td>
            <td>{{ $producto->slug }}</td>
            <td>{{ $producto->price }}</td>
            <td>{{ $producto->measure }}</td>
            <td>{{ $producto->description }}</td>
            <td>{{ $producto->available }}</td>
            <td>{{ $producto->idCategorie }}</td>
            <td>{{ $producto->created_at }}</td>
            <td>{{ $producto->updated_at }}</td>
            
        </tr>
    </table>

    <a href=" {{ route('admin.productos.index') }} ">Ver todas las provincias</a>
    
@endsection

{{-- 
    'name',
        'img',
        'slug',
        'price',
        'available',
        'measure',
        'description',
        'idCategorie'
    --}}