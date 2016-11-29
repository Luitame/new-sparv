<?php

use Faker\Factory as Faker;
use App\Models\Modelo;
use App\Repositories\ModeloRepository;

trait MakeModeloTrait
{
    /**
     * Create fake instance of Modelo and save it in database
     *
     * @param array $modeloFields
     * @return Modelo
     */
    public function makeModelo($modeloFields = [])
    {
        /** @var ModeloRepository $modeloRepo */
        $modeloRepo = App::make(ModeloRepository::class);
        $theme = $this->fakeModeloData($modeloFields);
        return $modeloRepo->create($theme);
    }

    /**
     * Get fake instance of Modelo
     *
     * @param array $modeloFields
     * @return Modelo
     */
    public function fakeModelo($modeloFields = [])
    {
        return new Modelo($this->fakeModeloData($modeloFields));
    }

    /**
     * Get fake data of Modelo
     *
     * @param array $postFields
     * @return array
     */
    public function fakeModeloData($modeloFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nome' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $modeloFields);
    }
}
