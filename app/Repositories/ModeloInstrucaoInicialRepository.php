<?php

namespace App\Repositories;

use App\Models\Modelo;
use App\Models\ModeloInstrucaoInicial;
use InfyOm\Generator\Common\BaseRepository;

class ModeloInstrucaoInicialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ModeloInstrucaoInicial::class;
    }
}
