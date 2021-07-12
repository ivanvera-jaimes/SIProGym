<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new User();
        $user->name= "Administrador";
        $user->email="admin@gmail.com";
        $user->password= bcrypt("admin2021");
        $user->tipo_usuario= "admin";
        $user->remember_Token="Hello Admin!";
        $user->save();
    }
}
