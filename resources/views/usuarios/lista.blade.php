<style>
    .table {
        font-family: Arial, Helvetica, sans-serif;
        border:
    }
</style>
@extends('usuarios.menu_usuario')
    @section('contenido')
        <h1>Lista de usuarios</h1>
        <div>
            <table border="1" class="table">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th colspan="2"></th>
                </tr>
                <tr>
                @foreach ($usuarios as $usuario)
                    <th>{{ $usuario->id }}</th>
                    <th>{{ $usuario->nombre_usuario }}</th>
                    <th>{{ $usuario->apellido_usuario }}</th>
                    <th>{{ $usuario->correo_usuario }}</th>
                    <th><a href="{{route('usuarios.show',$usuario->id)}}">Ver Usuario</a></th>
                    <th><a href="{{route('usuarios.edit',$usuario->id)}}">Editar</a></th>
            </tr>
                @endforeach
            </table>
        </div>
    @endsection