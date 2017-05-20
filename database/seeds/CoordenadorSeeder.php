<?php

use Illuminate\Database\Seeder;

class CoordenadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Coordenador::truncate();

        factory(\App\Coordenador::class, 10)->create();
    }
}
