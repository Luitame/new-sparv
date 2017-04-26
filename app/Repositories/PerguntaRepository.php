<?php

namespace App\Repositories;

use App\Models\Pergunta;
use InfyOm\Generator\Common\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class PerguntaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'perguntaTxt' => 'like'
    ];

    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pergunta::class;
    }
}
