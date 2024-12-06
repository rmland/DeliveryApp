<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PedidoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
class PedidoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request): View
    {
        $pedidos = DB::connection('mysql_second')->table('pedidos')
        ->join('deliveryapp.users AS mitabla2', 'pedidos.cliente_id', '=', 'mitabla2.id')
        ->join('deliveryapp.direcciones AS mitabla3', 'mitabla2.id', '=', 'mitabla3.id_user')
        ->select('pedidos.id', 'mitabla2.name','pedidos.total','pedidos.fecha','pedidos.estado','mitabla3.direccion', 'pedidos.notas')
        ->paginate();
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
        $pedido = DB::connection('mysql_second')->table('pedidos')
        ->join('deliveryapp.users AS mitabla2', 'pedidos.cliente_id', '=', 'mitabla2.id')
        ->join('deliveryapp.direcciones AS mitabla3', 'mitabla2.id', '=', 'mitabla3.id_user')
        ->select('pedidos.id', 'mitabla2.name','pedidos.total','pedidos.fecha','pedidos.estado','mitabla3.direccion', 'pedidos.notas')
        ->where('pedidos.id',$id )->first();
        // $pedido = Pedido::find($id);

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
