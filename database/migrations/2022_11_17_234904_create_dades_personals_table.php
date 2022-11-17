<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadesPersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dades_personals', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('telefon', 45)->unique('telefon_UNIQUE');
            $table->string('adreca', 45);
            $table->string('antecedents', 256);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dades_personals');
    }
}
