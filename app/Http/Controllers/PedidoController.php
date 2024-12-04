<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PedidoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View
    {
        $pedidos = Pedido::paginate();

        return view('pedido.index', compact('pedidos'))
            ->with('i', ($request->input('page', 1) - 1) * $pedidos->perPage());
    }
    public function create(): View
    {
        $pedido = new Pedido();

        return view('pedido.create', compact('pedido'));
    }
    public function store(PedidoRequest $request): RedirectResponse
    {
        Pedido::create($request->validated());

        return Redirect::route('pedidos.index')
            ->with('success', 'Pedido created successfully.');
    }
    public function show($id): View
    {
        $pedido = Pedido::find($id);

        return view('pedido.show', compact('pedido'));
    }
    public function edit($id): View
    {
        $pedido = Pedido::find($id);

        return view('pedido.edit', compact('pedido'));
    }
    public function update(PedidoRequest $request, Pedido $pedido): RedirectResponse
    {
        $pedido->update($request->validated());

        return Redirect::route('pedidos.index')
            ->with('success', 'Pedido updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Pedido::find($id)->delete();

        return Redirect::route('pedidos.index')
            ->with('success', 'Pedido deleted successfully');
    }
}
