<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCartesTrucadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cartes_trucades', function (Blueprint $table) {
            $table->foreign(['municipis_id_trucada'], 'fk_cartes_trucades_municipis2')->references(['id'])->on('municipis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['tipus_localitzacions_id'], 'fk_cartes_trucades_tipus_localitzacions1')->references(['id'])->on('tipus_localitzacions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['expedients_id'], 'fk_cartes_trucades_expedients1')->references(['id'])->on('expedients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['municipis_id'], 'fk_cartes_trucades_municipis1')->references(['id'])->on('municipis')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['provincies_id'], 'fk_cartes_trucades_provincies1')->references(['id'])->on('provincies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['usuaris_id'], 'fk_cartes_trucades_usuaris1')->references(['id'])->on('usuaris')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['dades_personals_id'], 'fk_cartes_trucades_dades_personals1')->references(['id'])->on('dades_personals')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['incidents_id'], 'fk_cartes_trucades_incidents1')->references(['id'])->on('incidents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartes_trucades', function (Blueprint $table) {
            $table->dropForeign('fk_cartes_trucades_municipis2');
            $table->dropForeign('fk_cartes_trucades_tipus_localitzacions1');
            $table->dropForeign('fk_cartes_trucades_expedients1');
            $table->dropForeign('fk_cartes_trucades_municipis1');
            $table->dropForeign('fk_cartes_trucades_provincies1');
            $table->dropForeign('fk_cartes_trucades_usuaris1');
            $table->dropForeign('fk_cartes_trucades_dades_personals1');
            $table->dropForeign('fk_cartes_trucades_incidents1');
        });
    }
}
