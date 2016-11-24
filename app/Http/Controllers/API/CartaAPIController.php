<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCartaAPIRequest;
use App\Http\Requests\API\UpdateCartaAPIRequest;
use App\Models\Carta;
use App\Repositories\CartaRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class CartaController
 * @package App\Http\Controllers\API
 */

class CartaAPIController extends AppBaseController
{
    /** @var  CartaRepository */
    private $cartaRepository;

    public function __construct(CartaRepository $cartaRepo)
    {
        $this->cartaRepository = $cartaRepo;
    }

    /**
     * Display a listing of the Carta.
     * GET|HEAD /cartas
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cartaRepository->pushCriteria(new RequestCriteria($request));
        $this->cartaRepository->pushCriteria(new LimitOffsetCriteria($request));
        $cartas = $this->cartaRepository->all();

        return $this->sendResponse($cartas->toArray(), 'Cartas retrieved successfully');
    }

    /**
     * Store a newly created Carta in storage.
     * POST /cartas
     *
     * @param CreateCartaAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCartaAPIRequest $request)
    {
        $input = $request->all();

        $cartas = $this->cartaRepository->create($input);

        return $this->sendResponse($cartas->toArray(), 'Carta saved successfully');
    }

    /**
     * Display the specified Carta.
     * GET|HEAD /cartas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Carta $carta */
        $carta = $this->cartaRepository->findWithoutFail($id);

        if (empty($carta)) {
            return $this->sendError('Carta not found');
        }

        return $this->sendResponse($carta->toArray(), 'Carta retrieved successfully');
    }

    /**
     * Update the specified Carta in storage.
     * PUT/PATCH /cartas/{id}
     *
     * @param  int $id
     * @param UpdateCartaAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCartaAPIRequest $request)
    {
        $input = $request->all();

        /** @var Carta $carta */
        $carta = $this->cartaRepository->findWithoutFail($id);

        if (empty($carta)) {
            return $this->sendError('Carta not found');
        }

        $carta = $this->cartaRepository->update($input, $id);

        return $this->sendResponse($carta->toArray(), 'Carta updated successfully');
    }

    /**
     * Remove the specified Carta from storage.
     * DELETE /cartas/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Carta $carta */
        $carta = $this->cartaRepository->findWithoutFail($id);

        if (empty($carta)) {
            return $this->sendError('Carta not found');
        }

        $carta->delete();

        return $this->sendResponse($id, 'Carta deleted successfully');
    }
}
