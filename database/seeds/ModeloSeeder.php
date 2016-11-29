<?php

use App\Models\Fase;
use App\Models\Mensagem;
use App\Models\Modelo;
use App\Models\Pergunta;
use App\Models\RegraExtra;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Modelo::class, 20)->create()->each(function ($m) {
            $m->fases()->saveMany(
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
                }));
            $m->regraExtras()->saveMany(
                factory(RegraExtra::class, 2)->create()->each(function ($e) {
                    for ($i = 0; $i < 2; $i++) {
                        if ($i == 0) {
                            $e->mensagems()->save(factory(Mensagem::class)->make(), ['ordem' => 'antes', 'pontos' => rand(0, 13)]);
                            $e->perguntas()->save(factory(Pergunta::class)->make(), ['ordem' => 'antes', 'pontos' => rand(0, 13)]);
                        } else {
                            $e->mensagems()->save(factory(Mensagem::class)->make(), ['ordem' => 'depois', 'pontos' => rand(0, 13)]);
                            $e->perguntas()->save(factory(Pergunta::class)->make(), ['ordem' => 'depois', 'pontos' => rand(0, 13)]);
                        }
                    }
                }));
            $m->instrucaoInicials()->attach([
                1 => ['ordem' => 1],
                2 => ['ordem' => 2],
                3 => ['ordem' => 3],
                4 => ['ordem' => 4]
            ]);
        });
    }
}
