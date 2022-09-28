<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAsignasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asignas', function (Blueprint $table) {
            $table->foreign(['idMesa'])->references(['id'])->on('mesas');
            $table->foreign(['idCajero'])->references(['id'])->on('cajeros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('asignas', function (Blueprint $table) {
            $table->dropForeign('asignas_idmesa_foreign');
            $table->dropForeign('asignas_idcajero_foreign');
        });
    }
}
