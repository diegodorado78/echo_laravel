<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id_alumno');
            $table->string('descripcion_alumno');
            $table->integer('tipo_usuario_id')->unsigned();
            $table->foreign('tipo_usuario_id')->references('id_tipo_usuario')->on('tipo_usuario');
            $table->integer('materias_interes_alumno_id')->unsigned();
            $table->foreign('materias_interes_alumno_id')->references('id_materias_interes_alumno')->on('materias_interes_alumno');
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
        Schema::dropIfExists('alumnos');
    }
}
