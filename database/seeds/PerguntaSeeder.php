<?php

use App\Models\Pergunta;
use Illuminate\Database\Seeder;

class PerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pergunta::class, 50)->create();
    }
}
