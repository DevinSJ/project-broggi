<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('codi', 45)->unique('codi_UNIQUE');
            $table->string('descripcio', 256);
            $table->string('definicio', 256);
            $table->string('instrucions', 256);
            $table->integer('classes_incidents_id')->nullable()->index('fk_tipus_incidents_classes_incidents1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');
    }
}
