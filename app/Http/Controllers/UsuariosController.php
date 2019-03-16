<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::get();
        return view('usuarios.lista',['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario;
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->apellido_usuario = $request->apellido_usuario;
        $usuario->correo_usuario = $request->correo_usuario;
        $usuario->telefono_usuario = $request->telefono_usuario;
        $usuario->direccion_usuario = $request->direccion_usuario;
        $usuario->save();
        return redirect()->route('usuarios.index');
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
        $usuario = Usuario::find($id);
        return view('usuarios.show',['usuario'=>$usuario]);
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit',['usuario'=>$usuario]);
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
        $usuario = Usuario::find($id);
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->apellido_usuario = $request->apellido_usuario;
        $usuario->correo_usuario = $request->correo_usuario;
        $usuario->telefono_usuario = $request->telefono_usuario;
        $usuario->direccion_usuario = $request->direccion_usuario;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect()->route('usuarios.index');
        dd('Eliminando', $id);
    }
}
