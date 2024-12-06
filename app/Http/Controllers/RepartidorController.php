<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class RepartidorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pedidos = DB::connection('mysql_second')->table('pedidos')
        ->join('deliveryapp.users AS mitabla2', 'pedidos.cliente_id', '=', 'mitabla2.id')
        ->join('deliveryapp.direcciones AS mitabla3', 'mitabla2.id', '=', 'mitabla3.id_user')
        ->select('pedidos.id', 'mitabla2.name','pedidos.total','pedidos.fecha','pedidos.estado','mitabla3.direccion', 'pedidos.notas')
        ->where('pedidos.estado', 'pendiente')->orWhere('pedidos.estado', 'en_proceso')->paginate();
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
