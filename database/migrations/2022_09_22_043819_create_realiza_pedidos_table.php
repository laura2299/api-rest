<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealizaPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realiza_pedidos', function (Blueprint $table) {
            $table->unsignedBigInteger('idPedido')->index('realiza_pedidos_idpedido_foreign');
            $table->unsignedBigInteger('idCamarero')->index('realiza_pedidos_idcamarero_foreign');
            $table->unsignedBigInteger('idMesa')->index('realiza_pedidos_idmesa_foreign');
            $table->dateTime('fechaR')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realiza_pedidos');
    }
}
