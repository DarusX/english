<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Classroom;
use App\Status;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrador',
            'username' => 'admin',
            'password' => bcrypt('123456')
        ]);

        $admin->roles()->attach(Role::create([
            'name' => 'Crear Professor'
        ]));

        Classroom::create(['number' => '1']);
        Classroom::create(['number' => '2']);
        Classroom::create(['number' => '3']);
        Classroom::create(['number' => '4']);
        Classroom::create(['number' => '5']);
        Classroom::create(['number' => '6']);
        Classroom::create(['number' => '7']);

        Status::create(['status' => 'Preinscrito']);
        Status::create(['status' => 'Inscrito']);
        Status::create(['status' => 'Egresado']);
        Status::create(['status' => 'Baja']);
        // $this->call(UsersTableSeeder::class);
    }
}
