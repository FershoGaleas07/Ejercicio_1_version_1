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
        Schema::create('seguro', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo_seguro');
            $table->string('Nombre_empresa_seguro');
            $table->string('Descripcion');
            $table->double('precio_base');
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
        Schema::dropIfExists('seguro');
    }
};
