<?php

namespace App\Http\Controllers;

use App\Concierto;
use Illuminate\Http\Request;
use App\EntradasConciertos;
use App\PrecioPistaA;
use App\PrecioPistaB;
use App\PrecioGradas;
use App\ConciertosDisponibles;
use Illuminate\Support\Facades\Validator;

class ControladorConciertos extends Controller
{
    public function verConciertos(){
        $datos = Concierto::select('id','nombreArtista', 'fecha', 'lugar', 'ciudad', 'fechaEntradas')->get();
        return  $datos;
    }

    /*CONCIERTO 1*/
    public function ponerAgotado(){
        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }



        
        return redirect()->to('reservaConcierto1')->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5]);
    }


    public function generalConc1(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #A01600";
        $entrada = 0;
        $entradasDisponibles = ConciertosDisponibles::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = ConciertosDisponibles::select('entradasCompradas')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }


       
        return redirect()->to('reservaConcierto1')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'displayNone' => $displayNone, 'entradasDisponibles' => $entrada, 'entradasCompradas' => $entradaCompr, 'color' => $color, 'displayBlock' => $displayBlock]);
    }

    public function pistaAConc1(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaA::select('entradasCompradas')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad = 0;
        $entradasDisponibles2 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        
        return redirect()->to('reservaConcierto1')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad'=>$cantidad, 'idEntrada1' => $idEntradaNuevo, 'entradasDisponibles1' => $entrada, 'entradasCompradas1' => $entradaCompr, 'displayNone1' => $displayNone, 'color1' => $color, 'colorNegro1' => $colorNegro, 'displayBlock1' => $displayBlock]);
    }

    public function pistaBConc1(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaB::select('entradasCompradas')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad2 = 0;
        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad2 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad2 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad2 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad2 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto1')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad2'=>$cantidad2, 'displayNone2' => $displayNone2, 'idEntrada2' => $idEntradaNuevo, 'entradasDisponibles2' => $entrada, 'entradasCompradas2' => $entradaCompr, 'color2' => $color, 'colorNegro2' => $colorNegro, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc1(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }
        
        $cantidad3 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad3 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad3 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad3 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad3 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto1')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad3'=>$cantidad3, 'displayNone3' => $displayNone3, 'idEntrada3' => $idEntradaNuevo, 'entradasDisponibles3' => $entrada, 'entradasCompradas3' => $entradaCompr, 'color3' => $color, 'colorNegro3' => $colorNegro,  'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc1(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad4 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad4 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad4 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad4 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad4 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto1')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad4'=>$cantidad4, 'displayNone4' => $displayNone4, 'idEntrada4' => $idEntradaNuevo, 'entradasDisponibles4' => $entrada, 'entradasCompradas4' => $entradaCompr, 'color4' => $color, 'colorNegro4' => $colorNegro,  'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc1(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad5 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad5 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad5 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad5 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad5 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Wizik Center')->where('artista', 'Ed Sheeran')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto1')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad5'=>$cantidad5, 'displayNone5' => $displayNone5, 'idEntrada5' => $idEntradaNuevo, 'entradasDisponibles5' => $entrada, 'entradasCompradas5' => $entradaCompr, 'color5' => $color, 'colorNegro5' => $colorNegro,  'displayBlock5' => $displayBlock5]);
    }

    /*CONCIERTO 2*/
    public function ponerAgotado2(){
        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }

        return redirect()->to('reservaConcierto2')->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5]);
    }

    public function generalConc2(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #A01600";
        $entrada = 0;
        $entradasDisponibles = ConciertosDisponibles::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = ConciertosDisponibles::select('entradasCompradas')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }


       
        return redirect()->to('reservaConcierto2')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'displayNone' => $displayNone, 'entradasDisponibles' => $entrada, 'entradasCompradas' => $entradaCompr, 'color' => $color, 'displayBlock' => $displayBlock]);
    }

    public function pistaAConc2(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaA::select('entradasCompradas')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad = 0;
        $entradasDisponibles2 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        
        return redirect()->to('reservaConcierto2')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad'=>$cantidad, 'idEntrada1' => $idEntradaNuevo, 'entradasDisponibles1' => $entrada, 'entradasCompradas1' => $entradaCompr, 'displayNone1' => $displayNone, 'color1' => $color, 'colorNegro1' => $colorNegro, 'displayBlock1' => $displayBlock]);
    }

    public function pistaBConc2(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaB::select('entradasCompradas')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad2 = 0;
        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad2 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad2 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad2 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad2 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto2')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad2'=>$cantidad2, 'displayNone2' => $displayNone2, 'idEntrada2' => $idEntradaNuevo, 'entradasDisponibles2' => $entrada, 'entradasCompradas2' => $entradaCompr, 'color2' => $color, 'colorNegro2' => $colorNegro, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc2(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }
        
        $cantidad3 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad3 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad3 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad3 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad3 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto2')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad3'=>$cantidad3, 'displayNone3' => $displayNone3, 'idEntrada3' => $idEntradaNuevo, 'entradasDisponibles3' => $entrada, 'entradasCompradas3' => $entradaCompr, 'color3' => $color, 'colorNegro3' => $colorNegro,  'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc2(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad4 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad4 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad4 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad4 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad4 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto2')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad4'=>$cantidad4, 'displayNone4' => $displayNone4, 'idEntrada4' => $idEntradaNuevo, 'entradasDisponibles4' => $entrada, 'entradasCompradas4' => $entradaCompr, 'color4' => $color, 'colorNegro4' => $colorNegro,  'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc2(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad5 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad5 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad5 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad5 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad5 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto2')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad5'=>$cantidad5, 'displayNone5' => $displayNone5, 'idEntrada5' => $idEntradaNuevo, 'entradasDisponibles5' => $entrada, 'entradasCompradas5' => $entradaCompr, 'color5' => $color, 'colorNegro5' => $colorNegro,  'displayBlock5' => $displayBlock5]);
    }

     /*CONCIERTO 3*/
     public function ponerAgotado3(){
        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Palau Sant Jordi')->where('artista', 'Hard GZ')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }

        return redirect()->to('reservaConcierto3')->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5]);
    }

     public function generalConc3(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #A01600";
        $entrada = 0;
        $entradasDisponibles = ConciertosDisponibles::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = ConciertosDisponibles::select('entradasCompradas')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }


       
        return redirect()->to('reservaConcierto3')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'displayNone' => $displayNone, 'entradasDisponibles' => $entrada, 'entradasCompradas' => $entradaCompr, 'color' => $color, 'displayBlock' => $displayBlock]);
    }

     public function pistaAConc3(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaA::select('entradasCompradas')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad = 0;
        $entradasDisponibles2 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        
        return redirect()->to('reservaConcierto3')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad'=>$cantidad, 'idEntrada1' => $idEntradaNuevo, 'entradasDisponibles1' => $entrada, 'entradasCompradas1' => $entradaCompr, 'displayNone1' => $displayNone, 'color1' => $color, 'colorNegro1' => $colorNegro, 'displayBlock1' => $displayBlock]);
    }

    public function pistaBConc3(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaB::select('entradasCompradas')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad2 = 0;
        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad2 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad2 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad2 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad2 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto3')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad2'=>$cantidad2, 'displayNone2' => $displayNone2, 'idEntrada2' => $idEntradaNuevo, 'entradasDisponibles2' => $entrada, 'entradasCompradas2' => $entradaCompr, 'color2' => $color, 'colorNegro2' => $colorNegro, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc3(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }
        
        $cantidad3 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad3 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad3 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad3 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad3 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto3')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad3'=>$cantidad3, 'displayNone3' => $displayNone3, 'idEntrada3' => $idEntradaNuevo, 'entradasDisponibles3' => $entrada, 'entradasCompradas3' => $entradaCompr, 'color3' => $color, 'colorNegro3' => $colorNegro,  'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc3(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad4 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad4 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad4 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad4 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad4 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto3')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad4'=>$cantidad4, 'displayNone4' => $displayNone4, 'idEntrada4' => $idEntradaNuevo, 'entradasDisponibles4' => $entrada, 'entradasCompradas4' => $entradaCompr, 'color4' => $color, 'colorNegro4' => $colorNegro,  'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc3(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad5 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad5 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad5 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad5 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad5 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Bilbao Arena')->where('artista', 'The 1975')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto3')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad5'=>$cantidad5, 'displayNone5' => $displayNone5, 'idEntrada5' => $idEntradaNuevo, 'entradasDisponibles5' => $entrada, 'entradasCompradas5' => $entradaCompr, 'color5' => $color, 'colorNegro5' => $colorNegro,  'displayBlock5' => $displayBlock5]);
    }

     /*CONCIERTO 4*/
     public function ponerAgotado4(){
        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }

        return redirect()->to('reservaConcierto4')->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5]);
    }
     public function generalConc4(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #A01600";
        $entrada = 0;
        $entradasDisponibles = ConciertosDisponibles::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = ConciertosDisponibles::select('entradasCompradas')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                if($entradasDisponibles->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles3 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }


       
        return redirect()->to('reservaConcierto4')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'displayNone' => $displayNone, 'entradasDisponibles' => $entrada, 'entradasCompradas' => $entradaCompr, 'color' => $color, 'displayBlock' => $displayBlock]);
    }


     public function pistaAConc4(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaA::select('entradasCompradas')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad = 0;
        $entradasDisponibles2 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        
        return redirect()->to('reservaConcierto4')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad'=>$cantidad, 'idEntrada1' => $idEntradaNuevo, 'entradasDisponibles1' => $entrada, 'entradasCompradas1' => $entradaCompr, 'displayNone1' => $displayNone, 'color1' => $color, 'colorNegro1' => $colorNegro, 'displayBlock1' => $displayBlock]);
    }

    public function pistaBConc4(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        $color = "background-color: #00C1FF";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioPistaB::select('entradasCompradas')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad2 = 0;
        $entradasDisponibles2 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad2 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad2 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad2 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad2 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto4')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad2'=>$cantidad2, 'displayNone2' => $displayNone2, 'idEntrada2' => $idEntradaNuevo, 'entradasDisponibles2' => $entrada, 'entradasCompradas2' => $entradaCompr, 'color2' => $color, 'colorNegro2' => $colorNegro, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc4(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }
        
        $cantidad3 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad3 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad3 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad3 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad3 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto4')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad3'=>$cantidad3, 'displayNone3' => $displayNone3, 'idEntrada3' => $idEntradaNuevo, 'entradasDisponibles3' => $entrada, 'entradasCompradas3' => $entradaCompr, 'color3' => $color, 'colorNegro3' => $colorNegro,  'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc4(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad4 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad4 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad4 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad4 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad4 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto4')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad4'=>$cantidad4, 'displayNone4' => $displayNone4, 'idEntrada4' => $idEntradaNuevo, 'entradasDisponibles4' => $entrada, 'entradasCompradas4' => $entradaCompr, 'color4' => $color, 'colorNegro4' => $colorNegro,  'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc4(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        $color = "background-color: #0081AA";
        $colorNegro = "background-color: #000";
        $idEntrada = EntradasConciertos::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
        $entrada = 0;
        $entradasDisponibles = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles) || is_array($entradasDisponibles)){
            foreach($entradasDisponibles as $entradasDisponibles){
                $entrada = $entradasDisponibles->entradasDisponibles;
            }
            
        }

        $entradaCompr = 0;
        $entradasCompradas = PrecioGradas::select('entradasCompradas')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasCompradas) || is_array($entradasCompradas)){
            foreach($entradasCompradas as $entradasCompradas){
                $entradaCompr = $entradasCompradas->entradasCompradas;
            }
            
        }

        $cantidad5 = 0;
        $entradasDisponibles2 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles2) || is_array($entradasDisponibles2)){
            foreach($entradasDisponibles2 as $entradasDisponibles2){
                if($entradasDisponibles2->entradasDisponibles == 1){
                    $cantidad5 = 1;
                }else if($entradasDisponibles2->entradasDisponibles == 2){
                    $cantidad5 = 2;
                }else if($entradasDisponibles2->entradasDisponibles == 3){
                    $cantidad5 = 3;
                }else if($entradasDisponibles2->entradasDisponibles == 4){
                    $cantidad5 = 4;
                }
                
            }
            
        }

        $agotado = '';
        $colorRojo = '';
        $agotado2 = '';
        $colorRojo2 = '';
        $agotado3 = '';
        $colorRojo3 = '';
        $agotado4 = '';
        $colorRojo4 = '';
        $agotado5 = '';
        $colorRojo5 = '';
        $entradasDisponibles3 = PrecioPistaA::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles3) || is_array($entradasDisponibles3)){
            foreach($entradasDisponibles3 as $entradasDisponibles3){
                if($entradasDisponibles3->entradasDisponibles == 0){
                    $agotado = 'pointer-events: none;';
                    $colorRojo = 'background-color: red;';
                }else{
                    $agotado = '';
                }
            }
            
        }

        $entradasDisponibles4 = PrecioPistaB::select('entradasDisponibles')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles4) || is_array($entradasDisponibles4)){
            foreach($entradasDisponibles4 as $entradasDisponibles4){
                if($entradasDisponibles4->entradasDisponibles == 0){
                    $agotado2 = 'pointer-events: none;';
                    $colorRojo2 = 'background-color: red;';
                }else{
                    $agotado2 = '';
                }
            }
            
        }

        $entradasDisponibles5 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '1')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles5) || is_array($entradasDisponibles5)){
            foreach($entradasDisponibles5 as $entradasDisponibles5){
                if($entradasDisponibles5->entradasDisponibles == 0){
                    $agotado3 = 'pointer-events: none;';
                    $colorRojo3 = 'background-color: red;';
                }else{
                    $agotado3 = '';
                }
            }
            
        }

        $entradasDisponibles6 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '2')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles6) || is_array($entradasDisponibles6)){
            foreach($entradasDisponibles6 as $entradasDisponibles6){
                if($entradasDisponibles6->entradasDisponibles == 0){
                    $agotado4 = 'pointer-events: none;';
                    $colorRojo4 = 'background-color: red;';
                }else{
                    $agotado4 = '';
                }
            }
            
        }

        $entradasDisponibles7 = PrecioGradas::select('entradasDisponibles')->where('numeroGrada', '3')->where('lugar', 'Estadio de la Cartuja')->where('artista', 'Bad Bunny')->get();
        if(is_object($entradasDisponibles7) || is_array($entradasDisponibles7)){
            foreach($entradasDisponibles7 as $entradasDisponibles7){
                if($entradasDisponibles7->entradasDisponibles == 0){
                    $agotado5 = 'pointer-events: none;';
                    $colorRojo5 = 'background-color: red;';
                }else{
                    $agotado5 = '';
                }
            }
            
        }
        return redirect()->to('reservaConcierto4')
        ->with(['colorAgotado'=>$colorRojo, 'agotado'=>$agotado, 'colorAgotado2'=>$colorRojo2, 'agotado2'=>$agotado2, 'colorAgotado3'=>$colorRojo3, 'agotado3'=>$agotado3, 'colorAgotado4'=>$colorRojo4, 'agotado4'=>$agotado4, 'colorAgotado5'=>$colorRojo5, 'agotado5'=>$agotado5, 'cantidad5'=>$cantidad5, 'displayNone5' => $displayNone5, 'idEntrada5' => $idEntradaNuevo, 'entradasDisponibles5' => $entrada, 'entradasCompradas5' => $entradaCompr, 'color5' => $color, 'colorNegro5' => $colorNegro,  'displayBlock5' => $displayBlock5]);
    }
  
}
