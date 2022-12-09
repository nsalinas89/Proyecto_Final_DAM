<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use App\Http\Request\EventosRequest;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Evento::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventosRequest $request)
    {
        //dd($request->cod_evento);
        $evento = new Evento();
        $evento -> cod_evento = $request->cod_evento;
        $evento -> nombre_evento = $request->nombre_evento;
        $evento -> lugar_evento = $request->lugar_evento;
        $evento -> fecha_evento = $request->fecha_evento;
        $evento -> hora_evento = $request->hora_evento;
        $evento -> precio = $request->precio;
        $evento->save();
        //return response()->json([
          //  "status"=>1, 
           // "message"=>"datos ingresados"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return $evento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        $evento -> cod_evento = $request->cod_evento;
        $evento -> nombre_evento = $request->nombre_evento;
        $evento -> lugar_evento = $request->lugar_evento;
        $evento -> fecha_evento = $request->fecha_evento;
        $evento -> hora_evento = $request->hora_evento;
        $evento -> precio = $request->precio;

        $evento->save();
        return $evento;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
    }
}
