<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuaris', function (Blueprint $table) {
            $table->foreign(['perfils_id'], 'fk_usuaris_perfils1')->references(['id'])->on('perfils')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuaris', function (Blueprint $table) {
            $table->dropForeign('fk_usuaris_perfils1');
        });
    }
}
