<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFaseRequest;
use App\Http\Requests\UpdateFaseRequest;
use App\Repositories\FaseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FaseController extends AppBaseController
{
    /** @var  FaseRepository */
    private $faseRepository;

    public function __construct(FaseRepository $faseRepo)
    {
        $this->faseRepository = $faseRepo;
    }

    /**
     * Display a listing of the Fase.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->faseRepository->pushCriteria(new RequestCriteria($request));
        $fases = $this->faseRepository->all();

        return view('fases.index')
            ->with('fases', $fases);
    }

    /**
     * Show the form for creating a new Fase.
     *
     * @return Response
     */
    public function create()
    {
        return view('fases.create');
    }

    /**
     * Store a newly created Fase in storage.
     *
     * @param CreateFaseRequest $request
     *
     * @return Response
     */
    public function store(CreateFaseRequest $request)
    {
        $input = $request->all();

        $fase = $this->faseRepository->create($input);

        Flash::success('<b>Fase</b> salvo com sucesso.');

        return redirect(route('fases.index'));
    }

    /**
     * Display the specified Fase.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fase = $this->faseRepository->findWithoutFail($id);

        if (empty($fase)) {
            Flash::error('<b>Fase</b> não encontrado');

            return redirect(route('fases.index'));
        }

        return view('fases.show')->with('fase', $fase);
    }

    /**
     * Show the form for editing the specified Fase.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fase = $this->faseRepository->findWithoutFail($id);

        if (empty($fase)) {
            Flash::error('<b>Fase</b> não encontrado');

            return redirect(route('fases.index'));
        }

        return view('fases.edit')->with('fase', $fase);
    }

    /**
     * Update the specified Fase in storage.
     *
     * @param  int              $id
     * @param UpdateFaseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaseRequest $request)
    {
        $fase = $this->faseRepository->findWithoutFail($id);

        if (empty($fase)) {
            Flash::error('<b>Fase</b> não encontrado');

            return redirect(route('fases.index'));
        }

        $fase = $this->faseRepository->update($request->all(), $id);

        Flash::success('<b>Fase</b> atualizado com sucesso.');

        return redirect(route('fases.index'));
    }

    /**
     * Remove the specified Fase from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fase = $this->faseRepository->findWithoutFail($id);

        if (empty($fase)) {
            Flash::error('<b>Fase</b> não encontrado');

            return redirect(route('fases.index'));
        }

        $this->faseRepository->delete($id);

        Flash::success('<b>Fase</b> deletado com sucesso.');

        return redirect(route('fases.index'));
    }
}
