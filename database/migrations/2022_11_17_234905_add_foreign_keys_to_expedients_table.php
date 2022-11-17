<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExpedientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expedients', function (Blueprint $table) {
            $table->foreign(['estats_expedients_id'], 'fk_expedients_estats_expedients1')->references(['id'])->on('estats_expedients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expedients', function (Blueprint $table) {
            $table->dropForeign('fk_expedients_estats_expedients1');
        });
    }
}
