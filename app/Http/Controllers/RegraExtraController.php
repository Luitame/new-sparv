<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRegraExtraRequest;
use App\Http\Requests\UpdateRegraExtraRequest;
use App\Repositories\RegraExtraRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RegraExtraController extends AppBaseController
{
    /** @var  RegraExtraRepository */
    private $regraExtraRepository;

    public function __construct(RegraExtraRepository $regraExtraRepo)
    {
        $this->regraExtraRepository = $regraExtraRepo;
    }

    /**
     * Display a listing of the RegraExtra.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->regraExtraRepository->pushCriteria(new RequestCriteria($request));
        $regraExtras = $this->regraExtraRepository->all();

        return view('regra_extras.index')
            ->with('regraExtras', $regraExtras);
    }

    /**
     * Show the form for creating a new RegraExtra.
     *
     * @return Response
     */
    public function create()
    {
        return view('regra_extras.create');
    }

    /**
     * Store a newly created RegraExtra in storage.
     *
     * @param CreateRegraExtraRequest $request
     *
     * @return Response
     */
    public function store(CreateRegraExtraRequest $request)
    {
        $input = $request->all();

        $regraExtra = $this->regraExtraRepository->create($input);

        Flash::success('<b>Regra Extra</b> salvo com sucesso.');

        return redirect(route('regraExtras.index'));
    }

    /**
     * Display the specified RegraExtra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $regraExtra = $this->regraExtraRepository->findWithoutFail($id);

        if (empty($regraExtra)) {
            Flash::error('<b>Regra Extra</b> não encontrado');

            return redirect(route('regraExtras.index'));
        }

        return view('regra_extras.show')->with('regraExtra', $regraExtra);
    }

    /**
     * Show the form for editing the specified RegraExtra.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $regraExtra = $this->regraExtraRepository->findWithoutFail($id);

        if (empty($regraExtra)) {
            Flash::error('<b>Regra Extra</b> não encontrado');

            return redirect(route('regraExtras.index'));
        }

        return view('regra_extras.edit')->with('regraExtra', $regraExtra);
    }

    /**
     * Update the specified RegraExtra in storage.
     *
     * @param  int              $id
     * @param UpdateRegraExtraRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegraExtraRequest $request)
    {
        $regraExtra = $this->regraExtraRepository->findWithoutFail($id);

        if (empty($regraExtra)) {
            Flash::error('<b>Regra Extra</b> não encontrado');

            return redirect(route('regraExtras.index'));
        }

        $regraExtra = $this->regraExtraRepository->update($request->all(), $id);

        Flash::success('<b>Regra Extra</b> atualizado com sucesso.');

        return redirect(route('regraExtras.index'));
    }

    /**
     * Remove the specified RegraExtra from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $regraExtra = $this->regraExtraRepository->findWithoutFail($id);

        if (empty($regraExtra)) {
            Flash::error('<b>Regra Extra</b> não encontrado');

            return redirect(route('regraExtras.index'));
        }

        $this->regraExtraRepository->delete($id);

        Flash::success('<b>Regra Extra</b> deletado com sucesso.');

        return redirect(route('regraExtras.index'));
    }
}
