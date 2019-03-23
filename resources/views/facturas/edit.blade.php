@extends('menu')
    @section('contenido')
        <h1>Editar Usuario</h1>
        <form action="{{route ('facturas.update',$factura->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
            <table>
               
                <tr>
                    <td>Id </td>
                    <td><input type="text" maxlength="100" name="numero_factura" value="{{$factura->id}}" disabled></td>
                </tr>
                <tr>
                    <td>Consecutivo </td>
                    <td><input type="text" maxlength="100" name="numero_factura" value="{{$factura->numero_factura}}" required></td>
                </tr>
                <tr>
                    <td>Usuario</td>
                    <td>
                        <select name="id_usuario" required>
                            <option value selected hidden>Seleccione</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{$usuario->id}}">{{$usuario->nombre_usuario}} {{$usuario->apellido_usuario}}</option>
                        @endforeach
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Valor $</td>
                    <td><input type="number" name="valor_factura" value="{{$factura->valor_factura}}"></td>
                </tr>
                <tr>
                    <td>Descuento %</td>
                    <td><input type="text" name="descuento" value="{{$factura->descuento}}"></td>
                </tr>
                <tr>
                    <td>Fecha Emision</td>
                    <td><input type="text" name="fecha_factura" value="{{$factura->fecha_factura}}" disabled></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Actualizar"></td>
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