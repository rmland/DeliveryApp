<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Direccione;
use App\Models\Pedido;
use App\Models\PedidoHasPlato;
use App\Models\Plato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{

    public function index()
    {
        $id_user = auth()->user()->id;
        $carritoItems = Carrito::where('id_user', $id_user)->get();
        $totalPrecio = $carritoItems->sum(function ($item) {
            return $item->plato->precio * $item->cantidad;
        });

        $direcciones = Direccione::where('id_user', $id_user)->get();
        return view('carrito.index', compact('carritoItems', 'totalPrecio', 'direcciones'));
    }

    public function destroy($id): RedirectResponse
    {
        Carrito::find($id)->delete();

        return Redirect::route('carrito.index')
            ->with('success', 'Producto eliminado');
    }

    public function store(Request $request): RedirectResponse
    {
        if ($request->get('success')) {
            $id_user = auth()->user()->id;

            $pedido = new Pedido();
            $pedido->cliente_id = $id_user;
            $pedido->fecha = now();
            $pedido->direccion_envio = $request->direccion;
            if ($request->get('nota')) {
                $pedido->notas =  $request->get('nota');
            }
            $pedido->total = 0.0;

            $pedido->save();

            $carritoItems = Carrito::where('id_user', $id_user)->get();

            foreach ($carritoItems as $item) {
                $pedidohasplato = new PedidoHasPlato();
                $pedidohasplato->pedido_id = $pedido->id;
                $pedidohasplato->plato_id = $item->id_plato;
                $pedidohasplato->cantidad = $item->cantidad;
                $pedidohasplato->precio_unitario = $item->plato->precio;
                $pedidohasplato->subtotal = $item->plato->precio * $item->cantidad;
                $pedidohasplato->save();
            }

            $platosinpedido = PedidoHasPlato::where('pedido_id', $pedido->id)->get();
            $pedido->total = $platosinpedido->sum(function ($item) {
                return $item->plato->precio * $item->cantidad;
            });
            $pedido->save();
            Carrito::where('id_user', $id_user)->delete();
            return Redirect::route('menu.index')
                ->with('success', 'Pedido en camino!.');
        } else {
            $id_plato = $request->id_plato;
            $user = auth()->user();
            $id_user = $user->id;

            $carritoExist = Carrito::where('id_plato', $id_plato)->where('id_user', $id_user)->first();

            if ($carritoExist) {
                $carritoExist->cantidad += 1;
                $carritoExist->save();
            } else {
                $carrito = new Carrito();
                $carrito->id_plato = $id_plato;
                $carrito->id_user = $id_user;
                $carrito->save();
            }
            return Redirect::route('menu.index')
                ->with('success', 'Plato Agregado al carrito correctamente.');
        }
    }
    public function show()
    {
        $id_user = auth()->user()->id;
        $pedidosPendientes = Pedido::where('cliente_id', $id_user)
            ->where(function ($query) {
                $query->where('estado', 'pendiente')
                    ->orWhere('estado', 'en_proceso');
            })
            ->with(['platos' => function ($query) {
                $query->withPivot('cantidad');
            }])
            ->get();

        return view('carrito.pedidos-pendientes', compact('pedidosPendientes'));
    }
    public function update($id)
    {
        $pedido = Pedido::where('id', $id)->first();
        $pedido->estado = 'cancelado';
        $pedido->save();


        return redirect()->route('carrito.pendientes')->with('success', 'El pedido ha sido cancelado exitosamente.');
    }
}
