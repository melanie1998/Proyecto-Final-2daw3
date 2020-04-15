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

        foreach($genero as $genero){
            foreach($cancion as $cancion){
                foreach($artista as $artista){
                    $generoArtista = Cancion::select('genero')->where('artista', $artista->respuesta)->get();
                    $generoCancion = Cancion::select('genero')->where('titulo', $cancion->respuesta)->get();
                        foreach($generoArtista as $generoArtista){
                            foreach($generoCancion as $generoCancion){
                                $datos = Cancion::select('id', 'titulo', 'artista', 'duracion', 'genero')->where('genero', $genero->respuesta)->orWhere('genero', $generoCancion->genero)->orWhere('genero', $generoArtista->genero)->get();
                               
                         
                            }              
                        }
                }
            }
       }

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

