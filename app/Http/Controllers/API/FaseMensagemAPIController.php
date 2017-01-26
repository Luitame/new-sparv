<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFaseAPIRequest;
use App\Http\Requests\API\UpdateFaseAPIRequest;
use App\Models\Fase;
use App\Repositories\FaseMensagemRepository;
use App\Repositories\FaseRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class FaseMensagemAPIController
 * @package App\Http\Controllers\API
 */
class FaseMensagemAPIController extends AppBaseController
{
    /** @var  FaseRepository */
    private $faseMensagemRepository;

    /**
     * FaseMensagemAPIController constructor.
     * @param FaseRepository $faseRepo
     */
    public function __construct(FaseMensagemRepository $faseMensagemRepo)
    {
        $this->faseMensagemRepository = $faseMensagemRepo;
    }

    /**
     * Display a listing of the Fase.
     * GET|HEAD /fases
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->faseMensagemRepository->pushCriteria(new RequestCriteria($request));
        $this->faseMensagemRepository->pushCriteria(new LimitOffsetCriteria($request));
        $fases = $this->faseMensagemRepository->all();

        return $this->sendResponse($fases->toArray(), 'Fases retrieved successfully');
    }

    /**
     * Store a newly created Fase in storage.
     * POST /fases
     *
     * @param CreateFaseAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFaseAPIRequest $request)
    {
        $input = $request->all();

        $fases = $this->faseMensagemRepository->create($input);

        return $this->sendResponse($fases->toArray(), 'Fase saved successfully');
    }

    /**
     * Display the specified Fase.
     * GET|HEAD /fases/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Fase $fase */
        $fase = $this->faseMensagemRepository->findWithoutFail($id);

        if (empty($fase)) {
            return $this->sendError('Fase not found');
        }

        return $this->sendResponse($fase->toArray(), 'Fase retrieved successfully');
    }

    /**
     * Update the specified Fase in storage.
     * PUT/PATCH /fases/{id}
     *
     * @param  int $id
     * @param UpdateFaseAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFaseAPIRequest $request)
    {
        $input = $request->all();

        /** @var Fase $fase */
        $fase = $this->faseMensagemRepository->findWithoutFail($id);

        if (empty($fase)) {
            return $this->sendError('Fase not found');
        }

        $fase = $this->faseMensagemRepository->update($input, $id);

        return $this->sendResponse($fase->toArray(), 'Fase updated successfully');
    }

    /**
     * Remove the specified Fase from storage.
     * DELETE /fases/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Fase $fase */
        $fase = $this->faseMensagemRepository->findWithoutFail($id);

        if (empty($fase)) {
            return $this->sendError('Fase not found');
        }

        $fase->delete();

        return $this->sendResponse($id, 'Fase deleted successfully');
    }
}
