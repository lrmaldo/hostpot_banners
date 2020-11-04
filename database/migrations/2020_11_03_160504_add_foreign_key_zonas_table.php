<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Carrusels', function (Blueprint $table) {
            $table->integer('zona_id')->unsigned()->nullable(); /* foreign key detalle cotizacion */
            $table->foreign('zona_id')->references('id')->on('zonas')->onDelete('set null');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Carrusels', function (Blueprint $table) {
            $table->dropForeign('Carrusels_zona_id_foreign');
        });
    }
}
