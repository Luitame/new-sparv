<?php

use Faker\Factory as Faker;
use App\Models\Pergunta;
use App\Repositories\PerguntaRepository;

trait MakePerguntaTrait
{
    /**
     * Create fake instance of Pergunta and save it in database
     *
     * @param array $perguntaFields
     * @return Pergunta
     */
    public function makePergunta($perguntaFields = [])
    {
        /** @var PerguntaRepository $perguntaRepo */
        $perguntaRepo = App::make(PerguntaRepository::class);
        $theme = $this->fakePerguntaData($perguntaFields);
        return $perguntaRepo->create($theme);
    }

    /**
     * Get fake instance of Pergunta
     *
     * @param array $perguntaFields
     * @return Pergunta
     */
    public function fakePergunta($perguntaFields = [])
    {
        return new Pergunta($this->fakePerguntaData($perguntaFields));
    }

    /**
     * Get fake data of Pergunta
     *
     * @param array $postFields
     * @return array
     */
    public function fakePerguntaData($perguntaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'perguntaTxt' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $perguntaFields);
    }
}
