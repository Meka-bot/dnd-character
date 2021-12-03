<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Models\Clase;
use App\Models\Raza;
use App\Models\Equipamiento;
use App\Models\User;

use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users=User::all();

        $clases=Clase::all();

        $razas=Raza::all();

        $equipamientos=Equipamiento::all();

        $personajes = Personaje::all();

        return view('personajes.index')->with('users', $users)->with('clases', $clases)->with('razas', $razas)->with('equipamientos', $equipamientos)->with('personajes',  $personajes);
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

    
    public function store(Request $request)
    {
        $personaje = new Personaje;

        $users=User::all();

        $clases=Clase::all();

        $razas=Raza::all();

        $equipamientos=Equipamiento::all();

        $personajes=Personaje::all();
        
        
        $personaje->usuario_id = $request->usuario_id;
        $personaje->raza_id = $request->raza_id;
        $personaje->clase_id = $request->clase_id;
        $personaje->equipamiento_id = $request->equipamiento_id;

        $personaje->save();
       

        return view('personajes.index')->with('users', $users)->with('clases', $clases)->with('razas', $razas)->with('equipamientos', $equipamientos)->with('personajes', $personajes);

       // return view('personaje')->with('users', $users)->with('clases', $clases)->with('razas', $razas)->with('equipamientos', $equipamientos)->with('personajes', $personajes);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Personaje $personaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personaje $personaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        //
    }
}
