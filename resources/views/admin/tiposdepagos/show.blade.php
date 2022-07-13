@extends('admin.layouts.categoria')
@extends('admin.layouts.admin')

<title>@yield('title','Paletstilo - Provincias')</title>

@section('pagina')
    <h1>Detalles de los tipos de pago</h1>
@endsection

@section('show')

    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Url amigable</td>
            <td>titular</td>
            <td>Numero de cuenta</td>
            <td>Identificación (Card)</td>
            <td>E-mail</td>
            <td>Creado</td>
            <td>Editado</td>
        </tr>
        <tr>
            <td>{{ $tiposdepago->id }}</td>
            <td>{{ $tiposdepago->name }}</td>
            <td>{{ $tiposdepago->slug }}</td>
            <td>{{ $tiposdepago->titular }}</td>
            <td>{{ $tiposdepago->accountNumber }}</td>
            <td>{{ $tiposdepago->idCard }}</td>
            <td>{{ $tiposdepago->email }}</td>
            <td>{{ $tiposdepago->created_at }}</td>
            <td>{{ $tiposdepago->updated_at }}</td>
            
        </tr>
    </table>

    <a href=" {{ route('admin.tiposdepagos.index') }} ">Ver todas las tipos de pagos</a>
    
@endsection
{{-- 
    
    'titular',
    'accountNumber',
    'idCard',
    'email'
    --}}