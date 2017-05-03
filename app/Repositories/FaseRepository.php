<?php

namespace App\Repositories;

use App\Models\Fase;
use InfyOm\Generator\Common\BaseRepository;

class FaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'criterio',
        'pontos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fase::class;
    }

    /**
     * @param array $attributes
     */
    public function createWithRelationships(array $attributes)
    {
        $mensagems = $attributes['mensagemId'] ?? '';
        $perguntas = $attributes['perguntaId'] ?? '';

        $fase = $this->model->create($attributes);

        if (!empty($mensagems)) {
            foreach ($mensagems as $key => $mensagemId) {
                $fase->mensagems()->attach($mensagemId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
            }
        }

        if (!empty($perguntas)) {
            foreach ($perguntas as $key => $perguntaId) {
                $fase->perguntas()->attach($perguntaId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
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

        $fase = $this->model->update($attributes, $id);

        if (!empty($mensagems)) {
            foreach ($mensagems as $key => $mensagemId) {
                $fase->mensagems()->sync($mensagemId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
            }
        }

        if (!empty($perguntas)) {
            foreach ($perguntas as $key => $perguntaId) {
                $fase->perguntas()->sync($perguntaId, ['ordem' => $attributes['mensagemOrdem'][$key], 'pontos' => $attributes['mensagemPontos'][$key]]);
            }
        }
    }
}
