<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_empleados');
            $table->foreign('fk_empleados')->references('id')->on('empleados');
            $table->unsignedBigInteger('fk_reservacion');
            $table->foreign('fk_reservacion')->references('id')->on('reservaciones');
            $table->unsignedBigInteger('fk_metodos_pagos');
            $table->foreign('fk_pagos')->references('id')->on('metodos_pagos');
            $table->double('precio_total');
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
        Schema::dropIfExists('pagos');
    }
};
