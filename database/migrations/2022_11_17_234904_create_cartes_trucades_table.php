<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartesTrucadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartes_trucades', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('codi_trucada', 45)->unique('codi_trucada');
            $table->dateTime('data_hora')->nullable();
            $table->integer('temps_trucada')->nullable();
            $table->integer('dades_personals_id')->nullable()->index('fk_cartes_trucades_dades_personals1_idx');
            $table->string('telefon', 45)->nullable();
            $table->string('procedencia_trucada', 45)->nullable();
            $table->string('origen_trucada', 45)->nullable();
            $table->string('nom_trucada', 45)->nullable();
            $table->integer('municipis_id_trucada')->nullable()->index('fk_cartes_trucades_municipis2_idx');
            $table->string('adreca_trucada', 256)->nullable();
            $table->tinyInteger('fora_catalunya');
            $table->integer('provincies_id')->nullable()->index('fk_cartes_trucades_provincies1_idx');
            $table->integer('municipis_id')->nullable()->index('fk_cartes_trucades_municipis1_idx');
            $table->integer('tipus_localitzacions_id')->nullable()->index('fk_cartes_trucades_tipus_localitzacions1_idx');
            $table->string('descripcio_localitzacio', 256)->nullable();
            $table->string('detall_localitzacio', 256)->nullable();
            $table->string('altres_ref_localitzacio', 256)->nullable();
            $table->integer('incidents_id')->index('fk_cartes_trucades_incidents1_idx');
            $table->text('nota_comuna_descripcio');
            $table->integer('expedients_id')->index('fk_cartes_trucades_expedients1_idx');
            $table->integer('usuaris_id')->index('fk_cartes_trucades_usuaris1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cartes_trucades');
    }
}
