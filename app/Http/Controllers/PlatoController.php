<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PlatoRequest;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
class PlatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View
    {
        $platos = Plato::paginate();

        return view('plato.index', compact('platos'))
            ->with('i', ($request->input('page', 1) - 1) * $platos->perPage());
    }
    public function create(): View
    {
        
        $categorias = Categoria::all();
        $plato = new Plato();

        return view('plato.create', compact('plato', 'categorias'));
    }
    public function store(PlatoRequest $request): RedirectResponse
    {
        Plato::create($request->validated());

        return Redirect::route('platos.index')
            ->with('success', 'Plato created successfully.');
    }
    public function show($id): View
    {
        $plato = Plato::find($id);

        return view('plato.show', compact('plato'));
    }
    public function edit($id): View
    {
        $categorias = Categoria::all();
        $plato = Plato::find($id);
        return view('plato.edit', compact('plato', 'categorias'));
    }
    public function update(PlatoRequest $request, Plato $plato): RedirectResponse
    {
        $plato->update($request->validated());

        if ($request->hasFile('img_path')) {
            $imagen = $request->file('img_path');
            $rutadedestino = 'imagenes/menu/';
            $filename = $imagen->getClientOriginalName();
            $rutaimagen = $rutadedestino . $filename;
        
            $imagen->move(public_path($rutadedestino), $filename);
            
            $plato->img_path = $rutaimagen;
            $plato->save();
        }
        return Redirect::route('platos.index')
            ->with('success', 'Plato updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Plato::find($id)->delete();

        return Redirect::route('platos.index')
            ->with('success', 'Plato deleted successfully');
    }

}
