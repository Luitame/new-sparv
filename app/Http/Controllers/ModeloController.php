<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateModeloRequest;
use App\Http\Requests\UpdateModeloRequest;
use App\Repositories\ModeloRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ModeloController extends AppBaseController
{
    /** @var  ModeloRepository */
    private $modeloRepository;

    public function __construct(ModeloRepository $modeloRepo)
    {
        $this->modeloRepository = $modeloRepo;
    }

    /**
     * Display a listing of the Modelo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->modeloRepository->pushCriteria(new RequestCriteria($request));
        $modelos = $this->modeloRepository->all();

        return view('modelos.index')
            ->with('modelos', $modelos);
    }

    /**
     * Show the form for creating a new Modelo.
     *
     * @return Response
     */
    public function create()
    {
        return view('modelos.create');
    }

    /**
     * Store a newly created Modelo in storage.
     *
     * @param CreateModeloRequest $request
     *
     * @return Response
     */
    public function store(CreateModeloRequest $request)
    {
        $input = $request->all();

        $modelo = $this->modeloRepository->create($input);

        Flash::success('<b>Modelo</b> salvo com sucesso.');

        return redirect(route('modelos.index'));
    }

    /**
     * Display the specified Modelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $modelo = $this->modeloRepository->findWithoutFail($id);

        if (empty($modelo)) {
            Flash::error('<b>Modelo</b> não encontrado');

            return redirect(route('modelos.index'));
        }

        return view('modelos.show')->with('modelo', $modelo);
    }

    /**
     * Show the form for editing the specified Modelo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $modelo = $this->modeloRepository->findWithoutFail($id);

        if (empty($modelo)) {
            Flash::error('<b>Modelo</b> não encontrado');

            return redirect(route('modelos.index'));
        }

        return view('modelos.edit')->with('modelo', $modelo);
    }

    /**
     * Update the specified Modelo in storage.
     *
     * @param  int              $id
     * @param UpdateModeloRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateModeloRequest $request)
    {
        $modelo = $this->modeloRepository->findWithoutFail($id);

        if (empty($modelo)) {
            Flash::error('<b>Modelo</b> não encontrado');

            return redirect(route('modelos.index'));
        }

        $modelo = $this->modeloRepository->update($request->all(), $id);

        Flash::success('<b>Modelo</b> atualizado com sucesso.');

        return redirect(route('modelos.index'));
    }

    /**
     * Remove the specified Modelo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $modelo = $this->modeloRepository->findWithoutFail($id);

        if (empty($modelo)) {
            Flash::error('<b>Modelo</b> não encontrado');

            return redirect(route('modelos.index'));
        }

        $this->modeloRepository->delete($id);

        Flash::success('<b>Modelo</b> deletado com sucesso.');

        return redirect(route('modelos.index'));
    }
}
