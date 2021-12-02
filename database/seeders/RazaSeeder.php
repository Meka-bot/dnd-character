<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Raza;

class RazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Raza::create([
            'nombre' => 'Enano',
            'descripcion' => 'Sabios y resistentes, los enanos (O Dawi, en su lengua madre) son una de las civilizaciones más antiguas del mundo. Viviendo en las montañas, los enanos se dedican a minar, fabricar cerveza y a ser maestros de la guerra y el combate. Los enanos y sus reinos de las montañas han estado aquí desde el inicio y estarán aquí hasta el final.'
           ]);

        Raza::create([
            'nombre' => 'Elfo',
            'descripcion' => 'Seres antiguos y casi perfectos, los elfos han vivido tanto que todo elfo tiene gran conocimiento de magia, combate y diplomacia. Los elfos han visto a miles de imperios alzarse y caer en un intento de imitar su grandeza, y continuaran haciéndolo hasta el final de los tiempos.'
           ]);

        Raza::create([
            'nombre' => 'Humano',
            'descripcion' => 'No tan antiguos o "perfectos" como otras razas, los humanos tienen la increíble capacidad de adaptarse y superar cualquier adversidad. Actualmente viviendo en la mayoría del mundo, los humanos han sobrevivido teniendo la espada contra la pared mientras se enfrentan a las maldades del mundo y están dispuestos a continuar haciéndolo.'
           ]);

        Raza::create([
            'nombre' => 'Medio-Orco',
            'descripcion' => 'Siendo un hibrido de un elfo o humano y un brutal orco, esta raza vive constantemente en dos mundos sin verdaderamente pertenecer a alguno. Muy débil para sus padres orcos, muy monstruosos para sus padres humanos o elfos. Uno podría verlos como una monstruosidad, pero la verdad es que los medio-orcos tienen todos los beneficios de sus dos linajes con ninguna desventaja.'
           ]);
        
    }
}
