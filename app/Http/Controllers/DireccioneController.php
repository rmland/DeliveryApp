<?php

namespace App\Http\Controllers;

use App\Models\Direccione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DireccioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
class DireccioneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View
    {
        $direcciones = Direccione::paginate();

        return view('direccione.index', compact('direcciones'))
            ->with('i', ($request->input('page', 1) - 1) * $direcciones->perPage());
    }
    public function add(): View
    {

        return view('direccione.add');
    }
    public function create(): View
    {
        $direccione = new Direccione();

        return view('direccione.create', compact('direccione'));
    }
    public function store(request $request): RedirectResponse
    {
        Direccione::create([
            'id_user' => auth()->user()->id,
            'direccion' => $request->direccion,
        ]);
        return Redirect::route('carrito.index')->
                with('success', 'Dirección agregada correctamente.');
    }
    public function show($id): View
    {
        $direccione = Direccione::find($id);

        return view('direccione.show', compact('direccione'));
    }
    public function edit($id): View
    {
        $direccione = Direccione::find($id);

        return view('direccione.edit', compact('direccione'));
    }
    public function update(DireccioneRequest $request, Direccione $direccione): RedirectResponse
    {
        $direccione->update($request->validated());

        return Redirect::route('direcciones.index')
            ->with('success', 'Direccione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Direccione::find($id)->delete();

        return Redirect::route('direcciones.index')
            ->with('success', 'Direccione deleted successfully');
    }
}
