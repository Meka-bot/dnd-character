<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Clase;
class ClaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::create([
            'nombre' => 'Barbaro',
            'descripcion' => 'Guerreros sin igual, los barbaros se enfocan en usar su increíble fuerza y poder para derrotar a sus enemigos. Uno podría asumir que al no usar armadura y pelear más con los músculos y furia que con la mente los barbaros son solo idiotas brutos, pero cambiaras de parecer cuando estes del otro lado de su hacha.'
           ]);

           Clase::create([
            'nombre' => 'Hechicero',
            'descripcion' => 'Maestros de la magia y lo arcano, los hechiceros pasan años perfeccionando su conocimiento y poder al punto en que pueden usar la magia en todos sus diferentes formas. Ya sea como un arma, una herramienta diplomática o medicina la magia de un hechicero combinado con su gran conocimiento los convierte en increíbles individuos.'
           ]);

           Clase::create([
            'nombre' => 'Rogué',
            'descripcion' => 'Ya sea como un asesino, ladrón o espía, los rogué se esconden entre las sombras y fuera de la vista. Atentos a cualquier oportunidad para cortar un cuello, robar una bolsa de oro u obtener información beneficiaria para sus amigos... o cualquier persona que pague lo suficiente.'
           ]);

           Clase::create([
            'nombre' => 'Guerrero',
            'descripcion' => 'Maestros de guerra y combate, ya sea como un caballero, paladín o comandante entre otros. Los caballeros pueden no tener acceso a magia o habilidades sobrenaturales, pero eso lo compensan siendo adeptos de todas las armas y tipos de combate. Nada le gana a una confiable espada y escudo.'
           ]);
    }
}
