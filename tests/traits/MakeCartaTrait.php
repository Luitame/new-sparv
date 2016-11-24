<?php

use Faker\Factory as Faker;
use App\Models\Carta;
use App\Repositories\CartaRepository;

trait MakeCartaTrait
{
    /**
     * Create fake instance of Carta and save it in database
     *
     * @param array $cartaFields
     * @return Carta
     */
    public function makeCarta($cartaFields = [])
    {
        /** @var CartaRepository $cartaRepo */
        $cartaRepo = App::make(CartaRepository::class);
        $theme = $this->fakeCartaData($cartaFields);
        return $cartaRepo->create($theme);
    }

    /**
     * Get fake instance of Carta
     *
     * @param array $cartaFields
     * @return Carta
     */
    public function fakeCarta($cartaFields = [])
    {
        return new Carta($this->fakeCartaData($cartaFields));
    }

    /**
     * Get fake data of Carta
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCartaData($cartaFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nome' => $fake->word,
            'cor' => $fake->word,
            'simbolo' => $fake->word,
            'verso' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $cartaFields);
    }
}
