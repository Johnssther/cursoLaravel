@extends('menu')
    @section('contenido')
        <h1>Formularioo Crear Usuarios</h1>
        <form action="{{route ('usuarios.store')}}" method="POST">
            {{csrf_field()}}
            <table>
                <tr>
                    <td>Nombre del Usuario</td>
                    <td><input type="text" maxlength="5" name="nombre_usuario" required></td>
                    
                </tr>
                <tr>
                    <td>Apellido del usuario</td>
                    <td><input type="text" maxlength="100" name="apellido_usuario" required></td>
                </tr>
                <tr>
                    <td>Correo Electronico</td>
                    <td><input type="mail" name="correo_usuario"></td>
                </tr>
                <tr>
                    <td>Numero de Telefono</td>
                    <td><input type="number" name="telefono_usuario"></td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><input type="text" name="direccion_usuario"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Registrar Usuario"></td>
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