<?php

namespace App\Repositories;

use App\Models\Carta;
use InfyOm\Generator\Common\BaseRepository;

class CartaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'cor',
        'simbolo',
        'verso'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Carta::class;
    }
}
