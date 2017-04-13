<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MediaItemsMig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_items', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('medium');
            $table->string('category');
            $table->string('year');
            $table->integer('watchedOn');
            $table->string('isFavorite');
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
        Schema::table('media_items', function (Blueprint $table) {
            //
        });
    }
}
