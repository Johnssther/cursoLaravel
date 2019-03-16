@extends('usuarios.menu_usuario')
    @section('contenido')
        <h1>Editar Usuario</h1>
        <form action="{{route ('usuarios.update',$usuario->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
            <table>
                <tr>
                    <td>Nombre del Usuario</td>
                <td><input type="text" maxlength="5" name="nombre_usuario" value="{{$usuario->nombre_usuario}}" required></td>
                    
                </tr>
                <tr>
                    <td>Apellido del usuario</td>
                    <td><input type="text" maxlength="100" name="apellido_usuario" value="{{$usuario->apellido_usuario}}" required></td>
                </tr>
                <tr>
                    <td>Correo Electronico</td>
                    <td><input type="mail" name="correo_usuario" value="{{$usuario->correo_usuario}}"></td>
                </tr>
                <tr>
                    <td>Numero de Telefono</td>
                    <td><input type="number" name="telefono_usuario" value="{{$usuario->telefono_usuario}}"></td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><input type="text" name="direccion_usuario" value="{{$usuario->direccion_usuario}}"></td>
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