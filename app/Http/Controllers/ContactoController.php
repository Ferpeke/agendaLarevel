<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Contacto;
use App\Models\ContactosListado;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listado = ContactosListado::all();
        return view('contactos/inicio', compact('listado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('contactos/agregar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $contacto = new Contacto();
        $contacto->id_categoria = $request->post('categoria');
        $contacto->nombre = $request->post('nombre');
        $contacto->paterno  = $request->post('apellidoPaterno');
        $contacto->materno = $request->post('apellidoMaterno');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('correo');
        $contacto->save();
        return redirect()->route('contactos.index')->with('success', '¡Agregado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $contacto = ContactosListado::find($id);
        return view('contactos/eliminar', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contacto = Contacto::find($id);
        $categorias = Categoria::all();
        return view('contactos/editar', compact('contacto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $contacto = Contacto::find($id);
        $contacto->id_categoria = $request->post('categoria');
        $contacto->nombre = $request->post('nombre');
        $contacto->paterno  = $request->post('apellidoPaterno');
        $contacto->materno = $request->post('apellidoMaterno');
        $contacto->telefono = $request->post('telefono');
        $contacto->email = $request->post('correo');
        $contacto->save();
        return redirect()->route('contactos.index')->with('success', '¡Actualizado con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect()->route('contactos.index')->with('success', 'Eliminado con exito');
    }
}
