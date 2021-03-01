<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //LISTA DE PERMISOS

        //Asignar academias a materias (Permisos para jefe y presidente)
        Permission::create(['name' => 'academiasAssign.index']);
        Permission::create(['name' => 'academiasAssign.edit']);

        //Asignar roles a usuarios (Permisos para super admin)
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.update']);
        Permission::create(['name' => 'roles.destroy']);

        //Cargar evidencias
        Permission::create(['name' => 'evidencias.index']);
        Permission::create(['name' => 'evidencias.upload']);

        //Cargar programas y guías
        Permission::create(['name' => 'programas.index']);
        Permission::create(['name' => 'programas.upload']);

        //Cargar actas
        Permission::create(['name' => 'actas.index']);
        Permission::create(['name' => 'actas.upload']);

        


        //CREAR ROLES

        //SuperAdmin
        $superAdmin = Role::create(['name' => 'SuperAdmin']);
        //Presidente
        $presidente = Role::create(['name' => 'Presidente de academia']);
        //Academicos
        $academico = Role::create(['name' => 'Academico']);


        //ASIGNAR PERMISOS A LOS ROLES
        $superAdmin->givePermissionTo([
            'roles.index',
            'roles.edit',
            'roles.update',
            'roles.destroy',
            'academiasAssign.index',
            'academiasAssign.edit',
        ]);

        $presidente->givePermissionTo([
            'academiasAssign.index',
            'academiasAssign.edit',
        ]);

        $academico->givePermissionTo([
            'evidencias.index',
            'evidencias.upload',
            'programas.index',
            'programas.upload',
            'actas.index',
            'actas.upload',
        ]);

        //Crear usuario Super Admin
        $user = User::find(1);
        $user->assignRole('SuperAdmin'); 

    }
}
