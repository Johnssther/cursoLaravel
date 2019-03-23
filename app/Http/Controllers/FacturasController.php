<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Factura;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::get();
        return view('facturas.lista',['facturas'=>$facturas]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = Usuario::get();
        return view('facturas.create',['usuarios'=>$usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura;
        $factura->numero_factura = $request->numero_factura;
        $factura->id_usuario = $request->id_usuario;
        $factura->valor_factura = $request->valor_factura;
        $factura->descuento = $request->descuento;
        $factura->fecha_factura = $request->fecha_factura;
        $factura->save();
        return redirect()->route('facturas.index');
        dd('Datos Guardados');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $factura = Factura::find($id);
        return view('facturas.show',['factura'=>$factura]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarios = Usuario::get();
        $factura = Factura::find($id);
        return view('facturas.edit',['factura'=>$factura, 'usuarios'=>$usuarios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $factura = Factura::find($id);
        $factura->numero_factura = $request->numero_factura;
        $factura->id_usuario = $request->id_usuario;
        $factura->valor_factura = $request->valor_factura;
        $factura->descuento = $request->descuento;
        $factura->save();
        return redirect()->route('facturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Factura::destroy($id);
        return redirect()->route('facturas.index');
        dd('Eliminando', $id);
    }
}
