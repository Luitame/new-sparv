<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class FasePergunta
 * @package App\Models
 */
class FasePergunta extends Model
{

    /**
     * @var string
     */
    public $table = 'fases_perguntas';

    /**
     * The attributes that should can mass assigment
     * @var array
     */
    public $fillable = [
        'fase_id',
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
        'fase_id' => 'integer',
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
        'fase_id' => 'integer|required|numeric|exists:fases,id',
        'pergunta_id' => 'integer|required|numeric|exists:perguntas,id',
        'ordem' => 'required|string|min:5|max:6',
        'pontos' => 'required|numeric|integer|between:0,13'
    ];

}