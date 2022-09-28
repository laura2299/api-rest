<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign(['idCamarero'])->references(['id'])->on('camareros');
            $table->foreign(['idCajero'])->references(['id'])->on('cajeros');
            $table->foreign(['idCliente'])->references(['id'])->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign('pedidos_idcamarero_foreign');
            $table->dropForeign('pedidos_idcajero_foreign');
            $table->dropForeign('pedidos_idcliente_foreign');
        });
    }
}
