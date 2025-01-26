<?php

namespace App\Http\Controllers;

use App\Models\Azienda;
use App\Http\Requests\StoreAziendaRequest;
use App\Http\Requests\UpdateAziendaRequest;

class AziendaController extends Controller
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
     * @param  \App\Http\Requests\StoreAziendaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAziendaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\Http\Response
     */
    public function show(Azienda $azienda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\Http\Response
     */
    public function edit(Azienda $azienda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAziendaRequest  $request
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAziendaRequest $request, Azienda $azienda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Azienda  $azienda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Azienda $azienda)
    {
        //
    }
}
