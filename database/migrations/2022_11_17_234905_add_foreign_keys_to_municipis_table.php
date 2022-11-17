<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMunicipisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('municipis', function (Blueprint $table) {
            $table->foreign(['comarques_id'], 'fk_municipis_comarques1')->references(['id'])->on('comarques')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('municipis', function (Blueprint $table) {
            $table->dropForeign('fk_municipis_comarques1');
        });
    }
}
