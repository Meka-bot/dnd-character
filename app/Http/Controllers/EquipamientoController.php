<?php

namespace App\Http\Controllers;

use App\Models\Equipamiento;
use Illuminate\Http\Request;

class EquipamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipamientos = Equipamiento::all();
        return view('home')->with('equipamientos', $equipamientos);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipamiento  $equipamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Equipamiento $equipamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipamiento  $equipamiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipamiento $equipamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipamiento  $equipamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipamiento $equipamiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipamiento  $equipamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipamiento $equipamiento)
    {
        //
    }
}
