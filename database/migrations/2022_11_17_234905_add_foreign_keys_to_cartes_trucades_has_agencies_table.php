<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCartesTrucadesHasAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cartes_trucades_has_agencies', function (Blueprint $table) {
            $table->foreign(['cartes_trucades_id'], 'fk_cartes_trucades_has_agencies_cartes_trucades1')->references(['id'])->on('cartes_trucades')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['agencies_id'], 'fk_cartes_trucades_has_agencies_agencies1')->references(['id'])->on('agencies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['estats_agencies_id'], 'fk_cartes_trucades_has_agencies_estats_agencies1')->references(['id'])->on('estats_agencies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartes_trucades_has_agencies', function (Blueprint $table) {
            $table->dropForeign('fk_cartes_trucades_has_agencies_cartes_trucades1');
            $table->dropForeign('fk_cartes_trucades_has_agencies_agencies1');
            $table->dropForeign('fk_cartes_trucades_has_agencies_estats_agencies1');
        });
    }
}
