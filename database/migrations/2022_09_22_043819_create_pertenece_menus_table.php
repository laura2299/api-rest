<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerteneceMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertenece_menus', function (Blueprint $table) {
            $table->unsignedBigInteger('idProd')->index('pertenece_menus_idprod_foreign');
            $table->unsignedBigInteger('idMenu')->index('pertenece_menus_idmenu_foreign');
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
        Schema::dropIfExists('pertenece_menus');
    }
}
