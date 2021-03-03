<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function Index(Request $request){
        $clave_busqueda=$request->get('clave_busqueda');
        $peliculas=null;
        //Realizando Busqueda de peliculas
        if(empty($clave_busqueda)){
            $peliculas = DB::table('peliculas')->orderBy('titulo')->paginate(3);
        }else{
            $peliculas=DB::table('peliculas')->where('titulo','like','%'.$clave_busqueda.'%')->orderBy('titulo')->paginate(3);
        }
        
        return view('index', [
            'peliculas'=>$peliculas
        ]);
    }
}
