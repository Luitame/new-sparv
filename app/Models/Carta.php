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
        'numero',
        'cor',
        'simbolo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'numero' => 'integer',
        'cor' => 'string',
        'simbolo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'numero' => 'required|number|integer',
        'cor' => 'required',
        'simbolo' => 'required',
    ];

}
