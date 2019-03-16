<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Facturacion Curso Laravel</title>
    </head>
    <style>
        body {
            color: red;
        }
    </style>
    <body>
        <h1>Menu Usuario</h1>
        <ul>
            <li><a href="{{route('home')}}" title="Regresar al Inicio"> Ir al Home</a></li>
            <li><a href="{{route('usuarios.index')}}" title="Lista de Facturas"> Lista de Usuarios</a></li>
            <li><a href="{{route('usuarios.create')}}" title="Crear Nueva Factura"> Crear Nuevo Usuario</a></li>
        </ul>



        <section>
            @yield('contenido')
        </section>
    
</body>
</html>