<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function inicio(){
        $equipo=['1','2','3'];
        return view('peliculas',compact('equipo'));
    }

    public function form_pelicula(){
        return view('movie_template.nueva_pelicula');
    }
    public function crear_pelicula(Request $requets){
        //print_r($requets->all());
        return $requets->all();
        #return $requets->all();
    }
}
