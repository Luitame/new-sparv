<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pergunta
 * @package App\Models
 * @version November 24, 2016, 5:39 pm UTC
 */
class Pergunta extends Model
{

    public $table = 'perguntas';
    


    public $fillable = [
        'perguntaTxt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'perguntaTxt' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'perguntaTxt' => 'required|max:255'
    ];

    public function fases()
    {
        return $this->belongsToMany(Fase::class, 'fases_perguntas');
    }
    
}
