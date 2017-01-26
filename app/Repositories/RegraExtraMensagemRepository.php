<?php

namespace App\Repositories;

use App\Models\RegraExtraMensagem;
use InfyOm\Generator\Common\BaseRepository;

class RegraExtraMensagemRepository extends BaseRepository
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
        return RegraExtraMensagem::class;
    }
}
