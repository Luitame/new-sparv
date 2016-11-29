<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Modelo
 * @package App\Models
 * @version November 29, 2016, 2:26 am UTC
 */
class Modelo extends Model
{

    public $table = 'modelos';

    public $fillable = [
        'nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required'
    ];

    
}
