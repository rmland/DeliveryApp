<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Plato;
use Illuminate\Http\Request;
class MenuController extends Controller
{
    public function index(Request $request){
        if($request->input('categoria')){
            $categoriaName = $request->input('categoria');
            $categoria = Categoria::where('nombre', $categoriaName)->get()->first();
            $platos = Plato::where('id_categoria',$categoria->id)->get();
        }else{
            $platos = Plato::where('id_categoria',1)->get();
        }
        $categorias = Categoria::all();
        return view('public.menu', compact('platos', 'categorias'));
    }

}
