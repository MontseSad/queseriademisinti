<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueserosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queseros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->date('birth');
            //$table->smallInteger('puesto');//si estamos en queseros este sera el puesto wex
            $table->string('curp');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('estado')->default('CONTRATADO');
            //$table->(?file you cannot save a PDF in a pgsql database
            $table->rememberToken();
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
        Schema::dropIfExists('queseros');
    }
}
