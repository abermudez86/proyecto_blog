<?php

namespace App\Http\Controllers\Comprobante;

use App\Http\Controllers\Controller;
use App\Models\Comprobante\ComprobanteDetalle;
use App\Http\Requests\Comprobante\StoreComprobanteDetalleRequest;
use App\Http\Requests\Comprobante\UpdateComprobanteDetalleRequest;

class ComprobanteDetalleController extends Controller
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
     * @param  \App\Http\Requests\StoreComprobanteDetalleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComprobanteDetalleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprobante\ComprobanteDetalle  $comprobanteDetalle
     * @return \Illuminate\Http\Response
     */
    public function show(ComprobanteDetalle $comprobanteDetalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprobante\ComprobanteDetalle  $comprobanteDetalle
     * @return \Illuminate\Http\Response
     */
    public function edit(ComprobanteDetalle $comprobanteDetalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComprobanteDetalleRequest  $request
     * @param  \App\Models\Comprobante\ComprobanteDetalle  $comprobanteDetalle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComprobanteDetalleRequest $request, ComprobanteDetalle $comprobanteDetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprobante\ComprobanteDetalle  $comprobanteDetalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComprobanteDetalle $comprobanteDetalle)
    {
        //
    }
}
