<?php

namespace App\Repositories;

use App\Models\RegraExtra;
use InfyOm\Generator\Common\BaseRepository;

class RegraExtraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'inicio',
        'fim',
        'criterio',
        'pontos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RegraExtra::class;
    }
}
