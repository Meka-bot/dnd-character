<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Clase;
use App\Models\Raza;
use App\Models\Equipamiento;
use App\Models\User;



class Personaje extends Model
{



    public function clase()
    {
    return $this->hasOne(Clase::class, 'id', 'nombre');
    }

    public function raza()
    {
    return $this->hasOne(Raza::class, 'id', 'nombre');
    }

    public function equipamiento()
    {
    return $this->hasOne(Equipamiento::class, 'id', 'nombre');
    }

    public function user()
    {
    return $this->hasOne(User::class, 'id', 'name');
    }

    use HasFactory;
}
