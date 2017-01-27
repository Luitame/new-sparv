<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateModeloAPIRequest;
use App\Http\Requests\API\UpdateModeloAPIRequest;
use App\Models\Modelo;
use App\Repositories\ModeloInstrucaoInicialRepository;
use App\Repositories\ModeloRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class ModeloInstrucaoInicialAPIController
 * @package App\Http\Controllers\API
 */
class ModeloInstrucaoInicialAPIController extends AppBaseController
{
    /**
     * @var ModeloInstrucaoInicialRepository
     */
    private $modeloInstrucaoInicialRepository;

    public function __construct(ModeloInstrucaoInicialRepository $modeloInstrucaoInicialRepo)
    {
        $this->modeloInstrucaoInicialRepository = $modeloInstrucaoInicialRepo;
    }

    /**
     * Display a listing of the Modelo.
     * GET|HEAD /modelos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->modeloInstrucaoInicialRepository->pushCriteria(new RequestCriteria($request));
        $this->modeloInstrucaoInicialRepository->pushCriteria(new LimitOffsetCriteria($request));
        $modelos = $this->modeloInstrucaoInicialRepository->all();

        return $this->sendResponse($modelos->toArray(), 'Modelos retrieved successfully');
    }

    /**
     * Store a newly created Modelo in storage.
     * POST /modelos
     *
     * @param CreateModeloAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateModeloAPIRequest $request)
    {
        $input = $request->all();

        $modelos = $this->modeloInstrucaoInicialRepository->create($input);

        return $this->sendResponse($modelos->toArray(), 'Modelo saved successfully');
    }

    /**
     * Display the specified Modelo.
     * GET|HEAD /modelos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Modelo $modelo */
        $modelo = $this->modeloInstrucaoInicialRepository->findWithoutFail($id);

        if (empty($modelo)) {
            return $this->sendError('Modelo not found');
        }

        return $this->sendResponse($modelo->toArray(), 'Modelo retrieved successfully');
    }

    /**
     * Update the specified Modelo in storage.
     * PUT/PATCH /modelos/{id}
     *
     * @param  int $id
     * @param UpdateModeloAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateModeloAPIRequest $request)
    {
        $input = $request->all();

        /** @var Modelo $modelo */
        $modelo = $this->modeloInstrucaoInicialRepository->findWithoutFail($id);

        if (empty($modelo)) {
            return $this->sendError('Modelo not found');
        }

        $modelo = $this->modeloInstrucaoInicialRepository->update($input, $id);

        return $this->sendResponse($modelo->toArray(), 'Modelo updated successfully');
    }

    /**
     * Remove the specified Modelo from storage.
     * DELETE /modelos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Modelo $modelo */
        $modelo = $this->modeloInstrucaoInicialRepository->findWithoutFail($id);

        if (empty($modelo)) {
            return $this->sendError('Modelo not found');
        }

        $modelo->delete();

        return $this->sendResponse($id, 'Modelo deleted successfully');
    }
}
