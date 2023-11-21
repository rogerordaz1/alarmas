<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos_servicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_equipo');
            $table->foreign('id_equipo')->references('id')->on('equipos')->onDelete('cascade');
            $table->unsignedBigInteger('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('servicios')->onDelete('cascade');
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
        Schema::dropIfExists('equipos_servicios');
    }
}
