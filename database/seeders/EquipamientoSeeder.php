<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Equipamiento;

class EquipamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Equipamiento::create([
            'nombre' => 'Gran Hacha',
            'descripcion' => 'Un hacha de guerra enorme, se necesita ambas manos para usarla y solo puede ser levantada por los guerreros más fuertes. Un arma simple pero extremadamente efectiva.'
           ]);

        Equipamiento::create([
            'nombre' => 'Bastón Magico',
            'descripcion' => 'Un bastón hecho de un antiguo y mágico árbol, permite que un usuario de magia canalice sus regalos arcanos para crear poderosos hechizos. Sin un canalizador un hechicero no puede usar magia, un mago nunca sale sin su confiable bastón.'
           ]);

        Equipamiento::create([
            'nombre' => 'Navaja Escondida',
            'descripcion' => 'Un arma letal y elegante, creada en una era antigua. Perfecta para usarse desde un escondite o repentinamente dentro de una multitud, puede no ser tan poderosa como otras armas pero un buen corte en el momento adecuado es tan letal como cualquier otra arma.'
           ]);
        
        Equipamiento::create([
            'nombre' => 'Espada y escudo',
            'descripcion' => 'Simple pero efectivo, el equipo cargado por todo soldado o caballero respetable. Dándole a su usuario una gran capacidad ofensiva y defensiva, puede no ser tan llamativo como otras armas pero existe una razón por la cual una espada y escudo esta conformada por firmes lineas de escudos y metal.'
           ]);
    }
}
