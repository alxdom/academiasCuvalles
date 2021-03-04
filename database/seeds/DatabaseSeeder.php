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

        $this->call(UserSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(AcademiasSeeder::class);

        
    }
}
