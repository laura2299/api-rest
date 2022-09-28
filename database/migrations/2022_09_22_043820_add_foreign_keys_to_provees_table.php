<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProveesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provees', function (Blueprint $table) {
            $table->foreign(['idProv'])->references(['id'])->on('proveedors');
            $table->foreign(['idIngrediente'])->references(['id'])->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provees', function (Blueprint $table) {
            $table->dropForeign('provees_idprov_foreign');
            $table->dropForeign('provees_idingrediente_foreign');
        });
    }
}
