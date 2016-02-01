<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTables extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 4);
            $table->string('abbreviation', 4);
            $table->string('name', 120);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('states');
    }
}
