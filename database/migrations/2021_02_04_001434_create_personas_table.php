<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_persona');
            $table->string('Nombres');
            $table->string('A_paterno');
            $table->string('A_materno');
            $table->string('Direccion');
            $table->string('Telefono');
            $table->string('Email')->unique;
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('No_Documento');
            $table->date('Fecha_Nacimiento');
            $table->string('Ubicacion_Foto');
            $table->integer('Tipo_Doc_id')->unsigned();
            $table->foreign('Tipo_Doc_id')->references('id_tipo_documento')->on('tipo_documento');
            $table->integer('Tipo_Usu_id')->unsigned();
            $table->foreign('Tipo_Usu_id')->references('id_tipo_usuario')->on('tipo_usuario');
            $table->integer('Sexo_id')->unsigned();
            $table->foreign('Sexo_id')->references('id_sexo')->on('sexo');
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
        Schema::dropIfExists('personas');
    }
}
