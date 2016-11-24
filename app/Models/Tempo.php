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
        'inicio',
        'fim',
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
        'inicio' => 'datetime',
        'fim' => 'datetime',
        'ordem' => 'string',
        'mudandoEm' => 'datetime',
        'visibilidadeInicial' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'inicio' => 'required',
        'fim' => 'required',
        'ordem' => 'required',
        'mudandoEm' => 'required',
        'visibilidadeInicial' => 'required'
    ];

    
}
