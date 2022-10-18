<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Usuario\UsuarioDato;
use App\Http\Requests\Usuario\StoreUsuarioDatoRequest;
use App\Http\Requests\Usuario\UpdateUsuarioDatoRequest;

class UsuarioDatoController extends Controller
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
     * @param  \App\Http\Requests\StoreUsuarioDatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioDatoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario\UsuarioDato  $usuarioDato
     * @return \Illuminate\Http\Response
     */
    public function show(UsuarioDato $usuarioDato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario\UsuarioDato  $usuarioDato
     * @return \Illuminate\Http\Response
     */
    public function edit(UsuarioDato $usuarioDato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsuarioDatoRequest  $request
     * @param  \App\Models\Usuario\UsuarioDato  $usuarioDato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioDatoRequest $request, UsuarioDato $usuarioDato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario\UsuarioDato  $usuarioDato
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuarioDato $usuarioDato)
    {
        //
    }
}
