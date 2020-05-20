<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\ListaSeries;
use Auth;

class ControladorSeries extends Controller
{
    public function anadirLista2($titulo){
        $datos = new ListaSeries();

        $datos2 = Serie::select('id', 'titulo', 'tituloSinEspacios', 'sinopsis', 'temporadas', 'anio', 'genero')->where('tituloSinEspacios', $titulo)->get();

        foreach($datos2 as $datos2){
            $datos->id = $datos2->id;
            $datos->titulo = $datos2->titulo;
            $datos->tituloSinEspacios = $datos2->tituloSinEspacios;
            $datos->sinopsis = $datos2->sinopsis;
            $datos->temporadas = $datos2->temporadas;
            $datos->anio = $datos2->anio;
            $datos->genero = $datos2->genero;

        }

        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();

        $id = Serie::select('id')->where('tituloSinEspacios', $titulo)->get();
        $guardarId = 0;
        foreach($id as $id){
            $guardarId = $id->id;

        }
        $datos3 = Serie::find($guardarId);
        $datos3->anadidaLista = 1;
        $datos3->update();
        
    }

    public function borrarLista2($titulo){
        $id = ListaSeries::select('id')->where('tituloSinEspacios', $titulo)->get();
        $guardarId = 0;
        foreach($id as $id){
            $guardarId = $id->id;

        }
        $datos3 = ListaSeries::findOrFail($guardarId);
        $datos3->delete();

        $id2 = Serie::select('id')->where('tituloSinEspacios', $titulo)->get();
        $guardarId2 = 0;
        foreach($id2 as $id2){
            $guardarId2 = $id2->id;

        }
        $datos4 = Serie::find($guardarId);
        $datos4->anadidaLista = 0;
        $datos4->update();

        
    }
}
