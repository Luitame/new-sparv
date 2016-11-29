<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class RegraExtra
 * @package App\Models
 * @version November 29, 2016, 12:36 am UTC
 */
class RegraExtra extends Model
{

    public $table = 'regra_extras';

    public $fillable = [
        'inicio',
        'fim',
        'criterio',
        'pontos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'inicio' => 'string',
        'fim' => 'string',
        'criterio' => 'string',
        'pontos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'inicio' => 'required',
        'fim' => 'required',
        'criterio' => 'required',
        'pontos' => 'required'
    ];

    public function mensagems()
    {
        return $this->belongsToMany(Mensagem::class, 'regra_extras_mensagems')
            ->withPivot('fase_id', 'mensagem_id', 'ordem', 'pontos')
            ->withTimestamps();
    }

    public function perguntas()
    {
        return $this->belongsToMany(Pergunta::class, 'regra_extras_perguntas')
            ->withPivot('fase_id', 'pergunta_id', 'ordem', 'pontos')
            ->withTimestamps();
    }
    
}
