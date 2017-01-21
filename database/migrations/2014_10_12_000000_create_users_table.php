<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            //details
            $table->string('firstname')->nullable();
            $table->string('surname')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('education')->nullable();
            $table->string('interests')->nullable();
            $table->string('about_me')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
