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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('idtrabajador');
            $table->string('nombre',50);
            $table->string('apaterno',50);
            $table->string('amaterno',50);
            $table->string('direccion',150);
            $table->string('telefono',15);
            $table->string('correo',60);
            $table->enum('tipo',['Lavador','Cajero']);
            $table->boolean('estatus');
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
        Schema::dropIfExists('trabajadores');
    }
};
