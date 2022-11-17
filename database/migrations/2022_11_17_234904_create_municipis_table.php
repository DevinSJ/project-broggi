<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipis', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nom', 45)->unique('nom_UNIQUE');
            $table->integer('comarques_id')->index('fk_municipis_comarques1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('municipis');
    }
}
