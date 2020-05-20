<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Pelicula;
use App\ListaPeliculas;
use Auth;

class ControladorPeliculas extends Controller
{
    public function anadirLista($titulo){
        $datos = new ListaPeliculas();

        $datos2 = Pelicula::select('id', 'titulo', 'tituloSinEspacios', 'sinopsis', 'duracion', 'anio', 'genero')->where('tituloSinEspacios', $titulo)->get();

        foreach($datos2 as $datos2){
            $datos->id = $datos2->id;
            $datos->titulo = $datos2->titulo;
            $datos->tituloSinEspacios = $datos2->tituloSinEspacios;
            $datos->sinopsis = $datos2->sinopsis;
            $datos->duracion = $datos2->duracion;
            $datos->anio = $datos2->anio;
            $datos->genero = $datos2->genero;

        }

        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();

        $id = Pelicula::select('id')->where('tituloSinEspacios', $titulo)->get();
        $guardarId = 0;
        foreach($id as $id){
            $guardarId = $id->id;

        }
        $datos3 = Pelicula::find($guardarId);
        $datos3->anadidaLista = 1;
        $datos3->update();
        
    }

    public function borrarLista($titulo){
        $id = ListaPeliculas::select('id')->where('tituloSinEspacios', $titulo)->get();
        $guardarId = 0;
        foreach($id as $id){
            $guardarId = $id->id;

        }
        $datos3 = ListaPeliculas::findOrFail($guardarId);
        $datos3->delete();

        $id2 = Pelicula::select('id')->where('tituloSinEspacios', $titulo)->get();
        $guardarId2 = 0;
        foreach($id2 as $id2){
            $guardarId2 = $id2->id;

        }
        $datos4 = Pelicula::find($guardarId);
        $datos4->anadidaLista = 0;
        $datos4->update();

        
    }
    
}
