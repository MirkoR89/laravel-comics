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
            $table->unsignedBigInteger('comic_id')->unique()->nullable();
            $table->foreign('comic_id')->references('id')->on('comics')->nullable()->onDelete('cascade');
            $table->string('series', 80)->nullable();
            $table->float('price')->nullable();
            $table->date('on_sale_data')->nullable();
            $table->integer('volume_issue')->nullable();
            $table->string('trim_size', 20)->nullable();
            $table->integer('page_count')->nullable();
        $table->string('rated', 20)->nullable();
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
