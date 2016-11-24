<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Carta
 * @package App\Models
 * @version November 24, 2016, 7:33 pm UTC
 */
class Carta extends Model
{

    public $table = 'cartas';
    


    public $fillable = [
        'nome',
        'cor',
        'simbolo',
        'verso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'cor' => 'string',
        'simbolo' => 'string',
        'verso' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'cor' => 'required',
        'simbolo' => 'required',
        'verso' => 'required'
    ];

    
}
