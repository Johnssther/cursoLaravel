@extends('menu')
    @section('contenido')
    <body>
    <h1> Factura:  {{$factura->id}}</h1>
    <h1> Consecutivo: {{$factura->numero_factura}}</h1>
    <h1> Usuario: {{ $factura->usuario->nombre_usuario}}</h1>
    <h1> Valor $: {{$factura->valor_factura}}</h1>
    <h1> Descuento %: {{$factura->descuento}}</h1>
    <h1> Fecha Emision: {{$factura->fecha_factura}}</h1>


         <form action="{{route('facturas.destroy',$factura->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" >Eliminar Usuario</button>
        </form>
        
        <br>

        <a href="{{route('facturas.index')}}">Ir a lista de Facturas</a>



        <section>
            @yield('contenido')
        </section> 
    
</body>
 @endsection