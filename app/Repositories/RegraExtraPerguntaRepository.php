<?php

namespace App\Repositories;

use App\Models\RegraExtraPergunta;
use InfyOm\Generator\Common\BaseRepository;

class RegraExtraPerguntaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RegraExtraPergunta::class;
    }
}
