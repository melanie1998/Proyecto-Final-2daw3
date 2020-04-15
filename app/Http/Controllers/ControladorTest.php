<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use Auth;


class ControladorTest extends Controller
{

    public function pregunta1($genero){
        $datos = new Test();
        $datos->respuesta=$genero;
        $datos->pregunta = 1;
        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();
        $enabled = "pointer-events:auto;";
        $disabled = "pointer-events:none;";
        $color = "opacity: 1;";
        $colorGris = "background-color: #222; opacity: 0.2;";
        return redirect()->to('realizarTest#pregunta2')
        ->with(['disabled1' => $disabled, 'enabled1' => $enabled, 'color' => $color, 'colorGris' => $colorGris]);
    }

    public function pregunta2($pelicula){
        $datos = new Test();
        $datos->respuesta=$pelicula;
        $datos->pregunta = 2;
        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();
        $enabled = "pointer-events:auto;";
        $disabled = "pointer-events:none;";
        $color = "opacity: 1;";
        $colorGris = "background-color: #222; opacity: 0.2;";
        return redirect()->to('realizarTest#pregunta3')
        ->with(['disabled2' => $disabled, 'enabled2' => $enabled, 'color2' => $color, 'colorGris2' => $colorGris]);
    }

    public function pregunta3($serie){
        $datos = new Test();
        $datos->respuesta=$serie;
        $datos->pregunta = 3;
        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();
        $enabled = "pointer-events:auto;";
        $disabled = "pointer-events:none;";
        $color = "opacity: 1;";
        $colorGris = "background-color: #222; opacity: 0.2;";
        return redirect()->to('realizarTest#pregunta4')
        ->with(['disabled3' => $disabled, 'enabled3' => $enabled, 'color3' => $color, 'colorGris3' => $colorGris]);
    }

    public function pregunta4($generomusica){
        $datos = new Test();
        $datos->respuesta=$generomusica;
        $datos->pregunta = 4;
        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();
        $enabled = "pointer-events:auto;";
        $disabled = "pointer-events:none;";
        $color = "opacity: 1;";
        $colorGris = "background-color: #222; opacity: 0.2;";
        return redirect()->to('realizarTest#pregunta5')
        ->with(['disabled4' => $disabled, 'enabled4' => $enabled, 'color4' => $color, 'colorGris4' => $colorGris]);
    }

    public function pregunta5($cancion){
        $datos = new Test();
        $datos->respuesta=$cancion;
        $datos->pregunta = 5;
        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();
        $enabled = "pointer-events:auto;";
        $disabled = "pointer-events:none;";
        $color = " opacity: 1;";
        $colorGris = "background-color: #222; opacity: 0.2;";
        return redirect()->to('realizarTest#pregunta6')
        ->with(['disabled5' => $disabled, 'enabled5' => $enabled, 'color5' => $color, 'colorGris5' => $colorGris]);
    }

    public function pregunta6($artista){
        $datos = new Test();
        $datos->respuesta=$artista;
        $datos->pregunta = 6;
        $datos->idUsuario = Auth::user()->usuario;
        $datos->save();
        return redirect()->to('home');
    }
}