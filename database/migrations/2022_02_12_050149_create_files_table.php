<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('url');
            $table->unsignedBigInteger('idProduct')->nullable();
            $table->unsignedBigInteger('idArticle')->nullable();

            $table->foreign('idProduct')
            ->references('id')
            ->on('products');
            
            $table->foreign('idArticle')
            ->references('id')
            ->on('articles');
            
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
        Schema::dropIfExists('files');
    }
}
