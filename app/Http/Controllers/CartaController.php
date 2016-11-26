<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCartaRequest;
use App\Http\Requests\UpdateCartaRequest;
use App\Repositories\CartaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class CartaController extends AppBaseController
{
    /** @var  CartaRepository */
    private $cartaRepository;

    public function __construct(CartaRepository $cartaRepo)
    {
        $this->cartaRepository = $cartaRepo;
    }

    /**
     * Display a listing of the Carta.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cartaRepository->pushCriteria(new RequestCriteria($request));
        $cartas = $this->cartaRepository->paginate(18);

        return view('cartas.index')->with('cartas', $cartas);
    }

    /**
     * Show the form for creating a new Carta.
     *
     * @return Response
     */
    public function create()
    {
        return view('cartas.create');
    }

    /**
     * Store a newly created Carta in storage.
     *
     * @param CreateCartaRequest $request
     *
     * @return Response
     */
    public function store(CreateCartaRequest $request)
    {
        $input = $request->all();

        $carta = $this->cartaRepository->create($input);

        Flash::success('<b>Carta</b> salvo com sucesso.');

        return redirect(route('cartas.index'));
    }

    /**
     * Display the specified Carta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $carta = $this->cartaRepository->findWithoutFail($id);

        if (empty($carta)) {
            Flash::error('<b>Carta</b> não encontrado');

            return redirect(route('cartas.index'));
        }

        return view('cartas.show')->with('carta', $carta);
    }

    /**
     * Show the form for editing the specified Carta.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $carta = $this->cartaRepository->findWithoutFail($id);

        if (empty($carta)) {
            Flash::error('<b>Carta</b> não encontrado');

            return redirect(route('cartas.index'));
        }

        return view('cartas.edit')->with('carta', $carta);
    }

    /**
     * Update the specified Carta in storage.
     *
     * @param  int $id
     * @param UpdateCartaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCartaRequest $request)
    {
        $carta = $this->cartaRepository->findWithoutFail($id);

        if (empty($carta)) {
            Flash::error('<b>Carta</b> não encontrado');

            return redirect(route('cartas.index'));
        }

        $carta = $this->cartaRepository->update($request->all(), $id);

        Flash::success('<b>Carta</b> atualizado com sucesso.');

        return redirect(route('cartas.index'));
    }

    /**
     * Remove the specified Carta from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $carta = $this->cartaRepository->findWithoutFail($id);

        if (empty($carta)) {
            Flash::error('<b>Carta</b> não encontrado');

            return redirect(route('cartas.index'));
        }

        $this->cartaRepository->delete($id);

        Flash::success('<b>Carta</b> deletado com sucesso.');

        return redirect(route('cartas.index'));
    }
}
