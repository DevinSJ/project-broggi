<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAjudesFrasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajudes_frases', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('es_lang');
            $table->text('ca_lang');
            $table->text('en_lang');
            $table->text('fr_lang');
            $table->text('de_lang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ajudes_frases');
    }
}
