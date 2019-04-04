<?php

use Illuminate\Database\Seeder;

class CGR_userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CGR_user = new \App\CGR_user();
        $CGR_user->id =1;
        $CGR_user->user_name = 'admin1';
        $CGR_user->user_password = 'admin1';

    }
}
