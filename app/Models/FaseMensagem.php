<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FaseMensagem
 * @package App\Models
 */
class FaseMensagem extends Model
{

    /**
     * @var string
     */
    public $table = 'fases_mensagems';

    /**
     * The attributes that should can mass assigment
     * @var array
     */
    public $fillable = [
        'fase_id',
        'mensagem_id',
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
        'mensagem_id' => 'integer',
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
        'mensagem_id' => 'integer|required|numeric|exists:mensagems,id',
        'ordem' => 'required|string|min:5|max:6',
        'pontos' => 'required|numeric|integer|between:0,13'
    ];

}