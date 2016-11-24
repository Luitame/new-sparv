<?php

use Faker\Factory as Faker;
use App\Models\VisorPontuacao;
use App\Repositories\VisorPontuacaoRepository;

trait MakeVisorPontuacaoTrait
{
    /**
     * Create fake instance of VisorPontuacao and save it in database
     *
     * @param array $visorPontuacaoFields
     * @return VisorPontuacao
     */
    public function makeVisorPontuacao($visorPontuacaoFields = [])
    {
        /** @var VisorPontuacaoRepository $visorPontuacaoRepo */
        $visorPontuacaoRepo = App::make(VisorPontuacaoRepository::class);
        $theme = $this->fakeVisorPontuacaoData($visorPontuacaoFields);
        return $visorPontuacaoRepo->create($theme);
    }

    /**
     * Get fake instance of VisorPontuacao
     *
     * @param array $visorPontuacaoFields
     * @return VisorPontuacao
     */
    public function fakeVisorPontuacao($visorPontuacaoFields = [])
    {
        return new VisorPontuacao($this->fakeVisorPontuacaoData($visorPontuacaoFields));
    }

    /**
     * Get fake data of VisorPontuacao
     *
     * @param array $postFields
     * @return array
     */
    public function fakeVisorPontuacaoData($visorPontuacaoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'visibilidadeInicial' => $fake->word,
            'mudandoEm' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $visorPontuacaoFields);
    }
}
