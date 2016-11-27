<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasesPerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fases_perguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fase_id');
            $table->foreign('fase_id')->references('id')->on('fases');
            $table->unsignedInteger('pergunta_id');
            $table->foreign('pergunta_id')->references('id')->on('perguntas');
            $table->unsignedSmallInteger('pontos');
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
        Schema::dropIfExists('fases_perguntas');
    }
}
