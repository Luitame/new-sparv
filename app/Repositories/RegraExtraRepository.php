<?php

namespace App\Repositories;

use App\Models\RegraExtra;
use InfyOm\Generator\Common\BaseRepository;

class RegraExtraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'inicio',
        'fim',
        'criterio',
        'pontos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RegraExtra::class;
    }

    /**
     * @param array $attributes
     */
    public function createWithRelationships(array $attributes)
    {
        $mensagems = $attributes['mensagemId'] ?? '';
        $perguntas = $attributes['perguntaId'] ?? '';

        $regraExtra = $this->model->create($attributes);

        if (!empty($mensagems)) {
            foreach ($mensagems as $key => $mensagemId) {
                $regraExtra->mensagems()->attach($mensagemId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
            }
        }

        if (!empty($perguntas)) {
            foreach ($perguntas as $key => $perguntaId) {
                $regraExtra->perguntas()->attach($perguntaId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
            }
        }
    }

    /**
     * @param array $attributes
     */
    public function updateWithRelationships(array $attributes, $id)
    {
        $mensagems = $attributes['mensagemId'] ?? '';
        $perguntas = $attributes['perguntaId'] ?? '';

        $regraExtra = $this->model->update($attributes, $id);

        if (!empty($mensagems)) {
            foreach ($mensagems as $key => $mensagemId) {
                $regraExtra->mensagems()->sync($mensagemId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
            }
        }

        if (!empty($perguntas)) {
            foreach ($perguntas as $key => $perguntaId) {
                $regraExtra->perguntas()->sync($perguntaId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
            }
        }
    }
}
