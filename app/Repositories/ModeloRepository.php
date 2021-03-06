<?php

namespace App\Repositories;

use App\Models\Modelo;
use InfyOm\Generator\Common\BaseRepository;

class ModeloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Modelo::class;
    }
}
