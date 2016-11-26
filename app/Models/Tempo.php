<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tempo
 * @package App\Models
 * @version November 24, 2016, 9:04 pm UTC
 */
class Tempo extends Model
{

    public $table = 'tempos';

    public $fillable = [
        'total',
        'ordem',
        'mudandoEm',
        'visibilidadeInicial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'total' => 'string',
        'ordem' => 'string',
        'mudandoEm' => 'string',
        'visibilidadeInicial' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'total' => 'required|min:8|max:8|date_format:H:i:s',
        'ordem' => 'required|min:9|max:11',
        'mudandoEm' => 'required|min:8|max:8|date_format:H:i:s',
        'visibilidadeInicial' => 'required|min:7|max:9'
    ];
    
}
