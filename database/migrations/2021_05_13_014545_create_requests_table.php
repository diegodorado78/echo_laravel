<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('subject_name');
            $table->integer('fare')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('site')->nullable();
            // $table->integer('user_id')->unsigned()->nullable();
            // $table->integer('subject_id')->unsigned()->nullable();
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
