<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('user_type')->nullable();
            $table->string('name');
            $table->string('lastname');
            $table->string('gender')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('image')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('identification')->unique()->nullable();
            $table->string('identification_type')->nullable();
            $table->date('birthday')->nullable();
             $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->float('score')->nullable();
            $table->string('city')->nullable();
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
        Schema::dropIfExists('users');
    }
}
