<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipo')->nullable();
            $table->unsignedBigInteger('idCajero')->index('pedidos_idcajero_foreign');
            $table->unsignedBigInteger('idCliente')->index('pedidos_idcliente_foreign');
            $table->unsignedBigInteger('idCamarero')->index('pedidos_idcamarero_foreign');
            $table->dateTime('fechaP')->nullable();
            $table->dateTime('fechaF')->nullable();
            $table->string('obs')->nullable();
            $table->boolean('estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
