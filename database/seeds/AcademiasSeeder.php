<?php

use Illuminate\Database\Seeder;

class AcademiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Academia::create([
            'id'      => 1,
            'nombre'     => 'Ciencias de la Computación',
        ]);

        App\Academia::create([
            'id'      => 2,
            'nombre'     => 'Instrumentación y Control',
        ]);

        App\Academia::create([
            'id'      => 3,
            'nombre'     => 'Nanosensores',
        ]);
        
        App\Academia::create([
            'id'      => 4,
            'nombre'     => 'Informática Aplícada',
        ]);

        App\Academia::create([
            'id'      => 5,
            'nombre'     => 'Electrónica',
        ]);

        App\Academia::create([
            'id'      => 6,
            'nombre'     => 'Ingeniería Industrial',
        ]);


    }
}
