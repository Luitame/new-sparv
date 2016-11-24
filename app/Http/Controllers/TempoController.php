<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTempoRequest;
use App\Http\Requests\UpdateTempoRequest;
use App\Repositories\TempoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class TempoController extends AppBaseController
{
    /** @var  TempoRepository */
    private $tempoRepository;

    public function __construct(TempoRepository $tempoRepo)
    {
        $this->tempoRepository = $tempoRepo;
    }

    /**
     * Display a listing of the Tempo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tempoRepository->pushCriteria(new RequestCriteria($request));
        $tempos = $this->tempoRepository->all();

        return view('tempos.index')
            ->with('tempos', $tempos);
    }

    /**
     * Show the form for creating a new Tempo.
     *
     * @return Response
     */
    public function create()
    {
        return view('tempos.create');
    }

    /**
     * Store a newly created Tempo in storage.
     *
     * @param CreateTempoRequest $request
     *
     * @return Response
     */
    public function store(CreateTempoRequest $request)
    {
        $input = $request->all();

        $tempo = $this->tempoRepository->create($input);

        Flash::success('<b>Tempo</b> salvo com sucesso.');

        return redirect(route('tempos.index'));
    }

    /**
     * Display the specified Tempo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tempo = $this->tempoRepository->findWithoutFail($id);

        if (empty($tempo)) {
            Flash::error('<b>Tempo</b> não encontrado');

            return redirect(route('tempos.index'));
        }

        return view('tempos.show')->with('tempo', $tempo);
    }

    /**
     * Show the form for editing the specified Tempo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tempo = $this->tempoRepository->findWithoutFail($id);

        if (empty($tempo)) {
            Flash::error('<b>Tempo</b> não encontrado');

            return redirect(route('tempos.index'));
        }

        return view('tempos.edit')->with('tempo', $tempo);
    }

    /**
     * Update the specified Tempo in storage.
     *
     * @param  int              $id
     * @param UpdateTempoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTempoRequest $request)
    {
        $tempo = $this->tempoRepository->findWithoutFail($id);

        if (empty($tempo)) {
            Flash::error('<b>Tempo</b> não encontrado');

            return redirect(route('tempos.index'));
        }

        $tempo = $this->tempoRepository->update($request->all(), $id);

        Flash::success('<b>Tempo</b> atualizado com sucesso.');

        return redirect(route('tempos.index'));
    }

    /**
     * Remove the specified Tempo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tempo = $this->tempoRepository->findWithoutFail($id);

        if (empty($tempo)) {
            Flash::error('<b>Tempo</b> não encontrado');

            return redirect(route('tempos.index'));
        }

        $this->tempoRepository->delete($id);

        Flash::success('<b>Tempo</b> deletado com sucesso.');

        return redirect(route('tempos.index'));
    }
}
