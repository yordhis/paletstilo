@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

    
<title>@yield('title','Paletstilo - Comunas')</title>

@section('pagina')
    <h1>Comunas</h1>
@endsection

@section('create')

    <a href="{{ route('admin.comunas.create') }}">Crear comuna</a>
@endsection


@section('table')
    <table>
        <tr>
            <td>N°</td>
            <td>Nombre</td>
            <td>Acciones</td>
        </tr>
        @foreach ($comunas as $comuna)
            
        <tr>
            <td> {{$comuna->id}} </td>
            <td> {{$comuna->name}} </td>
            <td>
                <a href="{{ route('admin.comunas.edit', $comuna) }}">Editar</a>
            </td>
            <td>
                    <form action="{{ route('admin.comunas.destroy', $comuna) }}" method="post">
                        @csrf
                        @method('delete')
                        <button>Eliminar</button>
                    </form>
            </td>

            <td>
                <a href="{{ route('admin.comunas.show', $comuna) }}">Ver mas...</a>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection


