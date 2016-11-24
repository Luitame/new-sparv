<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVisorPontuacaoRequest;
use App\Http\Requests\UpdateVisorPontuacaoRequest;
use App\Repositories\VisorPontuacaoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class VisorPontuacaoController extends AppBaseController
{
    /** @var  VisorPontuacaoRepository */
    private $visorPontuacaoRepository;

    public function __construct(VisorPontuacaoRepository $visorPontuacaoRepo)
    {
        $this->visorPontuacaoRepository = $visorPontuacaoRepo;
    }

    /**
     * Display a listing of the VisorPontuacao.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->visorPontuacaoRepository->pushCriteria(new RequestCriteria($request));
        $visorPontuacaos = $this->visorPontuacaoRepository->paginate(10);

        return view('visor_pontuacaos.index')
            ->with('visorPontuacaos', $visorPontuacaos);
    }

    /**
     * Show the form for creating a new VisorPontuacao.
     *
     * @return Response
     */
    public function create()
    {
        return view('visor_pontuacaos.create');
    }

    /**
     * Store a newly created VisorPontuacao in storage.
     *
     * @param CreateVisorPontuacaoRequest $request
     *
     * @return Response
     */
    public function store(CreateVisorPontuacaoRequest $request)
    {
        $input = $request->all();

        $visorPontuacao = $this->visorPontuacaoRepository->create($input);

        Flash::success('<b>Visor Pontuacao</b> salvo com sucesso.');

        return redirect(route('visorPontuacaos.index'));
    }

    /**
     * Display the specified VisorPontuacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $visorPontuacao = $this->visorPontuacaoRepository->findWithoutFail($id);

        if (empty($visorPontuacao)) {
            Flash::error('<b>Visor Pontuacao</b> não encontrado');

            return redirect(route('visorPontuacaos.index'));
        }

        return view('visor_pontuacaos.show')->with('visorPontuacao', $visorPontuacao);
    }

    /**
     * Show the form for editing the specified VisorPontuacao.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $visorPontuacao = $this->visorPontuacaoRepository->findWithoutFail($id);

        if (empty($visorPontuacao)) {
            Flash::error('<b>Visor Pontuacao</b> não encontrado');

            return redirect(route('visorPontuacaos.index'));
        }

        return view('visor_pontuacaos.edit')->with('visorPontuacao', $visorPontuacao);
    }

    /**
     * Update the specified VisorPontuacao in storage.
     *
     * @param  int              $id
     * @param UpdateVisorPontuacaoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisorPontuacaoRequest $request)
    {
        $visorPontuacao = $this->visorPontuacaoRepository->findWithoutFail($id);

        if (empty($visorPontuacao)) {
            Flash::error('<b>Visor Pontuacao</b> não encontrado');

            return redirect(route('visorPontuacaos.index'));
        }

        $visorPontuacao = $this->visorPontuacaoRepository->update($request->all(), $id);

        Flash::success('<b>Visor Pontuacao</b> atualizado com sucesso.');

        return redirect(route('visorPontuacaos.index'));
    }

    /**
     * Remove the specified VisorPontuacao from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $visorPontuacao = $this->visorPontuacaoRepository->findWithoutFail($id);

        if (empty($visorPontuacao)) {
            Flash::error('<b>Visor Pontuacao</b> não encontrado');

            return redirect(route('visorPontuacaos.index'));
        }

        $this->visorPontuacaoRepository->delete($id);

        Flash::success('<b>Visor Pontuacao</b> deletado com sucesso.');

        return redirect(route('visorPontuacaos.index'));
    }
}
