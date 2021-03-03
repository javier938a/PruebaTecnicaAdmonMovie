<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //
    public function inicio(){//Muestra un boton por el momento de registrar una categoria
        
        return view('crud_categorias.listar_categorias');
    }

    public function nueva_categoria(){//Muestra el formulario para registrar una categoria
        return view('crud_categorias.nueva_categoria');
    }
    public function crear_categoria(Request $request){//Crea una categoria de pelicula nueva
        $cate = new Categoria();
        $cate->categoria=$request->categoria;
        $cate->save();

        return redirect()->route('listar_cate');//redirecciona hacia la vista que mostrara el listado de categorias
    }
}
