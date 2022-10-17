<?php

namespace App\Http\Controllers\Actividad;

use App\Http\Controllers\Controller;
use App\Models\Actividad\ActividadParticipante;
use App\Http\Requests\Actividad\StoreActividadParticipanteRequest;
use App\Http\Requests\Actividad\UpdateActividadParticipanteRequest;

class ActividadParticipanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActividadParticipanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActividadParticipanteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad\ActividadParticipante  $actividadParticipante
     * @return \Illuminate\Http\Response
     */
    public function show(ActividadParticipante $actividadParticipante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad\ActividadParticipante  $actividadParticipante
     * @return \Illuminate\Http\Response
     */
    public function edit(ActividadParticipante $actividadParticipante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActividadParticipanteRequest  $request
     * @param  \App\Models\Actividad\ActividadParticipante  $actividadParticipante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActividadParticipanteRequest $request, ActividadParticipante $actividadParticipante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad\ActividadParticipante  $actividadParticipante
     * @return \Illuminate\Http\Response
     */
    public function destroy(ActividadParticipante $actividadParticipante)
    {
        //
    }
}
