<?php

namespace App\Repositories;

use App\Models\Fase;
use InfyOm\Generator\Common\BaseRepository;

class FaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'criterio',
        'pontos'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fase::class;
    }

    public function create(array $attributes)
    {
        dd($attributes);
    }


}
