<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasureproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measureproducts', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('idProduct');

            $table->unsignedBigInteger('idMeasure');

            $table->foreign('idProduct')
            ->references('id')
            ->on('products');

            $table->foreign('idMeasure')
            ->references('id')
            ->on('measures');

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
        Schema::dropIfExists('measureproducts');
    }
}
