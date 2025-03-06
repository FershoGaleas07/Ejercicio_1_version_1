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
        Schema::create('resenas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_clientes');
            $table->foreign('fk_clientes')->references('id')->on('clientes');
            $table->unsignedBigInteger('fk_auto');
            $table->foreign('fk_auto')->references('id')->on('autos');
            $table->double('calificacion');
            $table->longText('comentario');
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
        Schema::dropIfExists('resenas');
    }
};
