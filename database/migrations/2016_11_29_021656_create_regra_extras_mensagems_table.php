<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegraExtrasMensagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regra_extras_mensagems', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('regra_extra_id');
            $table->foreign('regra_extra_id')->references('id')->on('regra_extras')->onDelete('cascade');
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
        Schema::dropIfExists('regra_extras_mensagems');
    }
}
