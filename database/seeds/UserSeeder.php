<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'codigo'      => 'insertar codigo de siiau',
            'pass'     => bcrypt('insertar contraseña'),
        ]);
    }
}
