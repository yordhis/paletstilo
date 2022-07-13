<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code', 50)->unique();
            $table->string('slug')->nullable();
            $table->text('direction')->nullable();
            $table->string('phone', 50)->nullable();
            $table->enum('status', ['Pendiente', 'Enviado'])->default('pendiente');

            $table->unsignedBigInteger('idUser');

            $table->foreign('idUser')
            ->references('id')
            ->on('users');

            $table->unsignedBigInteger('idProduct');

            $table->foreign('idProduct')
            ->references('id')
            ->on('products');

            $table->unsignedBigInteger('idPayment');

            $table->foreign('idPayment')
            ->references('id')
            ->on('payments');
            

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
        Schema::dropIfExists('orders');
    }
}
