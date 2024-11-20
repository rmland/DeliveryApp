<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class RepartidorController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::where('estado', 'pendiente')->orWhere('estado', 'en_proceso')->paginate();
        return view('repartidor.index', compact('pedidos'));
    }
    public function update(Request $request, $id)
    {
        $pedido = Pedido::findOrFail($id);
        $request->validate([
            'estado' => 'required|in:pendiente,en_proceso,completado,cancelado',
        ]);

        $pedido->estado = $request->estado;
        $pedido->save();

        return redirect()->route('repartidor.pedidos.index')->with('success', 'Estado actualizado correctamente.');
    }
}
