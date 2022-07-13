<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduledispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduledispatches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->string('date', 50)->nullable();
            $table->string('hour', 50)->nullable();
            $table->string('minute', 50)->nullable();

            $table->unsignedBigInteger('idUser');

            $table->foreign('idUser')
            ->references('id')
            ->on('users');

            $table->unsignedBigInteger('idOrder');

            $table->foreign('idOrder')
            ->references('id')
            ->on('orders');

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
        Schema::dropIfExists('scheduledispatches');
    }
}
