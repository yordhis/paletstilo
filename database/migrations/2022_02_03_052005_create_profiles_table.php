<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',155)->nullable();
            $table->string('slug')->nullable();
            $table->string('phone',45)->nullable();
            $table->string('direction',155)->nullable();
            $table->string('email',250)->nullable();

            $table->unsignedBigInteger('idRegion');

            $table->foreign('idRegion')
            ->references('id')
            ->on('regions');

            $table->unsignedBigInteger('idProvince');

            $table->foreign('idProvince')
            ->references('id')
            ->on('provinces');

            $table->unsignedBigInteger('idCommune');

            $table->foreign('idCommune')
            ->references('id')
            ->on('communes');
            
            $table->unsignedBigInteger('idUser');
            
            $table->foreign('idUser')
            ->references('id')
            ->on('users');

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
        Schema::dropIfExists('profiles');
    }
}
