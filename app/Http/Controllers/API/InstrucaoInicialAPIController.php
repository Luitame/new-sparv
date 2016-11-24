<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateInstrucaoInicialAPIRequest;
use App\Http\Requests\API\UpdateInstrucaoInicialAPIRequest;
use App\Models\InstrucaoInicial;
use App\Repositories\InstrucaoInicialRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class InstrucaoInicialController
 * @package App\Http\Controllers\API
 */

class InstrucaoInicialAPIController extends AppBaseController
{
    /** @var  InstrucaoInicialRepository */
    private $instrucaoInicialRepository;

    public function __construct(InstrucaoInicialRepository $instrucaoInicialRepo)
    {
        $this->instrucaoInicialRepository = $instrucaoInicialRepo;
    }

    /**
     * Display a listing of the InstrucaoInicial.
     * GET|HEAD /instrucaoInicials
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->instrucaoInicialRepository->pushCriteria(new RequestCriteria($request));
        $this->instrucaoInicialRepository->pushCriteria(new LimitOffsetCriteria($request));
        $instrucaoInicials = $this->instrucaoInicialRepository->all();

        return $this->sendResponse($instrucaoInicials->toArray(), 'Instrucao Inicials retrieved successfully');
    }

    /**
     * Store a newly created InstrucaoInicial in storage.
     * POST /instrucaoInicials
     *
     * @param CreateInstrucaoInicialAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateInstrucaoInicialAPIRequest $request)
    {
        $input = $request->all();

        $instrucaoInicials = $this->instrucaoInicialRepository->create($input);

        return $this->sendResponse($instrucaoInicials->toArray(), 'Instrucao Inicial saved successfully');
    }

    /**
     * Display the specified InstrucaoInicial.
     * GET|HEAD /instrucaoInicials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var InstrucaoInicial $instrucaoInicial */
        $instrucaoInicial = $this->instrucaoInicialRepository->findWithoutFail($id);

        if (empty($instrucaoInicial)) {
            return $this->sendError('Instrucao Inicial not found');
        }

        return $this->sendResponse($instrucaoInicial->toArray(), 'Instrucao Inicial retrieved successfully');
    }

    /**
     * Update the specified InstrucaoInicial in storage.
     * PUT/PATCH /instrucaoInicials/{id}
     *
     * @param  int $id
     * @param UpdateInstrucaoInicialAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstrucaoInicialAPIRequest $request)
    {
        $input = $request->all();

        /** @var InstrucaoInicial $instrucaoInicial */
        $instrucaoInicial = $this->instrucaoInicialRepository->findWithoutFail($id);

        if (empty($instrucaoInicial)) {
            return $this->sendError('Instrucao Inicial not found');
        }

        $instrucaoInicial = $this->instrucaoInicialRepository->update($input, $id);

        return $this->sendResponse($instrucaoInicial->toArray(), 'InstrucaoInicial updated successfully');
    }

    /**
     * Remove the specified InstrucaoInicial from storage.
     * DELETE /instrucaoInicials/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var InstrucaoInicial $instrucaoInicial */
        $instrucaoInicial = $this->instrucaoInicialRepository->findWithoutFail($id);

        if (empty($instrucaoInicial)) {
            return $this->sendError('Instrucao Inicial not found');
        }

        $instrucaoInicial->delete();

        return $this->sendResponse($id, 'Instrucao Inicial deleted successfully');
    }
}
