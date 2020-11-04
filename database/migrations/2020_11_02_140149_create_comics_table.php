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
            $table->string("title", 30);
            $table->string("original_title", 40)->nullable();
            $table->string("author", 40);
            $table->string("edition", 40);
            $table->smallInteger("number");
            $table->smallInteger("num_pages");
            $table->year("release");
            $table->float("price", 6,2);
            $table->boolean("colored");
            $table->string("cover")->default("https://via.placeholder.com/200x300");
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
