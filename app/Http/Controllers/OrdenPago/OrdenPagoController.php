<?php

namespace App\Http\Controllers\OrdenPago;

use App\Http\Controllers\Controller;
use App\Models\OrdenPago\OrdenPago;
use App\Http\Requests\StoreOrdenPagoRequest;
use App\Http\Requests\UpdateOrdenPagoRequest;

class OrdenPagoController extends Controller
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
     * @param  \App\Http\Requests\StoreOrdenPagoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdenPagoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrdenPago\OrdenPago  $ordenPago
     * @return \Illuminate\Http\Response
     */
    public function show(OrdenPago $ordenPago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrdenPago\OrdenPago  $ordenPago
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdenPago $ordenPago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdenPagoRequest  $request
     * @param  \App\Models\OrdenPago\OrdenPago  $ordenPago
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdenPagoRequest $request, OrdenPago $ordenPago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrdenPago\OrdenPago  $ordenPago
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrdenPago $ordenPago)
    {
        //
    }
}
