@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

<title>@yield('title','Paletstilo - Provincias')</title>

@section('pagina')
    <h1>Detalles de los tipos de pago</h1>
@endsection

@section('show')

    <table>
        <tr>
            <td>N°</td>
            <td>Comuna</td>
            <td>Valor del kilometro</td>
            <td>Diferencia de Km (cantidad)</td>
            <td>precio</td>
            <td>Creado</td>
            <td>Editado</td>
        </tr>
        <tr>
            <td>{{ $preciosdedespacho->id }}</td>
            <td>{{ $preciosdedespacho->idCommune }}</td>
            <td>{{ $preciosdedespacho->kmValue }}</td>
            <td>{{ $preciosdedespacho->kmDiference }}</td>
            <td>{{ $preciosdedespacho->price }}</td>
            <td>{{ $preciosdedespacho->created_at }}</td>
            <td>{{ $preciosdedespacho->updated_at }}</td>
            
        </tr>
    </table>

    <a href=" {{ route('admin.preciosdedespachos.index') }} ">Ver todos los precio de despachos</a>
    
@endsection

