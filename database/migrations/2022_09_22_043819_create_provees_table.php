<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provees', function (Blueprint $table) {
            $table->unsignedBigInteger('idIngrediente')->index('provees_idingrediente_foreign');
            $table->unsignedBigInteger('idProv')->index('provees_idprov_foreign');
            $table->integer('cantidad')->nullable();
            $table->string('unidadmedida')->nullable();
            $table->double('precio', 8, 2)->nullable();
            $table->dateTime('fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provees');
    }
}
