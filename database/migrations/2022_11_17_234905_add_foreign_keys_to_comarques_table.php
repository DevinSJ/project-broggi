<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToComarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comarques', function (Blueprint $table) {
            $table->foreign(['provincies_id'], 'fk_comarques_provincies1')->references(['id'])->on('provincies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comarques', function (Blueprint $table) {
            $table->dropForeign('fk_comarques_provincies1');
        });
    }
}
