<?php

namespace App\Http\Controllers;

use App\Models\PedidoHasPlato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PedidoHasPlatoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PedidoHasPlatoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(PedidoHasPlatoRequest $request): RedirectResponse
    {
        PedidoHasPlato::create($request->validated());

        return Redirect::route('pedido_has_platos.index')
            ->with('success', 'PedidoHasPlato created successfully.');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(PedidoHasPlatoRequest $request, PedidoHasPlato $pedidoHasPlato): RedirectResponse
    {
        $pedidoHasPlato->update($request->validated());

        return Redirect::route('pedido_has_platos.index')
            ->with('success', 'PedidoHasPlato updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        PedidoHasPlato::find($id)->delete();

        return Redirect::route('pedido_has_platos.index')
            ->with('success', 'PedidoHasPlato deleted successfully');
    }
}