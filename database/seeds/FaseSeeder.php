<?php

use App\Models\Fase;
use App\Models\Mensagem;
use App\Models\Pergunta;
use Illuminate\Database\Seeder;

class FaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Fase::class, 10)->create()->each(function ($e) {
            for ($i = 0; $i < 2; $i++) {
                if ($i == 0) {
                    $e->mensagems()->save(factory(Mensagem::class)->make(), ['ordem' => 'antes', 'pontos' => rand(0, 13)]);
                    $e->perguntas()->save(factory(Pergunta::class)->make(), ['ordem' => 'antes', 'pontos' => rand(0, 13)]);
                } else {
                    $e->mensagems()->save(factory(Mensagem::class)->make(), ['ordem' => 'depois', 'pontos' => rand(0, 13)]);
                    $e->perguntas()->save(factory(Pergunta::class)->make(), ['ordem' => 'depois', 'pontos' => rand(0, 13)]);
                }
            }
        });
    }
}
