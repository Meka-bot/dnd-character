<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClaseSeeder::class);
        $this->call(RazaSeeder::class);
        $this->call(EquipamientoSeeder::class);
    }
}
