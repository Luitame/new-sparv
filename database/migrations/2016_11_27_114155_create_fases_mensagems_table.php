<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasesMensagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fases_mensagems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('fase_id');
            $table->foreign('fase_id')->references('id')->on('fases');
            $table->unsignedInteger('mensagem_id');
            $table->foreign('mensagem_id')->references('id')->on('mensagems');
            $table->string('ordem');
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
        Schema::dropIfExists('fases_mensagems');
    }
}
