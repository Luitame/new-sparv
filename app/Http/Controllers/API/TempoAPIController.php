<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTempoAPIRequest;
use App\Http\Requests\API\UpdateTempoAPIRequest;
use App\Models\Tempo;
use App\Repositories\TempoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class TempoController
 * @package App\Http\Controllers\API
 */

class TempoAPIController extends AppBaseController
{
    /** @var  TempoRepository */
    private $tempoRepository;

    public function __construct(TempoRepository $tempoRepo)
    {
        $this->tempoRepository = $tempoRepo;
    }

    /**
     * Display a listing of the Tempo.
     * GET|HEAD /tempos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->tempoRepository->pushCriteria(new RequestCriteria($request));
        $this->tempoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $tempos = $this->tempoRepository->all();

        return $this->sendResponse($tempos->toArray(), 'Tempos retrieved successfully');
    }

    /**
     * Store a newly created Tempo in storage.
     * POST /tempos
     *
     * @param CreateTempoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTempoAPIRequest $request)
    {
        $input = $request->all();

        $tempos = $this->tempoRepository->create($input);

        return $this->sendResponse($tempos->toArray(), 'Tempo saved successfully');
    }

    /**
     * Display the specified Tempo.
     * GET|HEAD /tempos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Tempo $tempo */
        $tempo = $this->tempoRepository->findWithoutFail($id);

        if (empty($tempo)) {
            return $this->sendError('Tempo not found');
        }

        return $this->sendResponse($tempo->toArray(), 'Tempo retrieved successfully');
    }

    /**
     * Update the specified Tempo in storage.
     * PUT/PATCH /tempos/{id}
     *
     * @param  int $id
     * @param UpdateTempoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTempoAPIRequest $request)
    {
        $input = $request->all();

        /** @var Tempo $tempo */
        $tempo = $this->tempoRepository->findWithoutFail($id);

        if (empty($tempo)) {
            return $this->sendError('Tempo not found');
        }

        $tempo = $this->tempoRepository->update($input, $id);

        return $this->sendResponse($tempo->toArray(), 'Tempo updated successfully');
    }

    /**
     * Remove the specified Tempo from storage.
     * DELETE /tempos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Tempo $tempo */
        $tempo = $this->tempoRepository->findWithoutFail($id);

        if (empty($tempo)) {
            return $this->sendError('Tempo not found');
        }

        $tempo->delete();

        return $this->sendResponse($id, 'Tempo deleted successfully');
    }
}
