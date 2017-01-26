<?php

namespace App\Repositories;

use App\Models\FaseMensagem;
use InfyOm\Generator\Common\BaseRepository;

class FaseMensagemRepository extends BaseRepository
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
        return FaseMensagem::class;
    }
}
