<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class InstrucaoInicial
 * @package App\Models
 * @version November 24, 2016, 4:03 pm UTC
 */
class InstrucaoInicial extends Model
{

    public $table = 'instrucao_inicials';
    


    public $fillable = [
        'instrucaoTxt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'instrucaoTxt' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'instrucaoTxt' => 'required|max:255'
    ];

    
}
