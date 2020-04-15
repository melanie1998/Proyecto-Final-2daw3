<?php

namespace App\Http\Controllers;

use App\Concierto;
use Illuminate\Http\Request;

class ControladorConciertos extends Controller
{
    public function verConciertos(){
        $datos = Concierto::select('id','nombreArtista', 'fecha', 'lugar', 'ciudad', 'fechaEntradas')->get();
        return  $datos;
    }

    /*CONCIERTO 1*/
    public function generalConc1(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto1')
        ->with(['displayNone' => $displayNone, 'displayBlock' => $displayBlock]);
    }

    public function pistaAConc1(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto1')
        ->with(['displayNone1' => $displayNone, 'displayBlock1' => $displayBlock]);
    }

    public function pistaBConc1(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        return redirect()->to('reservaConcierto1')
        ->with(['displayNone2' => $displayNone2, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc1(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        return redirect()->to('reservaConcierto1')
        ->with(['displayNone3' => $displayNone3, 'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc1(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        return redirect()->to('reservaConcierto1')
        ->with(['displayNone4' => $displayNone4, 'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc1(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        return redirect()->to('reservaConcierto1')
        ->with(['displayNone5' => $displayNone5, 'displayBlock5' => $displayBlock5]);
    }

    /*CONCIERTO 2*/
    public function generalConc2(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto2')
        ->with(['displayNone' => $displayNone, 'displayBlock' => $displayBlock]);
    }

    public function pistaAConc2(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto2')
        ->with(['displayNone1' => $displayNone, 'displayBlock1' => $displayBlock]);
    }

    public function pistaBConc2(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        return redirect()->to('reservaConcierto2')
        ->with(['displayNone2' => $displayNone2, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc2(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        return redirect()->to('reservaConcierto2')
        ->with(['displayNone3' => $displayNone3, 'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc2(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        return redirect()->to('reservaConcierto2')
        ->with(['displayNone4' => $displayNone4, 'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc2(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        return redirect()->to('reservaConcierto2')
        ->with(['displayNone5' => $displayNone5, 'displayBlock5' => $displayBlock5]);
    }

     /*CONCIERTO 3*/
     public function generalConc3(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto3')
        ->with(['displayNone' => $displayNone, 'displayBlock' => $displayBlock]);
    }

     public function pistaAConc3(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto3')
        ->with(['displayNone1' => $displayNone, 'displayBlock1' => $displayBlock]);
    }

    public function pistaBConc3(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        return redirect()->to('reservaConcierto3')
        ->with(['displayNone2' => $displayNone2, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc3(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        return redirect()->to('reservaConcierto3')
        ->with(['displayNone3' => $displayNone3, 'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc3(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        return redirect()->to('reservaConcierto3')
        ->with(['displayNone4' => $displayNone4, 'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc3(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        return redirect()->to('reservaConcierto3')
        ->with(['displayNone5' => $displayNone5, 'displayBlock5' => $displayBlock5]);
    }

     /*CONCIERTO 4*/
     public function generalConc4(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto4')
        ->with(['displayNone1' => $displayNone, 'displayBloc1' => $displayBlock]);
    }


     public function pistaAConc4(){
        $displayNone = "display: none";
        $displayBlock = "display: block";
        return redirect()->to('reservaConcierto4')
        ->with(['displayNone' => $displayNone, 'displayBlock' => $displayBlock]);
    }

    public function pistaBConc4(){
        $displayNone2 = "display: none";
        $displayBlock2 = "display: block";
        return redirect()->to('reservaConcierto4')
        ->with(['displayNone2' => $displayNone2, 'displayBlock2' => $displayBlock2]);
    }

    
    public function grada1Conc4(){
        $displayNone3 = "display: none";
        $displayBlock3 = "display: block";
        return redirect()->to('reservaConcierto4')
        ->with(['displayNone3' => $displayNone3, 'displayBlock3' => $displayBlock3]);
    }

    
    public function grada2Conc4(){
        $displayNone4 = "display: none";
        $displayBlock4 = "display: block";
        return redirect()->to('reservaConcierto4')
        ->with(['displayNone4' => $displayNone4, 'displayBlock4' => $displayBlock4]);
    }

    
    public function grada3Conc4(){
        $displayNone5 = "display: none";
        $displayBlock5 = "display: block";
        return redirect()->to('reservaConcierto4')
        ->with(['displayNone5' => $displayNone5, 'displayBlock5' => $displayBlock5]);
    }

  
}
