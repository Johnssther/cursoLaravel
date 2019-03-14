<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Facturacion Curso Laravel</title>
    </head>
    <body>
        <h1>Menu Facturacion</h1>
        <ul>
            <li><a href="{{route('home')}}" title="Regresar al Inicio"> Ir al Home</a></li>
            <li><a href="{{route('facturas.index')}}" title="Lista de Facturas"> Lista de Facturas</a></li>
            <li><a href="{{route('facturas.create')}}" title="Crear Nueva Factura"> Crear Nueva de Factura</a></li>
        </ul>

        <section>
            @yield('contenido')
        </section>
    
</body>
</html>