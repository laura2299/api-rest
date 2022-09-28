<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerteneceMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertenece_menus', function (Blueprint $table) {
            $table->foreign(['idProd'])->references(['id'])->on('productos')->onDelete('CASCADE');
            $table->foreign(['idMenu'])->references(['id'])->on('menus')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertenece_menus', function (Blueprint $table) {
            $table->dropForeign('pertenece_menus_idprod_foreign');
            $table->dropForeign('pertenece_menus_idmenu_foreign');
        });
    }
}
