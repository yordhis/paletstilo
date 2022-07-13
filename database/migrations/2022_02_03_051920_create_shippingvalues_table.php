<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingvaluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippingvalues', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('slug')->nullable();
            $table->double('kmValue',8 ,2)->nullable();
            $table->double('price',8 ,2)->nullable();
            $table->double('kmDiference', 8, 2)->nullable();
            $table->unsignedBigInteger('idCommune');

            $table->foreign('idCommune')
            ->references('id')
            ->on('communes');

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
        Schema::dropIfExists('shippingvalues');
    }
}
