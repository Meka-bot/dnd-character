<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use Illuminate\Http\Request;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $razas = Raza::all();
        return view('home')->with('razas', $razas);
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
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function show(Raza $raza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function edit(Raza $raza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raza $raza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raza $raza)
    {
        //
    }
}
