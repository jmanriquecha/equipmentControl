<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajo;
use App\Models\Equipo;
use Carbon\Carbon;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = new Carbon;
        $trabajos = Trabajo::orderByDesc('fecha')->paginate(10);
        return view('trabajos.index', compact('trabajos', 'date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::all();
        return view('trabajos.create', compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trabajo = new Trabajo;
        $trabajo->equipo_id = $request->equipo_id;
        $trabajo->fecha = $request->fecha;
        $trabajo->horaInicio = $request->horaInicio;
        $trabajo->horaFin = $request->horaFin;
        $trabajo->observacion = $request->observacion;

        $trabajo->save();
        return redirect('trabajos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = new Carbon;
        $trabajo = Trabajo::find($id);
        return view('trabajos.show', compact('trabajo', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trabajo = Trabajo::find($id);
        $equipos = Equipo::all();
        return view('trabajos.edit', compact('trabajo', 'equipos'));
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
        $trabajo = Trabajo::find($id);
        $trabajo->equipo_id = $request->equipo_id;
        $trabajo->fecha = $request->fecha;
        $trabajo->horaInicio = $request->horaInicio;
        $trabajo->horaFin = $request->horaFin;
        $trabajo->observacion = $request->observacion;
        $trabajo->update();
        return redirect('trabajos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabajo = Trabajo::find($id)->delete();
        return redirect('trabajos');
    }
}
