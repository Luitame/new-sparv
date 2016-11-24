<?php

use Faker\Factory as Faker;
use App\Models\Mensagem;
use App\Repositories\MensagemRepository;

trait MakeMensagemTrait
{
    /**
     * Create fake instance of Mensagem and save it in database
     *
     * @param array $mensagemFields
     * @return Mensagem
     */
    public function makeMensagem($mensagemFields = [])
    {
        /** @var MensagemRepository $mensagemRepo */
        $mensagemRepo = App::make(MensagemRepository::class);
        $theme = $this->fakeMensagemData($mensagemFields);
        return $mensagemRepo->create($theme);
    }

    /**
     * Get fake instance of Mensagem
     *
     * @param array $mensagemFields
     * @return Mensagem
     */
    public function fakeMensagem($mensagemFields = [])
    {
        return new Mensagem($this->fakeMensagemData($mensagemFields));
    }

    /**
     * Get fake data of Mensagem
     *
     * @param array $postFields
     * @return array
     */
    public function fakeMensagemData($mensagemFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'mensagemTxt' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $mensagemFields);
    }
}
