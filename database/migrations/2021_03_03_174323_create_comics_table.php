<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('cover')->nullable();
            $table->boolean('available')->nullable();
            $table->string('series', 80)->nullable();
            $table->float('price')->nullable();
            $table->date('on_sale_date')->nullable();
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
        Schema::dropIfExists('comics');
    }
}
