<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateRegraExtraAPIRequest;
use App\Http\Requests\API\UpdateRegraExtraAPIRequest;
use App\Models\RegraExtra;
use App\Repositories\RegraExtraRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class RegraExtraController
 * @package App\Http\Controllers\API
 */

class RegraExtraAPIController extends AppBaseController
{
    /** @var  RegraExtraRepository */
    private $regraExtraRepository;

    public function __construct(RegraExtraRepository $regraExtraRepo)
    {
        $this->regraExtraRepository = $regraExtraRepo;
    }

    /**
     * Display a listing of the RegraExtra.
     * GET|HEAD /regraExtras
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->regraExtraRepository->pushCriteria(new RequestCriteria($request));
        $this->regraExtraRepository->pushCriteria(new LimitOffsetCriteria($request));
        $regraExtras = $this->regraExtraRepository->all();

        return $this->sendResponse($regraExtras->toArray(), 'Regra Extras retrieved successfully');
    }

    /**
     * Store a newly created RegraExtra in storage.
     * POST /regraExtras
     *
     * @param CreateRegraExtraAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateRegraExtraAPIRequest $request)
    {
        $input = $request->all();

        $regraExtras = $this->regraExtraRepository->create($input);

        return $this->sendResponse($regraExtras->toArray(), 'Regra Extra saved successfully');
    }

    /**
     * Display the specified RegraExtra.
     * GET|HEAD /regraExtras/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var RegraExtra $regraExtra */
        $regraExtra = $this->regraExtraRepository->findWithoutFail($id);

        if (empty($regraExtra)) {
            return $this->sendError('Regra Extra not found');
        }

        return $this->sendResponse($regraExtra->toArray(), 'Regra Extra retrieved successfully');
    }

    /**
     * Update the specified RegraExtra in storage.
     * PUT/PATCH /regraExtras/{id}
     *
     * @param  int $id
     * @param UpdateRegraExtraAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegraExtraAPIRequest $request)
    {
        $input = $request->all();

        /** @var RegraExtra $regraExtra */
        $regraExtra = $this->regraExtraRepository->findWithoutFail($id);

        if (empty($regraExtra)) {
            return $this->sendError('Regra Extra not found');
        }

        $regraExtra = $this->regraExtraRepository->update($input, $id);

        return $this->sendResponse($regraExtra->toArray(), 'RegraExtra updated successfully');
    }

    /**
     * Remove the specified RegraExtra from storage.
     * DELETE /regraExtras/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var RegraExtra $regraExtra */
        $regraExtra = $this->regraExtraRepository->findWithoutFail($id);

        if (empty($regraExtra)) {
            return $this->sendError('Regra Extra not found');
        }

        $regraExtra->delete();

        return $this->sendResponse($id, 'Regra Extra deleted successfully');
    }
}
