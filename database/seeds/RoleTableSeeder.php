<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = "admin";
        $role->description = "Administrador";
        $role->save();

        $role = new Role();
        $role->name = "auditor";
        $role->description = "Auditor";
        $role->save();

        $role = new Role();
        $role->name = "employee";
        $role->description = "Empleado";
        $role->save();

        $role = new Role();
        $role->name = "customer";
        $role->description = "Cliente";
        $role->save();
    }
}
