<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class RegraExtraMensagem
 * @package App\Models
 */
class RegraExtraMensagem extends Model
{

    /**
     * @var string
     */
    public $table = 'regra_extras_mensagems';

    /**
     * The attributes that should can mass assigment
     * @var array
     */
    public $fillable = [
        'regra_extra_id',
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
        'regra_extra_id' => 'integer',
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
        'regra_extra_id' => 'integer|required|numeric|exists:regra_extras,id',
        'mensagem_id' => 'integer|required|numeric|exists:mensagems,id',
        'ordem' => 'required|string|min:5|max:6',
        'pontos' => 'required|numeric|integer|between:0,13'
    ];

}