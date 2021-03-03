<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function inicio(){
        
        return view('crud_categorias.listar_categorias');
    }

    public function nueva_categoria(){
        return view('crud_categorias.nueva_categoria');
    }
    public function crear_categoria(Request $request){
        $cate = new Categoria();
        $cate->categoria=$request->categoria;
        $cate->save();

        return redirect()->route('listar_cate');
    }
}
