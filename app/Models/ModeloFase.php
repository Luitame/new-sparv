<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Modelo
 * @package App\Models
 * @version November 29, 2016, 2:26 am UTC
 */
class ModeloFase extends Model
{

    public $table = 'modelos_fases';

    public $fillable = [
        'modelo_id',
        'fase_id',
        'indice'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'modelo_id' => 'integer',
        'fase_id' => 'integer',
        'indice' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'modelo_id' => 'integer|numeric|required|exists:modelos,id',
        'fase_id' => 'integer|numeric|required|exists:fases,id',
        'indice' => 'integer|numeric|required'
    ];

}
