<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PlatoRequest;
use App\Models\Categoria;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $platos = Plato::paginate();

        return view('plato.index', compact('platos'))
            ->with('i', ($request->input('page', 1) - 1) * $platos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $plato = new Plato();

        return view('plato.create', compact('plato'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlatoRequest $request): RedirectResponse
    {
        Plato::create($request->validated());

        return Redirect::route('platos.index')
            ->with('success', 'Plato created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $plato = Plato::find($id);

        return view('plato.show', compact('plato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $plato = Plato::find($id);

        return view('plato.edit', compact('plato'));
    }

    /**
     * Update the specified resource in storage.
     */
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
