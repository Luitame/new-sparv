<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ModeloInstrucaoInicial
 * @package App\Models
 */
class ModeloInstrucaoInicial extends Model
{

    /**
     * @var string
     */
    public $table = 'modelos_instrucao_inicials';

    /**
     * The attibutes that can be mass assigment
     * @var array
     */
    public $fillable = [
        'modelo_id',
        'instrucao_inicial_id',
        'ordem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'modelo_id' => 'integer',
        'instrucao_inicial_id' => 'integer',
        'ordem' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'modelo_id' => 'required|integer|numeric|exists:modelos,id',
        'instrucao_inicial_id' => 'required|integer|numeric|exists:instrucao_inicials,id',
        'ordem' => 'required|integer|numeric'
    ];
}
