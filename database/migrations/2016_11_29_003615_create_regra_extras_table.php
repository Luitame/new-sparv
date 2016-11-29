<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegraExtrasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regra_extras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('inicio', 8);
            $table->string('fim', 8);
            $table->string('criterio', 8);
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
        Schema::drop('regra_extras');
    }
}
