<?php

use App\Models\FasePergunta;
use Illuminate\Database\Seeder;

class FasePerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FasePergunta::class, 20)->create();
    }
}
