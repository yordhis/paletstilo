@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

    
<title>@yield('title','Paletstilo - Provincias')</title>

@section('pagina')
    <h1>Provincias</h1>
@endsection

@section('create')

    <a href="{{ route('admin.provincias.create') }}">Crear provincia</a>
@endsection


@section('table')
    <table>
        <tr>
            <td>N°</td>
            <td>Nombre</td>
            <td>Acciones</td>
        </tr>
        @foreach ($provincias as $provincia)
            
        <tr>
            <td> {{$provincia->id}} </td>
            <td> {{$provincia->name}} </td>
            <td>
                <a href="{{ route('admin.provincias.edit', $provincia) }}">Editar</a>
            </td>
            <td>
                <form action="{{ route('admin.provincias.destroy', $provincia) }}" method="post">
                    @csrf
                    @method('delete')
                       <button>Eliminar</button>
                    </form>
            </td>

            <td>
                <a href="{{ route('admin.provincias.show', $provincia) }}">Ver mas...</a>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection


