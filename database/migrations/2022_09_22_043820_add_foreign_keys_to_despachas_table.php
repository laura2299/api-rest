<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDespachasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('despachas', function (Blueprint $table) {
            $table->foreign(['idPedido'])->references(['id'])->on('pedidos');
            $table->foreign(['idChef'])->references(['id'])->on('chefs');
            $table->foreign(['idProd'])->references(['id'])->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('despachas', function (Blueprint $table) {
            $table->dropForeign('despachas_idpedido_foreign');
            $table->dropForeign('despachas_idchef_foreign');
            $table->dropForeign('despachas_idprod_foreign');
        });
    }
}
