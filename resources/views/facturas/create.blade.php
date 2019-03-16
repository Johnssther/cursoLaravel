@extends('menu')
    @section('contenido')
        <h1>Formulario creacion Factura</h1>
        <form action="{{route ('facturas.store')}}" method="POST">
            {{csrf_field()}}

            <table>
                <tr>
                    <td>Numero de Factura</td>
                    <td><input type="number" maxlength="5" name="numero_factura" required></td>
                    
                </tr>
                <tr>
                    <td>Usuario</td>
                    <td>
                        <select name="id_usuario">
                            <option value="0">Seleccione    </option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombre_usuario}} {{$usuario->apellido_usuario}}</option>
                        @endforeach
                    </select>
                    </td>
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