<?php

namespace App\Repositories;

use App\Models\ModeloFase;
use InfyOm\Generator\Common\BaseRepository;

class ModeloFaseRepository extends BaseRepository
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
        return ModeloFase::class;
    }
}
