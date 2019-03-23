@extends('menu')
    @section('contenido')
    <h1>Lista de Facturas</h1>
    <div>
        <table border="1" class="table">
            <tr>
                <th>numero_factura</th>
                <th>id_usuario</th>
                <th>valor_factura</th>
                <th>descuento</th>
                <th>fecha_factura</th>
                <th colspan="2"></th>
            </tr>
            <tr>
            @foreach ($facturas as $factura)
                <th>{{ $factura->numero_factura }}</th>
                <th>{{ $factura->usuario->nombre_usuario}}</th>
                <th>{{ $factura->valor_factura }}</th>
                <th>{{ $factura->descuento }}</th>
                <th>{{ $factura->fecha_factura }}</th>
                <th><a href="{{route('facturas.show',$factura->id)}}">Ver Factura</a></th>
                <th><a href="{{route('facturas.edit',$factura->id)}}">Editar</a></th>
        </tr>
            @endforeach
        </table>
    </div>
    @endsection