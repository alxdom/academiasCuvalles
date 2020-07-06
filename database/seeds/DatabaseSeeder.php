<?php

use Illuminate\Database\Seeder;
use App\Academia;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\Academia',20)->create();
        factory('App\Materia',30)->create();
    }
}
