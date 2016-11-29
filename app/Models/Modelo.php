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
        'nome',
        'tempo_id',
        'visor_pontuacao_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nome' => 'string',
        'tempo_id' => 'integer',
        'visor_pontuacao_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'tempo_id' => 'required',
        'visor_pontuacao_id' => 'required'
    ];

    public function tempo(){
        return $this->belongsTo(Tempo::class);
    }
    
}
