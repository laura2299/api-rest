<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerteneceProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertenece_prods', function (Blueprint $table) {
            $table->unsignedBigInteger('idProd')->index('pertenece_prods_idprod_foreign');
            $table->unsignedBigInteger('idIngrediente')->index('pertenece_prods_idingrediente_foreign');
            $table->integer('cantidad')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertenece_prods');
    }
}
