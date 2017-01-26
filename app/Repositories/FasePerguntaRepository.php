<?php

namespace App\Repositories;

use App\Models\FasePergunta;
use InfyOm\Generator\Common\BaseRepository;

class FasePerguntaRepository extends BaseRepository
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
        return FasePergunta::class;
    }
}
