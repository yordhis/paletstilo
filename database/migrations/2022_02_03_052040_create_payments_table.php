<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code',55)->unique();
            $table->string('slug')->nullable();
            $table->double('pay', 8, 2);
            $table->string('refferencePay',55)->unique();
            $table->string('date',55);
            $table->boolean('status')->default(false);

            $table->unsignedBigInteger('idUser');

            $table->foreign('idUser')
            ->references('id')
            ->on('users');

            $table->unsignedBigInteger('idProduct');

            $table->foreign('idProduct')
            ->references('id')
            ->on('products');

            $table->unsignedBigInteger('idTypepayment');

            $table->foreign('idTypepayment')
            ->references('id')
            ->on('typepayments');
            
            $table->unsignedBigInteger('idShipping');
            
            $table->foreign('idShipping')
            ->references('id')
            ->on('shippingvalues');
            
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
        Schema::dropIfExists('payments');
    }
}
