<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosInstrucaoInicialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_instrucao_inicials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->unsignedInteger('instrucao_inicial_id');
            $table->foreign('instrucao_inicial_id')->references('id')->on('instrucao_inicials');
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
        Schema::dropIfExists('modelos_instrucao_inicials');
    }
}
