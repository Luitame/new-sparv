<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstrucaoInicialRequest;
use App\Http\Requests\UpdateInstrucaoInicialRequest;
use App\Repositories\InstrucaoInicialRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InstrucaoInicialController extends AppBaseController
{
    /** @var  InstrucaoInicialRepository */
    private $instrucaoInicialRepository;

    public function __construct(InstrucaoInicialRepository $instrucaoInicialRepo)
    {
        $this->instrucaoInicialRepository = $instrucaoInicialRepo;
    }

    /**
     * Display a listing of the InstrucaoInicial.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->instrucaoInicialRepository->pushCriteria(new RequestCriteria($request));
        $instrucaoInicials = $this->instrucaoInicialRepository->paginate(10);

        return view('instrucao_inicials.index')
            ->with('instrucaoInicials', $instrucaoInicials);
    }

    /**
     * Show the form for creating a new InstrucaoInicial.
     *
     * @return Response
     */
    public function create()
    {
        return view('instrucao_inicials.create');
    }

    /**
     * Store a newly created InstrucaoInicial in storage.
     *
     * @param CreateInstrucaoInicialRequest $request
     *
     * @return Response
     */
    public function store(CreateInstrucaoInicialRequest $request)
    {
        $input = $request->all();

        $instrucaoInicial = $this->instrucaoInicialRepository->create($input);

        Flash::success('<b>Instrução Inicial</b> salvo com sucesso.');

        return redirect(route('instrucaoInicials.index'));
    }

    /**
     * Display the specified InstrucaoInicial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $instrucaoInicial = $this->instrucaoInicialRepository->findWithoutFail($id);

        if (empty($instrucaoInicial)) {
            Flash::error('<b>Instrução Inicial</b> não encontrado');

            return redirect(route('instrucaoInicials.index'));
        }

        return view('instrucao_inicials.show')->with('instrucaoInicial', $instrucaoInicial);
    }

    /**
     * Show the form for editing the specified InstrucaoInicial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $instrucaoInicial = $this->instrucaoInicialRepository->findWithoutFail($id);

        if (empty($instrucaoInicial)) {
            Flash::error('<b>Instrução Inicial</b> não encontrado');

            return redirect(route('instrucaoInicials.index'));
        }

        return view('instrucao_inicials.edit')->with('instrucaoInicial', $instrucaoInicial);
    }

    /**
     * Update the specified InstrucaoInicial in storage.
     *
     * @param  int              $id
     * @param UpdateInstrucaoInicialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstrucaoInicialRequest $request)
    {
        $instrucaoInicial = $this->instrucaoInicialRepository->findWithoutFail($id);

        if (empty($instrucaoInicial)) {
            Flash::error('<b>Instrução Inicial</b> não encontrado');

            return redirect(route('instrucaoInicials.index'));
        }

        $instrucaoInicial = $this->instrucaoInicialRepository->update($request->all(), $id);

        Flash::success('<b>Instrução Inicial</b> atualizado com sucesso.');

        return redirect(route('instrucaoInicials.index'));
    }

    /**
     * Remove the specified InstrucaoInicial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $instrucaoInicial = $this->instrucaoInicialRepository->findWithoutFail($id);

        if (empty($instrucaoInicial)) {
            Flash::error('<b>Instrução Inicial</b> não encontrado');

            return redirect(route('instrucaoInicials.index'));
        }

        $this->instrucaoInicialRepository->delete($id);

        Flash::success('<b>Instrução Inicial</b> deletado com sucesso.');

        return redirect(route('instrucaoInicials.index'));
    }
}
