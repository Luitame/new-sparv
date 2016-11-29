<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosFasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_fases', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->unsignedInteger('fase_id');
            $table->foreign('fase_id')->references('id')->on('fases');
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
        Schema::dropIfExists('modelos_fases');
    }
}