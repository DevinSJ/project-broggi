<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartesTrucadesHasAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartes_trucades_has_agencies', function (Blueprint $table) {
            $table->integer('cartes_trucades_id')->index('fk_cartes_trucades_has_agencies_cartes_trucades1_idx');
            $table->integer('agencies_id')->index('fk_cartes_trucades_has_agencies_agencies1_idx');
            $table->integer('estats_agencies_id')->index('fk_cartes_trucades_has_agencies_estats_agencies1_idx');

            $table->primary(['cartes_trucades_id', 'agencies_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartes_trucades_has_agencies');
    }
}
