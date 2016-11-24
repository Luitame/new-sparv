<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVisorPontuacaosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visor_pontuacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('visibilidadeInicial', 30);
            $table->string('mudandoEm', 30);
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
        Schema::drop('visor_pontuacaos');
    }
}
