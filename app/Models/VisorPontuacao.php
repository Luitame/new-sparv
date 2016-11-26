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
        'visibilidadeInicial' => 'required|min:7|max:9',
        'mudandoEm' => 'required|min:8|max:8|date_format:H:i:s'
    ];

    public function getVisibilidadeInicialAttribute($value)
    {
        return ucfirst($value);
    }
    
}
