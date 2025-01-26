<?php

namespace App\Http\Controllers;

use App\Models\Dipendente;
use App\Http\Requests\StoreDipendenteRequest;
use App\Http\Requests\UpdateDipendenteRequest;

class DipendenteController extends Controller
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
     * @param  \App\Http\Requests\StoreDipendenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDipendenteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dipendente  $dipendente
     * @return \Illuminate\Http\Response
     */
    public function show(Dipendente $dipendente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dipendente  $dipendente
     * @return \Illuminate\Http\Response
     */
    public function edit(Dipendente $dipendente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDipendenteRequest  $request
     * @param  \App\Models\Dipendente  $dipendente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDipendenteRequest $request, Dipendente $dipendente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dipendente  $dipendente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dipendente $dipendente)
    {
        //
    }
}
