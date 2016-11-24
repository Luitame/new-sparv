<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemposTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempos', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('inicio');
            $table->dateTime('fim');
            $table->string('ordem', 30);
            $table->dateTime('mudandoEm');
            $table->string('visibilidadeInicial', 30);
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
        Schema::drop('tempos');
    }
}
