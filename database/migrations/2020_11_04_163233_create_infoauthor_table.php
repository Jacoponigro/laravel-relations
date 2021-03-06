<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoauthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoauthor', function (Blueprint $table) {
         
            $table->foreignId("author_id")->constrained();
            $table->string("nationality", 20);
            $table->tetx("bio");
            $table->string("image")->default("https://www.cilentonotizie.it/public/images/15092015_tomba_bianca_03.jpg");
            $table->boolean("alive")->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infoauthor');
    }
}
