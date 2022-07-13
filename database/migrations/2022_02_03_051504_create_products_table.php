<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name', 250)->unique();
            $table->string('slug');
            $table->double('price', 8, 2);
            $table->boolean('available')->default(true);
            // $table->text('measure');
            // $table->text('img');
            $table->text('code')->nullable();

            $table->unsignedBigInteger('idCategorie');

            $table->foreign('idCategorie')
            ->references('id')
            ->on('categories');
            
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
        Schema::dropIfExists('products');
    }
}
