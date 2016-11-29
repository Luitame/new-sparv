<?php

use Faker\Factory as Faker;
use App\Models\RegraExtra;
use App\Repositories\RegraExtraRepository;

trait MakeRegraExtraTrait
{
    /**
     * Create fake instance of RegraExtra and save it in database
     *
     * @param array $regraExtraFields
     * @return RegraExtra
     */
    public function makeRegraExtra($regraExtraFields = [])
    {
        /** @var RegraExtraRepository $regraExtraRepo */
        $regraExtraRepo = App::make(RegraExtraRepository::class);
        $theme = $this->fakeRegraExtraData($regraExtraFields);
        return $regraExtraRepo->create($theme);
    }

    /**
     * Get fake instance of RegraExtra
     *
     * @param array $regraExtraFields
     * @return RegraExtra
     */
    public function fakeRegraExtra($regraExtraFields = [])
    {
        return new RegraExtra($this->fakeRegraExtraData($regraExtraFields));
    }

    /**
     * Get fake data of RegraExtra
     *
     * @param array $postFields
     * @return array
     */
    public function fakeRegraExtraData($regraExtraFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'inicio' => $fake->word,
            'fim' => $fake->word,
            'criterio' => $fake->word,
            'pontos' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $regraExtraFields);
    }
}
