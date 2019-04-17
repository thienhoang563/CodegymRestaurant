<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCGRUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_g_r_users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('user_name');
            $table->string('user_password');
            $table->string('user_role');
            $table->string('user_phone_number');
            $table->string('user_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_g_r_users');
    }
}
