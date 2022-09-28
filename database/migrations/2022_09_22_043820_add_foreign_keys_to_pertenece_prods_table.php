<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerteneceProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertenece_prods', function (Blueprint $table) {
            $table->foreign(['idProd'])->references(['id'])->on('productos');
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
        Schema::table('pertenece_prods', function (Blueprint $table) {
            $table->dropForeign('pertenece_prods_idprod_foreign');
            $table->dropForeign('pertenece_prods_idingrediente_foreign');
        });
    }
}
