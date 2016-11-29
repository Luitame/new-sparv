<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->unsignedInteger('tempo_id');
            $table->foreign('tempo_id')->references('id')->on('tempos');
            $table->unsignedInteger('visor_pontuacao_id');
            $table->foreign('visor_pontuacao_id')->references('id')->on('visor_pontuacaos');
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
        Schema::drop('modelos');
    }
}
