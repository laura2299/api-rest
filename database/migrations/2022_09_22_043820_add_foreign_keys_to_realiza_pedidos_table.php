<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRealizaPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('realiza_pedidos', function (Blueprint $table) {
            $table->foreign(['idMesa'])->references(['id'])->on('mesas');
            $table->foreign(['idCamarero'])->references(['id'])->on('camareros');
            $table->foreign(['idPedido'])->references(['id'])->on('pedidos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('realiza_pedidos', function (Blueprint $table) {
            $table->dropForeign('realiza_pedidos_idmesa_foreign');
            $table->dropForeign('realiza_pedidos_idcamarero_foreign');
            $table->dropForeign('realiza_pedidos_idpedido_foreign');
        });
    }
}
