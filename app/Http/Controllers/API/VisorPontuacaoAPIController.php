<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateVisorPontuacaoAPIRequest;
use App\Http\Requests\API\UpdateVisorPontuacaoAPIRequest;
use App\Models\VisorPontuacao;
use App\Repositories\VisorPontuacaoRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class VisorPontuacaoController
 * @package App\Http\Controllers\API
 */

class VisorPontuacaoAPIController extends AppBaseController
{
    /** @var  VisorPontuacaoRepository */
    private $visorPontuacaoRepository;

    public function __construct(VisorPontuacaoRepository $visorPontuacaoRepo)
    {
        $this->visorPontuacaoRepository = $visorPontuacaoRepo;
    }

    /**
     * Display a listing of the VisorPontuacao.
     * GET|HEAD /visorPontuacaos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->visorPontuacaoRepository->pushCriteria(new RequestCriteria($request));
        $this->visorPontuacaoRepository->pushCriteria(new LimitOffsetCriteria($request));
        $visorPontuacaos = $this->visorPontuacaoRepository->all();

        return $this->sendResponse($visorPontuacaos->toArray(), 'Visor Pontuacaos retrieved successfully');
    }

    /**
     * Store a newly created VisorPontuacao in storage.
     * POST /visorPontuacaos
     *
     * @param CreateVisorPontuacaoAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateVisorPontuacaoAPIRequest $request)
    {
        $input = $request->all();

        $visorPontuacaos = $this->visorPontuacaoRepository->create($input);

        return $this->sendResponse($visorPontuacaos->toArray(), 'Visor Pontuacao saved successfully');
    }

    /**
     * Display the specified VisorPontuacao.
     * GET|HEAD /visorPontuacaos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var VisorPontuacao $visorPontuacao */
        $visorPontuacao = $this->visorPontuacaoRepository->findWithoutFail($id);

        if (empty($visorPontuacao)) {
            return $this->sendError('Visor Pontuacao not found');
        }

        return $this->sendResponse($visorPontuacao->toArray(), 'Visor Pontuacao retrieved successfully');
    }

    /**
     * Update the specified VisorPontuacao in storage.
     * PUT/PATCH /visorPontuacaos/{id}
     *
     * @param  int $id
     * @param UpdateVisorPontuacaoAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVisorPontuacaoAPIRequest $request)
    {
        $input = $request->all();

        /** @var VisorPontuacao $visorPontuacao */
        $visorPontuacao = $this->visorPontuacaoRepository->findWithoutFail($id);

        if (empty($visorPontuacao)) {
            return $this->sendError('Visor Pontuacao not found');
        }

        $visorPontuacao = $this->visorPontuacaoRepository->update($input, $id);

        return $this->sendResponse($visorPontuacao->toArray(), 'VisorPontuacao updated successfully');
    }

    /**
     * Remove the specified VisorPontuacao from storage.
     * DELETE /visorPontuacaos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var VisorPontuacao $visorPontuacao */
        $visorPontuacao = $this->visorPontuacaoRepository->findWithoutFail($id);

        if (empty($visorPontuacao)) {
            return $this->sendError('Visor Pontuacao not found');
        }

        $visorPontuacao->delete();

        return $this->sendResponse($id, 'Visor Pontuacao deleted successfully');
    }
}
