<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\EntradasConciertos;
use App\EntradasCine;

class ControladorCompras extends Controller
{
    public function comprasConciertos(){
        $datos = EntradasConciertos::select('id','idUsuario','artista', 'fecha', 'hora','lugar', 'gradaPista', 'cantEntradas', 'precio', 'idEntrada')->where('idUsuario', Auth::user()->usuario)->get();
    
        return $datos;
    }

    public function comprasCine(){
        $datos = EntradasCine::select('id','tituloPelicula','dia', 'hora', 'numEntradas','numButaca', 'fila', 'precio', 'idUsuario', 'idEntrada')->where('idUsuario', Auth::user()->usuario)->get();
    
        return $datos;
    }
}
