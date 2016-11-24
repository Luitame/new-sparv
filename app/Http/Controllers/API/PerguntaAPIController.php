<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePerguntaAPIRequest;
use App\Http\Requests\API\UpdatePerguntaAPIRequest;
use App\Models\Pergunta;
use App\Repositories\PerguntaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class PerguntaController
 * @package App\Http\Controllers\API
 */

class PerguntaAPIController extends AppBaseController
{
    /** @var  PerguntaRepository */
    private $perguntaRepository;

    public function __construct(PerguntaRepository $perguntaRepo)
    {
        $this->perguntaRepository = $perguntaRepo;
    }

    /**
     * Display a listing of the Pergunta.
     * GET|HEAD /perguntas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->perguntaRepository->pushCriteria(new RequestCriteria($request));
        $this->perguntaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $perguntas = $this->perguntaRepository->all();

        return $this->sendResponse($perguntas->toArray(), 'Perguntas retrieved successfully');
    }

    /**
     * Store a newly created Pergunta in storage.
     * POST /perguntas
     *
     * @param CreatePerguntaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePerguntaAPIRequest $request)
    {
        $input = $request->all();

        $perguntas = $this->perguntaRepository->create($input);

        return $this->sendResponse($perguntas->toArray(), 'Pergunta saved successfully');
    }

    /**
     * Display the specified Pergunta.
     * GET|HEAD /perguntas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Pergunta $pergunta */
        $pergunta = $this->perguntaRepository->findWithoutFail($id);

        if (empty($pergunta)) {
            return $this->sendError('Pergunta not found');
        }

        return $this->sendResponse($pergunta->toArray(), 'Pergunta retrieved successfully');
    }

    /**
     * Update the specified Pergunta in storage.
     * PUT/PATCH /perguntas/{id}
     *
     * @param  int $id
     * @param UpdatePerguntaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePerguntaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Pergunta $pergunta */
        $pergunta = $this->perguntaRepository->findWithoutFail($id);

        if (empty($pergunta)) {
            return $this->sendError('Pergunta not found');
        }

        $pergunta = $this->perguntaRepository->update($input, $id);

        return $this->sendResponse($pergunta->toArray(), 'Pergunta updated successfully');
    }

    /**
     * Remove the specified Pergunta from storage.
     * DELETE /perguntas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Pergunta $pergunta */
        $pergunta = $this->perguntaRepository->findWithoutFail($id);

        if (empty($pergunta)) {
            return $this->sendError('Pergunta not found');
        }

        $pergunta->delete();

        return $this->sendResponse($id, 'Pergunta deleted successfully');
    }
}
