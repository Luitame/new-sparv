<?php

namespace App\Repositories;

use App\Models\Pergunta;
use InfyOm\Generator\Common\BaseRepository;

class PerguntaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'perguntaTxt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pergunta::class;
    }
}
