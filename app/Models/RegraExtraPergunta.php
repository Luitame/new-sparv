<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class RegraExtraPergunta
 * @package App\Models
 */
class RegraExtraPergunta extends Model
{

    /**
     * @var string
     */
    public $table = 'regra_extras_perguntas';

    /**
     * The attributes that should can mass assigment
     * @var array
     */
    public $fillable = [
        'regra_extra_id',
        'pergunta_id',
        'ordem',
        'pontos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'regra_extra_id' => 'integer',
        'pergunta_id' => 'integer',
        'ordem' => 'string',
        'pontos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'regra_extra_id' => 'integer|required|numeric|exists:regra_extras,id',
        'pergunta_id' => 'integer|required|numeric|exists:perguntas,id',
        'ordem' => 'required|string|min:5|max:6',
        'pontos' => 'required|numeric|integer|between:0,13'
    ];

}