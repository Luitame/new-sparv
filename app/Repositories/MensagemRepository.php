<?php

namespace App\Repositories;

use App\Models\Mensagem;
use InfyOm\Generator\Common\BaseRepository;

class MensagemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mensagemTxt'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Mensagem::class;
    }
}
