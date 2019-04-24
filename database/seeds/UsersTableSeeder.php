<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->id = 1;
        $user->name = "admin";
        $user->email =  "admin@gmail.com";
        $user->password = bcrypt("12345678");
        $user->image = "";
        $user->role = \App\Http\Controllers\RoleAdmin::ADMIN;
        $user->save();
    }
}
