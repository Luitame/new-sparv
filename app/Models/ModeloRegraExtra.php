<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class ModeloRegraExtra
 * @package App\Models
 */
class ModeloRegraExtra extends Model
{

    public $table = 'modelos_regra_extras';

    public $fillable = [
        'modelo_id',
        'regra_extra_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'modelo_id' => 'integer',
        'regra_extra_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'modelo_id' => 'required|integer|numeric|exists:modelos,id',
        'regra_extra_id' => 'required|integer|numeric|exists:regra_extras,id'
    ];

}
