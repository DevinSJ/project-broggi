<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaris', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('usuari', 45)->unique('codi_UNIQUE');
            $table->string('contrassenya', 256);
            $table->string('nom', 45);
            $table->string('cognoms', 45);
            $table->integer('perfils_id')->index('fk_usuaris_perfils1_idx');
            $table->tinyInteger('actiu')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuaris');
    }
}
