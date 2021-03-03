<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeliculaRequest;
use App\Models\Categoria;
use App\Models\Pelicula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeliculasController extends Controller
{
    public function inicio(Request $request){//Listando peliculas en una tabla responsiva
        
        return view('peliculas', [
            'peliculas'=>DB::table('peliculas')->paginate(3),
        ]);
    }

    public function detalle_pelicula($id){//Muestra el detalle de una determinada pelicula 
        $detalle_pelicula=Pelicula::find($id);
        return view('movie_template.detalle_pelicula', compact('detalle_pelicula'));
    }
    public function form_pelicula(){
        $categorias = Categoria::pluck('categoria', 'id');//Muestra el Formulario para la creacion de una pelicula
        return view('movie_template.nueva_pelicula', compact('categorias'));
    }
    public function crear_pelicula(PeliculaRequest $request){//$Inserta una nueva pelicula
        $pelicula= new Pelicula; 
        $pelicula->titulo=$request->titulo;
        $pelicula->sipnosis=$request->sipnosis;
        $pelicula->anio_estreno=$request->anio_estreno;
        $pelicula->id_categoria=intval($request->id_categoria);
        $pelicula->costo_de_renta_dia=$request->costo_de_renta_dia;
        $pelicula->estado=$request->estado;
        $pelicula->cantidad=$request->cantidad;

        $pelicula->save();

        //print_r($request->all());
        //return 'Hola que tal';
        return redirect()->route('movie');//una vez registrada la pelicula se redirecciona al listado de peliculas 
    }

    public function edit($id){//Muestra el formulario de editar pelicula
        $pelicula=Pelicula::find($id);
        $categorias=Categoria::pluck('categoria','id');
        //print_r($pelicula);
        return view('movie_template.editar_pelicula', compact('pelicula','categorias'));
    }

    public function update(PeliculaRequest $request){//Realiza una actualizacion de una determinada pelicula
        $pelicula = Pelicula::find($request->id);
        $pelicula->titulo=$request->titulo;
        $pelicula->sipnosis=$request->sipnosis;
        $pelicula->anio_estreno=$request->anio_estreno;
        $pelicula->id_categoria=$request->id_categoria;
        $pelicula->costo_de_renta_dia=floatval($request->costo_de_renta_dia);
        #print_r($request->cantidad);
        $pelicula->estado=$request->estado;
        $pelicula->cantidad=intval($request->cantidad);
        $pelicula->save();
        return redirect()->route('movie');
        
    }

    public function eliminar_pelicula($id){//Elimina una determinada pelicula seleccionada por el usuario
        $pelicula=Pelicula::find($id);
        $pelicula->delete();
        return back()->with('info', 'La pelicula ha sido eliminada');
    }
}
