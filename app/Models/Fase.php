<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fase
 * @package App\Models
 * @version November 27, 2016, 11:33 am UTC
 */
class Fase extends Model
{

    public $table = 'fases';

    public $fillable = [
        'criterio',
        'pontos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'criterio' => 'string',
        'pontos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'criterio' => 'required|min:5|max:8',
        'pontos' => 'required|numeric|integer|between:0,13'
    ];
    
}