<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dealings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('from_pro');
            $table->unsignedInteger('to_pro');
            $table->integer('cash')->nullable();
            $table->smallInteger('stat')->default(0);
            $table->timestamps();
            //$table->foreign('form_pro')->references('products')->on('id')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('to_pro')->references('products')->on('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dealings');
    }
}
