<?php

namespace App\Http\Controllers\Comprobante;

use App\Http\Controllers\Controller;
use App\Models\Comprobante\Comprobante;
use App\Http\Requests\StoreComprobanteRequest;
use App\Http\Requests\UpdateComprobanteRequest;

class ComprobanteController extends Controller
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
     * @param  \App\Http\Requests\StoreComprobanteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComprobanteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comprobante\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function show(Comprobante $comprobante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comprobante\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function edit(Comprobante $comprobante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComprobanteRequest  $request
     * @param  \App\Models\Comprobante\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComprobanteRequest $request, Comprobante $comprobante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comprobante\Comprobante  $comprobante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comprobante $comprobante)
    {
        //
    }
}
