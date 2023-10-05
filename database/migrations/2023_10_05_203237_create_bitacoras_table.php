<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();

            //?Por aqui me quede lo que falta hacer es la relacion de bitacoras con servicios_equipos table.


            $table->foreignId('id_estado')->references('id')->on('estados')->nullOnDelete();
            $table->foreignId('id_equipo')->references('id')->on('equipos')->nullOnDelete();
            $table->foreignId('id_servicio')->references('id')->on('servicios')->nullOnDelete();
            $table->foreignId('id_user')->references('id')->on('users')->nullOnDelete();



            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_final')->nullable();
            $table->string('respuesta');

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
        Schema::dropIfExists('bitacoras');
    }
}
