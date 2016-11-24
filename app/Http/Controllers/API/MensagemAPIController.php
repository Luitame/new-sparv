<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMensagemAPIRequest;
use App\Http\Requests\API\UpdateMensagemAPIRequest;
use App\Models\Mensagem;
use App\Repositories\MensagemRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class MensagemController
 * @package App\Http\Controllers\API
 */

class MensagemAPIController extends AppBaseController
{
    /** @var  MensagemRepository */
    private $mensagemRepository;

    public function __construct(MensagemRepository $mensagemRepo)
    {
        $this->mensagemRepository = $mensagemRepo;
    }

    /**
     * Display a listing of the Mensagem.
     * GET|HEAD /mensagems
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->mensagemRepository->pushCriteria(new RequestCriteria($request));
        $this->mensagemRepository->pushCriteria(new LimitOffsetCriteria($request));
        $mensagems = $this->mensagemRepository->all();

        return $this->sendResponse($mensagems->toArray(), 'Mensagems retrieved successfully');
    }

    /**
     * Store a newly created Mensagem in storage.
     * POST /mensagems
     *
     * @param CreateMensagemAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMensagemAPIRequest $request)
    {
        $input = $request->all();

        $mensagems = $this->mensagemRepository->create($input);

        return $this->sendResponse($mensagems->toArray(), 'Mensagem saved successfully');
    }

    /**
     * Display the specified Mensagem.
     * GET|HEAD /mensagems/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Mensagem $mensagem */
        $mensagem = $this->mensagemRepository->findWithoutFail($id);

        if (empty($mensagem)) {
            return $this->sendError('Mensagem not found');
        }

        return $this->sendResponse($mensagem->toArray(), 'Mensagem retrieved successfully');
    }

    /**
     * Update the specified Mensagem in storage.
     * PUT/PATCH /mensagems/{id}
     *
     * @param  int $id
     * @param UpdateMensagemAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMensagemAPIRequest $request)
    {
        $input = $request->all();

        /** @var Mensagem $mensagem */
        $mensagem = $this->mensagemRepository->findWithoutFail($id);

        if (empty($mensagem)) {
            return $this->sendError('Mensagem not found');
        }

        $mensagem = $this->mensagemRepository->update($input, $id);

        return $this->sendResponse($mensagem->toArray(), 'Mensagem updated successfully');
    }

    /**
     * Remove the specified Mensagem from storage.
     * DELETE /mensagems/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Mensagem $mensagem */
        $mensagem = $this->mensagemRepository->findWithoutFail($id);

        if (empty($mensagem)) {
            return $this->sendError('Mensagem not found');
        }

        $mensagem->delete();

        return $this->sendResponse($id, 'Mensagem deleted successfully');
    }
}
