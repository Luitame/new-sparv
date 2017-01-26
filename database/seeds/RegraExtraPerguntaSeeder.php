<?php

use App\Models\RegraExtraPergunta;
use Illuminate\Database\Seeder;

class RegraExtraPerguntaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RegraExtraPergunta::class, 20)->create();
    }
}
