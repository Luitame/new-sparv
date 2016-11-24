<?php

use Faker\Factory as Faker;
use App\Models\InstrucaoInicial;
use App\Repositories\InstrucaoInicialRepository;

trait MakeInstrucaoInicialTrait
{
    /**
     * Create fake instance of InstrucaoInicial and save it in database
     *
     * @param array $instrucaoInicialFields
     * @return InstrucaoInicial
     */
    public function makeInstrucaoInicial($instrucaoInicialFields = [])
    {
        /** @var InstrucaoInicialRepository $instrucaoInicialRepo */
        $instrucaoInicialRepo = App::make(InstrucaoInicialRepository::class);
        $theme = $this->fakeInstrucaoInicialData($instrucaoInicialFields);
        return $instrucaoInicialRepo->create($theme);
    }

    /**
     * Get fake instance of InstrucaoInicial
     *
     * @param array $instrucaoInicialFields
     * @return InstrucaoInicial
     */
    public function fakeInstrucaoInicial($instrucaoInicialFields = [])
    {
        return new InstrucaoInicial($this->fakeInstrucaoInicialData($instrucaoInicialFields));
    }

    /**
     * Get fake data of InstrucaoInicial
     *
     * @param array $postFields
     * @return array
     */
    public function fakeInstrucaoInicialData($instrucaoInicialFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'instrucaoTxt' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $instrucaoInicialFields);
    }
}
