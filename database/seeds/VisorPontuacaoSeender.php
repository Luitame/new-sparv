<?php

use App\Models\VisorPontuacao;
use Illuminate\Database\Seeder;

class VisorPontuacaoSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(VisorPontuacao::class, 40)->create();
    }
}
