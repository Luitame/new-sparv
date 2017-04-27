<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fase
 * @package App\Models
 * @version November 27, 2016, 11:33 am UTC
 */
class Fase extends Model
{

    public $table = 'fases';

    public $fillable = [
        'carta_id',
        'criterio',
        'pontos'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'carta_id' => 'integer',
        'criterio' => 'string',
        'pontos' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'carta_id' => 'required|numeric|integer|between:1,895',
        'criterio' => 'required|string|min:5|max:8',
        'pontos' => 'required|numeric|integer|between:0,13',
        'mensagemTxt.*' => 'required',
        'mensagemId.*' => 'required|numeric|integer|exists:cartas,id',
        'mensagemOrdem.*' => 'required|string|min:5|max:6',
        'mensagemPontos.*' => 'required|numeric|integer|between:0,13'
    ];

    public function carta()
    {
        return $this->belongsTo(Carta::class);
    }

    public function mensagems()
    {
        return $this->belongsToMany(Mensagem::class, 'fases_mensagems')
            ->withTimestamps()
            ->withPivot('ordem', 'pontos');
    }

    public function perguntas()
    {
        return $this->belongsToMany(Pergunta::class, 'fases_perguntas')
            ->withTimestamps()
            ->withPivot('ordem', 'pontos');
    }

    public function modelos()
    {
        return $this->belongsToMany(Modelo::class, 'modelos_fases');
    }

}
