@extends('usuarios.menu_usuario')
    @section('contenido')
    <body>
        <h1>{{ $usuario->nombre_usuario }} {{ $usuario->apellido_usuario }}</h1>
        <ul>
            <li>Correo:  {{ $usuario->correo_usuario }}</li>
            @if ($usuario->telefono_usuario )
                <li>Telefono:  {{ $usuario->telefono_usuario }}</li>
            @endif
            @if ($usuario->telefono_usuario )
                <li>Dirección: {{ $usuario->direccion_usuario }}</li>
            @endif
        </ul>

        <br>

        <form action="{{route('usuarios.destroy',$usuario->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" >Eliminar Usuario</button>
        </form>
        
        <br>

        <a href="{{route('usuarios.index')}}">Ir a lista de usuarios</a>



        <section>
            @yield('contenido')
        </section>
    
</body>
 @endsection