<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name');
            $table->string('price');
            $table->unsignedInteger('foruser');
            $table->unsignedInteger('fordepart');
            $table->unsignedInteger('forpart');
            $table->smallInteger('stat')->default(0);
            $table->timestamps();
            //$table->foreign('foruser')->references('users')->on('id')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('fordepart')->references('depart')->on('id')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign('forpart')->references('part')->on('id')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
