<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
        // $this->call(UsersTableSeeder::class);
    }
}
