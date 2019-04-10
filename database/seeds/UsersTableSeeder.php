<?php

use Illuminate\Database\Seeder;
use App\User;
use Caffeinated\Shinobi\Models\Role; 
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 123,
            'nombre' => 'Admin',
            'apellidoP' => '',
            'apellidoM' => '',
            'telefono' => '123',
            'password' => '$2y$10$Q2UOKspjkUT4EYEwOMJ9BeUBXb/3RjbKiuFZw3EutFn/7eIx6YsvK'

        ]);
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'
        ]);
        DB::table('role_user')->insert(
            array('role_id' => 1,
             'user_id' => 123));
    }
}
