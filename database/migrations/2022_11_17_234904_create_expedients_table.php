<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedients', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('data_creacio');
            $table->dateTime('data_ultima_modificacio')->nullable();
            $table->integer('estats_expedients_id')->index('fk_expedients_estats_expedients1_idx');
            $table->string('codi', 20)->unique('codi_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedients');
    }
}
