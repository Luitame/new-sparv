<?php

namespace App\Repositories;

use App\Models\Tempo;
use InfyOm\Generator\Common\BaseRepository;

class TempoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'inicio',
        'fim',
        'ordem',
        'mudandoEm',
        'visibilidadeInicial'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tempo::class;
    }
}
