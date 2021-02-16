<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seciones', function (Blueprint $table) {
            $table->increments('id_secion');
            $table->time('hora');
            $table->string('punto_encuentro');
            $table->decimal('valor_pago',2);
            $table->string('tipo_pago');
            $table->integer('clase_id');
            $table->foreign('clase_id')->references('id_clase')->on('clases');
            $table->integer('maestro_id');
            $table->foreign('maestro_id')->references('id_maestro')->on('maestros');
            $table->integer('alumno_id');
            $table->foreign('alumno_id')->references('id_alumno')->on('alumnos');
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
        Schema::dropIfExists('seciones');
    }
}
