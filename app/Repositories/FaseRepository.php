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
        $fase = $this->model->create($attributes);

        if (isset($attributes['mensagemId']) && !empty($attributes['mensagemId'])) {
            for ($i = 0; $i <= count($attributes['mensagemId']); $i++) {
                $this->model->mensagems()->attach($fase, ['mensagem_id' => $attributes['mensagemId'][$i], 'ordem' => $attributes['mensagemOrdem'][$i], 'pontos' => $attributes['mensagemPontos'][$i],]);
//                $this->model->perguntas()->attach($fase, []);
            }
        }
    }
}
