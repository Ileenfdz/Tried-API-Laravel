<?php

namespace App\Http\Controllers;

use App\Models\gatitos;
use App\Http\Requests\StoregatitosRequest;
use App\Http\Requests\UpdategatitosRequest;

class GatitosController extends Controller
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
     * @param  \App\Http\Requests\StoregatitosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregatitosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gatitos  $gatitos
     * @return \Illuminate\Http\Response
     */
    public function show(gatitos $gatitos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gatitos  $gatitos
     * @return \Illuminate\Http\Response
     */
    public function edit(gatitos $gatitos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategatitosRequest  $request
     * @param  \App\Models\gatitos  $gatitos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategatitosRequest $request, gatitos $gatitos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gatitos  $gatitos
     * @return \Illuminate\Http\Response
     */
    public function destroy(gatitos $gatitos)
    {
        //
    }
}
