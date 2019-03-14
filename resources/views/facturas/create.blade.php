@extends('menu')
    @section('contenido')
        <h1>Formulario creacion Factura</h1>
        <form action="{{route ('facturas.store')}}" method="POST">
            {{csrf_field()}}
            <table>
                <tr>
                    <td>Numero de Factura</td>
                    <td><input type="number" maxlength="5" name="numero_factura"></td>
                    
                </tr>
                <tr>
                    <td>Nombre del Usuario</td>
                    <td><input type="text" maxlength="100" name="nombre_usuario"></td>
                </tr>
                <tr>
                    <td>Valor</td>
                    <td><input type="number" name="valor_factura"></td>
                </tr>
                <tr>
                    <td>Descuento</td>
                    <td><input type="number" name="descuento"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Generar Factura"></td>
                </tr>
            </table>
        </form>
    @endsection
    {{-- 
        numero de factura
        nombre cliente
        valor
        descuento
        --}}