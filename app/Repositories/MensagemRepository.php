<?php

namespace App\Repositories;

use App\Models\Mensagem;
use InfyOm\Generator\Common\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class MensagemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mensagemTxt' => 'like'
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
        return Mensagem::class;
    }
}
