<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;
use App\Test;
use App\Cancion;
use App\EscuchadasReciente;
use App\CancionFav;
use Auth;

class ControladorInfoArtistas extends Controller
{
    public function playlist(){
        $genero = Test::select('respuesta')->where('pregunta', 4)->where('idUsuario', Auth::user()->usuario)->get();
        $cancion = Test::select('respuesta')->where('pregunta', 5)->where('idUsuario', Auth::user()->usuario)->get();
        $artista = Test::select('respuesta')->where('pregunta', 6)->where('idUsuario', Auth::user()->usuario)->get();
        $guardarGenero = "";
        if(is_object($genero) || is_array($genero)){
            foreach($genero as $genero){
                $guardarGenero = $genero->respuesta;
            }
        }
        
        $guardarCancion = "";
        if(is_object($cancion) || is_array($cancion)){
            foreach($cancion as $cancion){
                $guardarCancion = $cancion->respuesta;
            }
        }
        
        $guardarArtista = "";
        if(is_object($artista) || is_array($artista)){
            foreach($artista as $artista){
                $guardarArtista = $artista->respuesta;
            }
        }

        $seleccionGenerosCancion = Cancion::select('genero')->where('titulo', $guardarCancion)->get();
        $seleccionGenerosArtista = Cancion::select('genero')->where('artista', $guardarArtista)->get();
        $guardarseleccionGenerosCancion = "";
        $guardarseleccionGenerosArtista = "";
        if(is_object($seleccionGenerosCancion) || is_array($seleccionGenerosCancion)){
            foreach($seleccionGenerosCancion as $seleccionGenerosCancion){
                $guardarseleccionGenerosCancion = $seleccionGenerosCancion->genero;
            }
        }

        if(is_object($seleccionGenerosArtista) || is_array($seleccionGenerosArtista)){
            foreach($seleccionGenerosArtista as $seleccionGenerosArtista){
                $guardarseleccionGenerosArtista = $seleccionGenerosArtista->genero;
            }
        }


        $datos = Cancion::select('id', 'titulo', 'artista', 'duracion', 'genero')->where('genero', $guardarCancion)->orWhere('genero', $guardarseleccionGenerosCancion)->orWhere('genero', $guardarseleccionGenerosArtista)->get();
                               
                         
                           

        return $datos;
    }


    public function escuchadaRec($id){
        $nuevo = new EscuchadasReciente();
        $idnuevo = Cancion::select('id')->where('id', $id)->get();
        $titulo = Cancion::select('titulo')->where('id', $id)->get();
        $artista = Cancion::select('artista')->where('id', $id)->get();
        $duracion = Cancion::select('duracion')->where('id', $id)->get();
        $genero =Cancion::select('genero')->where('id', $id)->get();
        foreach($idnuevo as $idnuevo){
            $nuevo->id = $idnuevo->id;
        }
        foreach($titulo as $titulo){
            $nuevo->titulo = $titulo->titulo;
        }
        foreach($artista as $artista){
            $nuevo->artista = $artista->artista;
        }
        foreach($duracion as $duracion){
            $nuevo->duracion = $duracion->duracion;
        }
        foreach($genero as $genero){
            $nuevo->genero = $genero->genero;
        }
       
        $nuevo->idUsuario = Auth::user()->usuario;
        $nuevo->save();
        
    }

    public function escuchadasRecientemente(){
        $datos = EscuchadasReciente::select('id','titulo', 'artista', 'duracion', 'genero')->where('idUsuario', Auth::user()->usuario)->get();
        return  $datos;
    }

    public function meterLike($id){
        $nuevo = new CancionFav();
        $idnuevo = Cancion::select('id')->where('id', $id)->get();
        $titulo = Cancion::select('titulo')->where('id', $id)->get();
        $artista = Cancion::select('artista')->where('id', $id)->get();
        $duracion = Cancion::select('duracion')->where('id', $id)->get();
        $genero = Cancion::select('genero')->where('id', $id)->get();
        foreach($idnuevo as $idnuevo){
            $nuevo->id = $idnuevo->id;
        }
        foreach($titulo as $titulo){
            $nuevo->titulo = $titulo->titulo;
        }
        foreach($artista as $artista){
            $nuevo->artista = $artista->artista;
        }
        foreach($duracion as $duracion){
            $nuevo->duracion = $duracion->duracion;
        }
        foreach($genero as $genero){
            $nuevo->genero = $genero->genero;
        }
       
        $nuevo->idUsuario = Auth::user()->usuario;
        $nuevo->save();
        
    }

    public function borrarLike($id){
        $datos = CancionFav::findOrFail($id);
        $datos->delete();
      
        
    }

    public function CancionesFav(){
        $datos = CancionFav::select('id','titulo', 'artista', 'duracion', 'genero')->where('idUsuario', Auth::user()->usuario)->get();
        return  $datos;
    }

    public function fotoLikeFull(){
        $datos = CancionFav::select('id')->where('idUsuario', Auth::user()->usuario)->get();
        return $datos;
    }
}

