<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSeAdicionasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('se_adicionas', function (Blueprint $table) {
            $table->foreign(['idProducto'])->references(['id'])->on('productos')->onDelete('CASCADE');
            $table->foreign(['idPedido'])->references(['id'])->on('pedidos')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('se_adicionas', function (Blueprint $table) {
            $table->dropForeign('se_adicionas_idproducto_foreign');
            $table->dropForeign('se_adicionas_idpedido_foreign');
        });
    }
}
