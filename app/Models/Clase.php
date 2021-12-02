<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function personaje()
    {
    return $this->belongsTo(Personaje::class);
    }


}
