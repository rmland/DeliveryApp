<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class ReportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $chartType = $request->get('chart_type');
        
        // Inicializamos las variables como colecciones vacías
        $usersOverTime = collect();
        $ordersByStatus = collect();
        $salesOverTime = collect();
        
        // Solo obtenemos los datos necesarios según la gráfica seleccionada
        switch($chartType) {
            case 'users':
                $usersOverTime = User::selectRaw('MONTH(created_at) as month, COUNT(*) as users')
                    ->groupByRaw('MONTH(created_at)')
                    ->orderBy('month')
                    ->get();
                break;
                
            case 'orders':
                $ordersByStatus = Pedido::selectRaw('estado, COUNT(*) as count')
                    ->groupBy('estado')
                    ->get();
                break;
                
            case 'sales':
                $salesOverTime = Pedido::selectRaw('MONTH(fecha) as month, SUM(total) as sales')
                    ->groupByRaw('MONTH(fecha)')
                    ->orderBy('month')
                    ->get();
                break;
        }
        
        return view('reportes.index', compact('usersOverTime', 'ordersByStatus', 'salesOverTime'));
    }
}
