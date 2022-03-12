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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('idvehiculo');
            $table->string('placa',10);
            $table->string('tipo',50);
            $table->string('marca',50);
            $table->integer('modelo');
            $table->string('color',15);
            $table->integer('puertas');
            $table->boolean('estatus');
            $table->unsignedBigInteger('idcliente');
            $table->date('fechareg');
            $table->timestamps();

            //$table->foreign('id_cliente'->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
};
