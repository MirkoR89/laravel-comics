<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comic_id')->unique();
            $table->foreign('comic_id')->references('id')->on('comics');
            $table->string('series', 80);
            $table->float('price', 3,2);
            $table->date('on_sale_data');
            $table->integer('volume_issue');
            $table->string('trim_size', 20);
            $table->integer('page_count');
            $table->string('rated', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specs');
    }
}
