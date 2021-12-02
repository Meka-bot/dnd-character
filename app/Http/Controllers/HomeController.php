<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Raza;
use App\Models\Equipamiento;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::all();

        $clases=Clase::all();

        $razas=Raza::all();

        $equipamientos=Equipamiento::all();

        return view('home')->with('users', $users)->with('clases', $clases)->with('razas', $razas)->with('equipamientos', $equipamientos);
    }
}
