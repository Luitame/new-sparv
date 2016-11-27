<?php

use Faker\Factory as Faker;
use App\Models\Fase;
use App\Repositories\FaseRepository;

trait MakeFaseTrait
{
    /**
     * Create fake instance of Fase and save it in database
     *
     * @param array $faseFields
     * @return Fase
     */
    public function makeFase($faseFields = [])
    {
        /** @var FaseRepository $faseRepo */
        $faseRepo = App::make(FaseRepository::class);
        $theme = $this->fakeFaseData($faseFields);
        return $faseRepo->create($theme);
    }

    /**
     * Get fake instance of Fase
     *
     * @param array $faseFields
     * @return Fase
     */
    public function fakeFase($faseFields = [])
    {
        return new Fase($this->fakeFaseData($faseFields));
    }

    /**
     * Get fake data of Fase
     *
     * @param array $postFields
     * @return array
     */
    public function fakeFaseData($faseFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'criterio' => $fake->word,
            'pontos' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $faseFields);
    }
}
