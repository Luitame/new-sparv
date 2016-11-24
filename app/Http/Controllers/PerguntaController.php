<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePerguntaRequest;
use App\Http\Requests\UpdatePerguntaRequest;
use App\Repositories\PerguntaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PerguntaController extends AppBaseController
{
    /** @var  PerguntaRepository */
    private $perguntaRepository;

    public function __construct(PerguntaRepository $perguntaRepo)
    {
        $this->perguntaRepository = $perguntaRepo;
    }

    /**
     * Display a listing of the Pergunta.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->perguntaRepository->pushCriteria(new RequestCriteria($request));
        $perguntas = $this->perguntaRepository->paginate(10);

        return view('perguntas.index')
            ->with('perguntas', $perguntas);
    }

    /**
     * Show the form for creating a new Pergunta.
     *
     * @return Response
     */
    public function create()
    {
        return view('perguntas.create');
    }

    /**
     * Store a newly created Pergunta in storage.
     *
     * @param CreatePerguntaRequest $request
     *
     * @return Response
     */
    public function store(CreatePerguntaRequest $request)
    {
        $input = $request->all();

        $pergunta = $this->perguntaRepository->create($input);

        Flash::success('<b>Pergunta</b> salvo com sucesso.');

        return redirect(route('perguntas.index'));
    }

    /**
     * Display the specified Pergunta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pergunta = $this->perguntaRepository->findWithoutFail($id);

        if (empty($pergunta)) {
            Flash::error('<b>Pergunta</b> não encontrado');

            return redirect(route('perguntas.index'));
        }

        return view('perguntas.show')->with('pergunta', $pergunta);
    }

    /**
     * Show the form for editing the specified Pergunta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pergunta = $this->perguntaRepository->findWithoutFail($id);

        if (empty($pergunta)) {
            Flash::error('<b>Pergunta</b> não encontrado');

            return redirect(route('perguntas.index'));
        }

        return view('perguntas.edit')->with('pergunta', $pergunta);
    }

    /**
     * Update the specified Pergunta in storage.
     *
     * @param  int              $id
     * @param UpdatePerguntaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerguntaRequest $request)
    {
        $pergunta = $this->perguntaRepository->findWithoutFail($id);

        if (empty($pergunta)) {
            Flash::error('<b>Pergunta</b> não encontrado');

            return redirect(route('perguntas.index'));
        }

        $pergunta = $this->perguntaRepository->update($request->all(), $id);

        Flash::success('<b>Pergunta</b> atualizado com sucesso.');

        return redirect(route('perguntas.index'));
    }

    /**
     * Remove the specified Pergunta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pergunta = $this->perguntaRepository->findWithoutFail($id);

        if (empty($pergunta)) {
            Flash::error('<b>Pergunta</b> não encontrado');

            return redirect(route('perguntas.index'));
        }

        $this->perguntaRepository->delete($id);

        Flash::success('<b>Pergunta</b> deletado com sucesso.');

        return redirect(route('perguntas.index'));
    }
}
