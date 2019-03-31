<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_auditor = Role::where('name', 'auditor')->first();
        $role_employee = Role::where('name', 'employee')->first();
        $role_customer = Role::where('name', 'customer')->first();



        ###### SEED ######
        //              //
        // ADMIN
        $user = new User();
        $user->name = "Admin";
        $user->lastname = "Admin";
        $user->dni = "12345678";
        $user->departament = "Montevideo";
        $user->location = "Buceo";
        $user->address = "Artigas";
        $user->number = "1212";
        $user->apartament = "103";
        $user->email = "admin@mail.com";
        $user->password = bcrypt('456456');
        $user->save();
        $user->roles()->attach($role_admin);

        // AUDITOR
        $user = new User();
        $user->name = "Auditor";
        $user->lastname = "Auditdor";
        $user->dni = "98765432";
        $user->departament = "Montevideo";
        $user->location = "Las Piedras";
        $user->address = "Sarandi";
        $user->number = "1414";
        $user->apartament = "";
        $user->email = "auditor@mail.com";
        $user->password = bcrypt('456456');
        $user->save();
        $user->roles()->attach($role_auditor);

        // EMPLOYEE
        $user = new User();
        $user->name = "Empleado";
        $user->lastname = "Empleado";
        $user->dni = "112233445";
        $user->departament = "Maldonado";
        $user->location = "Juventud";
        $user->address = "Durazno";
        $user->number = "4444";
        $user->apartament = "301";
        $user->email = "employee@mail.com";
        $user->password = bcrypt('456456');
        $user->save();
        $user->roles()->attach($role_employee);

        // CUSTOMER
        $user = new User();
        $user->name = "Cliente";
        $user->lastname = "Cliente";
        $user->dni = "3331129";
        $user->departament = "Montevideo";
        $user->location = "Cerro";
        $user->address = "Grecia";
        $user->number = "3400";
        $user->apartament = "";
        $user->email = "customer@mail.com";
        $user->password = bcrypt('456456');
        $user->save();
        $user->roles()->attach($role_customer);
    }
}
