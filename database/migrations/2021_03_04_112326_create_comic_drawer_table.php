<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicDrawerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_drawer', function (Blueprint $table) {
            $table->unsignedBigInteger('comic_id');
            $table->foreign('comic_id')->references('id')->on('comics');

            $table->unsignedBigInteger('drawer_id');
            $table->foreign('drawer_id')->references('id')->on('drawers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_drawer');
    }
}
