<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_parents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('test_children', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('test_parent_id');
            $table->foreign('test_parent_id')->references('id')->on('test_parents');
            $table->string('string');
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
        Schema::dropIfExists('test_children');
        Schema::dropIfExists('test_parents');
    }
}
