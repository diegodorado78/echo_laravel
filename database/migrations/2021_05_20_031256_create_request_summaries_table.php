<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_summaries', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->integer('request_id')->unsigned();
            $table->primary('request_id');
            $table->string('status');
            $table->double('new_fare')->nullable();
            $table->text('observations');
            $table->timestamps();
            $table->foreign('request_id')->references('id')->on('requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_summaries');
    }
}
