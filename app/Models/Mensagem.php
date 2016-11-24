<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Mensagem
 * @package App\Models
 * @version November 24, 2016, 4:43 pm UTC
 */
class Mensagem extends Model
{

    public $table = 'mensagems';
    


    public $fillable = [
        'mensagemTxt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'mensagemTxt' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mensagemTxt' => 'required|max:255'
    ];

    
}
