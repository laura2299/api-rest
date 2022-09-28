<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespachasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachas', function (Blueprint $table) {
            $table->unsignedBigInteger('idChef')->index('despachas_idchef_foreign');
            $table->unsignedBigInteger('idPedido')->index('despachas_idpedido_foreign');
            $table->unsignedBigInteger('idProd')->index('despachas_idprod_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('despachas');
    }
}
