<?php

use App\Models\Mensagem;
use App\Repositories\MensagemRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MensagemRepositoryTest extends TestCase
{
    use MakeMensagemTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var MensagemRepository
     */
    protected $mensagemRepo;

    public function setUp()
    {
        parent::setUp();
        $this->mensagemRepo = App::make(MensagemRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateMensagem()
    {
        $mensagem = $this->fakeMensagemData();
        $createdMensagem = $this->mensagemRepo->create($mensagem);
        $createdMensagem = $createdMensagem->toArray();
        $this->assertArrayHasKey('id', $createdMensagem);
        $this->assertNotNull($createdMensagem['id'], 'Created Mensagem must have id specified');
        $this->assertNotNull(Mensagem::find($createdMensagem['id']), 'Mensagem with given id must be in DB');
        $this->assertModelData($mensagem, $createdMensagem);
    }

    /**
     * @test read
     */
    public function testReadMensagem()
    {
        $mensagem = $this->makeMensagem();
        $dbMensagem = $this->mensagemRepo->find($mensagem->id);
        $dbMensagem = $dbMensagem->toArray();
        $this->assertModelData($mensagem->toArray(), $dbMensagem);
    }

    /**
     * @test update
     */
    public function testUpdateMensagem()
    {
        $mensagem = $this->makeMensagem();
        $fakeMensagem = $this->fakeMensagemData();
        $updatedMensagem = $this->mensagemRepo->update($fakeMensagem, $mensagem->id);
        $this->assertModelData($fakeMensagem, $updatedMensagem->toArray());
        $dbMensagem = $this->mensagemRepo->find($mensagem->id);
        $this->assertModelData($fakeMensagem, $dbMensagem->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteMensagem()
    {
        $mensagem = $this->makeMensagem();
        $resp = $this->mensagemRepo->delete($mensagem->id);
        $this->assertTrue($resp);
        $this->assertNull(Mensagem::find($mensagem->id), 'Mensagem should not exist in DB');
    }
}
