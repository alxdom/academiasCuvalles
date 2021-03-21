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
            'codigo'      => '214508406',
            'pass'     => bcrypt('pragmatn64'),
        ]);
    }
}
