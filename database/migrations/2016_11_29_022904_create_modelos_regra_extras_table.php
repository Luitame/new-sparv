<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosRegraExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos_regra_extras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->unsignedInteger('regra_extra_id');
            $table->foreign('regra_extra_id')->references('id')->on('regra_extras');
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
        Schema::dropIfExists('modelos_regra_extras');
    }
}
