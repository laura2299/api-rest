<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeAdicionasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('se_adicionas', function (Blueprint $table) {
            $table->unsignedBigInteger('idPedido')->index('se_adicionas_idpedido_foreign');
            $table->unsignedBigInteger('idProducto')->index('se_adicionas_idproducto_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('se_adicionas');
    }
}
