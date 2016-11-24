<?php

namespace App\Repositories;

use App\Models\VisorPontuacao;
use InfyOm\Generator\Common\BaseRepository;

class VisorPontuacaoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'visibilidadeInicial',
        'mudandoEm'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VisorPontuacao::class;
    }
}
