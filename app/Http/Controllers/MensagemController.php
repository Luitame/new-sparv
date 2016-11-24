<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMensagemRequest;
use App\Http\Requests\UpdateMensagemRequest;
use App\Repositories\MensagemRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MensagemController extends AppBaseController
{
    /** @var  MensagemRepository */
    private $mensagemRepository;

    public function __construct(MensagemRepository $mensagemRepo)
    {
        $this->mensagemRepository = $mensagemRepo;
    }

    /**
     * Display a listing of the Mensagem.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mensagemRepository->pushCriteria(new RequestCriteria($request));
        $mensagems = $this->mensagemRepository->paginate(10);

        return view('mensagems.index')
            ->with('mensagems', $mensagems);
    }

    /**
     * Show the form for creating a new Mensagem.
     *
     * @return Response
     */
    public function create()
    {
        return view('mensagems.create');
    }

    /**
     * Store a newly created Mensagem in storage.
     *
     * @param CreateMensagemRequest $request
     *
     * @return Response
     */
    public function store(CreateMensagemRequest $request)
    {
        $input = $request->all();

        $mensagem = $this->mensagemRepository->create($input);

        Flash::success('<b>Mensagem</b> salvo com sucesso.');

        return redirect(route('mensagems.index'));
    }

    /**
     * Display the specified Mensagem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $mensagem = $this->mensagemRepository->findWithoutFail($id);

        if (empty($mensagem)) {
            Flash::error('<b>Mensagem</b> não encontrado');

            return redirect(route('mensagems.index'));
        }

        return view('mensagems.show')->with('mensagem', $mensagem);
    }

    /**
     * Show the form for editing the specified Mensagem.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $mensagem = $this->mensagemRepository->findWithoutFail($id);

        if (empty($mensagem)) {
            Flash::error('<b>Mensagem</b> não encontrado');

            return redirect(route('mensagems.index'));
        }

        return view('mensagems.edit')->with('mensagem', $mensagem);
    }

    /**
     * Update the specified Mensagem in storage.
     *
     * @param  int              $id
     * @param UpdateMensagemRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMensagemRequest $request)
    {
        $mensagem = $this->mensagemRepository->findWithoutFail($id);

        if (empty($mensagem)) {
            Flash::error('<b>Mensagem</b> não encontrado');

            return redirect(route('mensagems.index'));
        }

        $mensagem = $this->mensagemRepository->update($request->all(), $id);

        Flash::success('<b>Mensagem</b> atualizado com sucesso.');

        return redirect(route('mensagems.index'));
    }

    /**
     * Remove the specified Mensagem from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $mensagem = $this->mensagemRepository->findWithoutFail($id);

        if (empty($mensagem)) {
            Flash::error('<b>Mensagem</b> não encontrado');

            return redirect(route('mensagems.index'));
        }

        $this->mensagemRepository->delete($id);

        Flash::success('<b>Mensagem</b> deletado com sucesso.');

        return redirect(route('mensagems.index'));
    }
}
