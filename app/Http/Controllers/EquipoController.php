<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Marca;
use App\Models\Tipo;
use App\Models\Trabajo;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::paginate(5);
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $tipos = Tipo::all();
        return view('equipos.create', compact('marcas', 'tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Equipo $equipo)
    {
        $equipo->marca_id = $request->marca_id;
        $equipo->tipo_id = $request->tipo_id;
        $equipo->modelo = $request->modelo;
        $equipo->serial = $request->serial;
        $equipo->observacion = $request->observacion;
        $equipo->save();

        return redirect('equipos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipo = Equipo::find($id);
        $trabajos = Equipo::find($id)->trabajos;

        return view('equipos.show', compact('equipo', 'trabajos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo = Equipo::find($id);
        $marcas = Marca::all();
        $tipos = Tipo::all();

        return view('equipos.edit', compact('equipo', 'marcas', 'tipos'));
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
        $equipo = Equipo::find($id);
        $equipo->marca_id = $request->marca_id;
        $equipo->tipo_id = $request->tipo_id;
        $equipo->modelo = $request->modelo;
        $equipo->serial = $request->serial;
        $equipo->observacion = $request->observacion;

        $equipo->update();
        return redirect('equipos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipo = Equipo::find($id)->delete();
        return ($equipo === true) ? redirect('equipos') : 'Se presento un error';
        
    }
}
