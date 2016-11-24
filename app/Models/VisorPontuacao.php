<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class VisorPontuacao
 * @package App\Models
 * @version November 24, 2016, 9:25 pm UTC
 */
class VisorPontuacao extends Model
{

    public $table = 'visor_pontuacaos';
    


    public $fillable = [
        'visibilidadeInicial',
        'mudandoEm'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'visibilidadeInicial' => 'string',
        'mudandoEm' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'visibilidadeInicial' => 'required',
        'mudandoEm' => 'required'
    ];

    
}
