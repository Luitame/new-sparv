<?php

use Faker\Factory as Faker;
use App\Models\Tempo;
use App\Repositories\TempoRepository;

trait MakeTempoTrait
{
    /**
     * Create fake instance of Tempo and save it in database
     *
     * @param array $tempoFields
     * @return Tempo
     */
    public function makeTempo($tempoFields = [])
    {
        /** @var TempoRepository $tempoRepo */
        $tempoRepo = App::make(TempoRepository::class);
        $theme = $this->fakeTempoData($tempoFields);
        return $tempoRepo->create($theme);
    }

    /**
     * Get fake instance of Tempo
     *
     * @param array $tempoFields
     * @return Tempo
     */
    public function fakeTempo($tempoFields = [])
    {
        return new Tempo($this->fakeTempoData($tempoFields));
    }

    /**
     * Get fake data of Tempo
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTempoData($tempoFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'inicio' => $fake->word,
            'fim' => $fake->word,
            'ordem' => $fake->word,
            'mudandoEm' => $fake->word,
            'visibilidadeInicial' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $tempoFields);
    }
}
