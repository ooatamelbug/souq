<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutdealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routdeals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fordeal');
            $table->smallInteger('stat')->default(0);
            $table->timestamps();
          //$table->foreign('fordeal')->references('dealing')->on('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routdeals');
    }
}
