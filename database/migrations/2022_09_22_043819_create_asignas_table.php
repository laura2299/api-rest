<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsignasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignas', function (Blueprint $table) {
            $table->unsignedBigInteger('idCajero')->index('asignas_idcajero_foreign');
            $table->unsignedBigInteger('idMesa')->index('asignas_idmesa_foreign');
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
        Schema::dropIfExists('asignas');
    }
}
