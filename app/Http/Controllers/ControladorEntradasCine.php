<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Butacas;
use App\EntradasCine;
use Auth;
use DB;
use App\Mail\EnviarDatosCompraCine;
use Illuminate\Support\Facades\Mail;

class ControladorEntradasCine extends Controller
{

    public function guardarNumButaca($butaca, $dia, $hora, $fila, $idEntrada){
        $datos = new Butacas();
        $datos->titulo = 'Joker';
        $datos->numButaca = $butaca;
        $datos->fila = $fila;
        $datos->dia = $dia;
        $datos->hora = $hora;
        $datos->idUsuario = Auth::user()->usuario;
        $datos->idEntrada = $idEntrada;
        $datos->save();  
        
    }

    public function compraEntradas(Request $request){
        $validator = Validator::make($request->all(),[
            'numEntradas' => ['required'],
            'precio' => ['required'],
            'butaca' => ['required'],
            'fila' => ['required'],
            'dia' => ['required'],
            'hora' => ['required'],
            'idEntrada' => ['required'],
        ],[

         
        ]);

        if ($validator->fails()) {
             return redirect()->back()
             ->withErrors($validator)
             ->withInput();

        }else{

            $datos = new EntradasCine();
            $datos->tituloPelicula = 'Joker';
            $datos->dia = $request->input('dia');
            $datos->hora = $request->input('hora');
            $datos->numEntradas = $request->input('numEntradas');
            $datos->numButaca = $request->input('butaca');    
            $datos->fila = $request->input('fila');    
            $datos->precio = $request->input('precio');
            $datos->idUsuario = Auth::user()->usuario;
            $datos->idEntrada = $request->input('idEntrada');
            $datos->save();
      
            $email = Auth::user()->email;
            Mail::to($email)->send(new EnviarDatosCompraCine($datos));
            return redirect()->back();
        }
    
    }
    
    public function cambiarDiaHora($dia, $hora){
        $pasarFecha = "";
        $pasarPrecio = "";
        if($dia == 'LUNES'){
            $pasarFecha = 'LUN';
            $pasarPrecio = '7€';
        }else if($dia == 'MARTES'){
            $pasarFecha = 'MAR';
            $pasarPrecio = '7€';
        }else if($dia == 'MIERCOLES'){
            $pasarFecha = 'MIE';
            $pasarPrecio = '6€';
        }else if($dia == 'JUEVES'){
            $pasarFecha = 'JUE';
            $pasarPrecio = '7€';
        }else if($dia == 'VIERNES'){
            $pasarFecha = 'VIE';
            $pasarPrecio = '8€';
        }else if($dia == 'SABADO'){
            $pasarFecha = 'SAB';
            $pasarPrecio = '8€';
        }else if($dia == 'DOMINGO'){
            $pasarFecha = 'DOM';
            $pasarPrecio = '8€';
        }
        $pointerEvent = "pointer-events: auto;";
        $idEntradaNuevo = 0;
        $idEntrada = EntradasCine::select('idEntrada')->latest()->first();
        if(empty($idEntrada)){
            $idEntradaNuevo = 0;
        }else{
            if(is_object($idEntrada) || is_array($idEntrada)){
                $idEntradaNuevo = $idEntrada['idEntrada'] + 1;
            }
        }
   
        $data1 = "";
        $data2 = "";
        $data3= "";
        $data4= "";
        $data5= "";
        $data6= "";
        $data7= "";
        $data8= "";
        $data9= "";
        $data10= "";
        $data11= "";
        $data11= "";
        $data12= "";
        $data13= "";
        $data14= "";
        $data15= "";
        $data16= "";
        $data17= "";
        $data18= "";
        $data19= "";
        $data20= "";
        $data21= "";
        $data22= "";
        $data23= "";
        $data24= "";
        $data25= "";
        $data26= "";
        $data27= "";
        $data28= "";
        $data29= "";
        $data30= "";
        $data31= "";
        $data32= "";
        $data33= "";
        $data34= "";
        $data35= "";
        $data36= "";
        $data37= "";
        $data38= "";
        $data39= "";
        $data40= "";
        $data41= "";
        $data42= "";
        $data43= "";
        $data44= "";
        $data45= "";
        $data46= "";
        $data47= "";
        $data48= "";
        $data49= "";
        $data50= "";
        $data51= "";
        $data52= "";
        $data53= "";
        $data54= "";
        $data55= "";
        $data56= "";
        $data57= "";
        $data58= "";
        $data59= "";
        $data60= "";
        $data61= "";
        $data62= "";
        $data63= "";
        $data64= "";
        $data65= "";
        $data66= "";
        $data67= "";
        $data68= "";
        $data69= "";
        $data70= "";
        $data71= "";
        $data72= "";
        $data73= "";
        $data74= "";
        $data75= "";
        $data76= "";
        $data77= "";
        $data78= "";
        $data79= "";
        $data80= "";
        $data81= "";
        $data82= "";
        $data83= "";
        $data84= "";
        $data85= "";
        $data86= "";
        $data87= "";
        $data88= "";
        $data89= "";
        $data90= "";
        $data91= "";
        $data92= "";
        $data93= "";
        $data94= "";
        $data95= "";
        $data96= "";
        $data97= "";
        $data98= "";
        $data99= "";
        $data100= "";
        $data101= "";
        $data102= "";
        $data103= "";
        $data104= "";
        $data105= "";
        $data106= "";
        $data107= "";
        $data108= "";
        $data109= "";
        $data110= "";
        $data111= "";
        $data112= "";
        $data113= "";
        $data114= "";
        $data115= "";
        $data116= "";
        $data117= "";
        $data118= "";
        $data119= "";
        $data120= "";
        $data121= "";
        $data122= "";
        $data123= "";
        $data124= "";
        $data125= "";
        $data126= "";
        $data127= "";
        $data128= "";
        $data129= "";
        $data130= "";
        $data131= "";
        $data132= "";
        $data133= "";
        $data134= "";
        $data135= "";
        $data136= "";
        $data137= "";
        $data138= "";
        $data139= "";
        $data140= "";
        $data141= "";
        $data142= "";
        $data143= "";
        $data144= "";
        $data145= "";
        $data146= "";
        $data147= "";
        $data148= "";
        $data149= "";
        $data150= "";
        $data151= "";
        $data152= "";
        $data153= "";
        $data154= "";
        $data155= "";
        $data156= "";
        $data157= "";
        $data158= "";
        $data159= "";
        $data160= "";
        $data161= "";
        $data162= "";
        $data163= "";
        $data164= "";
        $data165= "";
        $data166= "";
        $data167= "";
        $data168= "";
        $data169= "";
        $data170= "";
        $data171= "";
        $data172= "";
        $data173= "";
        $data174= "";
        $data175= "";
        $data176= "";
        $data177= "";
        $data178= "";
        $data179= "";
        $data180= "";
        $data181= "";
        $data182= "";
        $data183= "";
        $data184= "";
        $data185= "";
        $data186= "";
        $data187= "";
        $data188= "";
        $data189= "";
        $data190= "";
        $data191= "";
        $data192= "";
        $data193= "";
        $data194= "";
        $data195= "";
        $data196= "";
        $data197= "";
        $data198= "";
        $data199= "";
        $data200= "";
        $data201= "";
        $data202= "";
        $data203= "";
        $data204= "";
        $data205= "";
        $data206= "";
        $data207= "";
        $data208= "";
        $data209= "";
        $data210= "";
        $data211= "";
        $data212= "";
        $data213= "";
        $data214= "";
        $data215= "";
        $data216= "";
        $data217= "";
        $data218= "";
        $data219= "";
        $data220= "";
        $data221= "";
        $data222= "";
        $data223= "";
        $data224= "";
        $data225= "";
        $data226= "";
        $data227= "";
        $data228= "";
        $data229= "";
        $data230= "";
        $data231= "";
        $data232= "";
        $data233= "";
        $data234= "";
        $data235= "";
        $data236= "";
        $data237= "";
        $data238= "";
        $data239= "";
        $data240= "";

    $datos = Butacas::select('numButaca')->where('dia', $dia)->where('hora', $hora)->where('titulo', 'Joker')->get();
    if(empty($datos)){
        $data1 = "";
        $data2 = "";
        $data3= "";
        $data4= "";
        $data5= "";
        $data6= "";
        $data7= "";
        $data8= "";
        $data9= "";
        $data10= "";
        $data11= "";
        $data11= "";
        $data12= "";
        $data13= "";
        $data14= "";
        $data15= "";
        $data16= "";
        $data17= "";
        $data18= "";
        $data19= "";
        $data20= "";
        $data21= "";
        $data22= "";
        $data23= "";
        $data24= "";
        $data25= "";
        $data26= "";
        $data27= "";
        $data28= "";
        $data29= "";
        $data30= "";
        $data31= "";
        $data32= "";
        $data33= "";
        $data34= "";
        $data35= "";
        $data36= "";
        $data37= "";
        $data38= "";
        $data39= "";
        $data40= "";
        $data41= "";
        $data42= "";
        $data43= "";
        $data44= "";
        $data45= "";
        $data46= "";
        $data47= "";
        $data48= "";
        $data49= "";
        $data50= "";
        $data51= "";
        $data52= "";
        $data53= "";
        $data54= "";
        $data55= "";
        $data56= "";
        $data57= "";
        $data58= "";
        $data59= "";
        $data60= "";
        $data61= "";
        $data62= "";
        $data63= "";
        $data64= "";
        $data65= "";
        $data66= "";
        $data67= "";
        $data68= "";
        $data69= "";
        $data70= "";
        $data71= "";
        $data72= "";
        $data73= "";
        $data74= "";
        $data75= "";
        $data76= "";
        $data77= "";
        $data78= "";
        $data79= "";
        $data80= "";
        $data81= "";
        $data82= "";
        $data83= "";
        $data84= "";
        $data85= "";
        $data86= "";
        $data87= "";
        $data88= "";
        $data89= "";
        $data90= "";
        $data91= "";
        $data92= "";
        $data93= "";
        $data94= "";
        $data95= "";
        $data96= "";
        $data97= "";
        $data98= "";
        $data99= "";
        $data100= "";
        $data101= "";
        $data102= "";
        $data103= "";
        $data104= "";
        $data105= "";
        $data106= "";
        $data107= "";
        $data108= "";
        $data109= "";
        $data110= "";
        $data111= "";
        $data112= "";
        $data113= "";
        $data114= "";
        $data115= "";
        $data116= "";
        $data117= "";
        $data118= "";
        $data119= "";
        $data120= "";
        $data121= "";
        $data122= "";
        $data123= "";
        $data124= "";
        $data125= "";
        $data126= "";
        $data127= "";
        $data128= "";
        $data129= "";
        $data130= "";
        $data131= "";
        $data132= "";
        $data133= "";
        $data134= "";
        $data135= "";
        $data136= "";
        $data137= "";
        $data138= "";
        $data139= "";
        $data140= "";
        $data141= "";
        $data142= "";
        $data143= "";
        $data144= "";
        $data145= "";
        $data146= "";
        $data147= "";
        $data148= "";
        $data149= "";
        $data150= "";
        $data151= "";
        $data152= "";
        $data153= "";
        $data154= "";
        $data155= "";
        $data156= "";
        $data157= "";
        $data158= "";
        $data159= "";
        $data160= "";
        $data161= "";
        $data162= "";
        $data163= "";
        $data164= "";
        $data165= "";
        $data166= "";
        $data167= "";
        $data168= "";
        $data169= "";
        $data170= "";
        $data171= "";
        $data172= "";
        $data173= "";
        $data174= "";
        $data175= "";
        $data176= "";
        $data177= "";
        $data178= "";
        $data179= "";
        $data180= "";
        $data181= "";
        $data182= "";
        $data183= "";
        $data184= "";
        $data185= "";
        $data186= "";
        $data187= "";
        $data188= "";
        $data189= "";
        $data190= "";
        $data191= "";
        $data192= "";
        $data193= "";
        $data194= "";
        $data195= "";
        $data196= "";
        $data197= "";
        $data198= "";
        $data199= "";
        $data200= "";
        $data201= "";
        $data202= "";
        $data203= "";
        $data204= "";
        $data205= "";
        $data206= "";
        $data207= "";
        $data208= "";
        $data209= "";
        $data210= "";
        $data211= "";
        $data212= "";
        $data213= "";
        $data214= "";
        $data215= "";
        $data216= "";
        $data217= "";
        $data218= "";
        $data219= "";
        $data220= "";
        $data221= "";
        $data222= "";
        $data223= "";
        $data224= "";
        $data225= "";
        $data226= "";
        $data227= "";
        $data228= "";
        $data229= "";
        $data230= "";
        $data231= "";
        $data232= "";
        $data233= "";
        $data234= "";
        $data235= "";
        $data236= "";
        $data237= "";
        $data238= "";
        $data239= "";
        $data240= "";
        }else{
            if(is_object($datos) || is_array($datos)){
                foreach($datos as $dato){
                        if($dato->numButaca == '1'){
                                $data1 = $dato->numButaca;
                        }else if($dato->numButaca == '2'){
                            $data2 = $dato->numButaca;
                        }else if($dato->numButaca == '3'){
                            $data3 = $dato->numButaca;
                        }else if($dato->numButaca == '4'){
                            $data4 = $dato->numButaca;
                        }else if($dato->numButaca == '5'){
                        $data5 = $dato->numButaca;
                        }else if($dato->numButaca == '6'){
                            $data6 = $dato->numButaca;
                        }else if($dato->numButaca == '7'){
                            $data7 = $dato->numButaca;
                        }else if($dato->numButaca == '8'){
                            $data8 = $dato->numButaca;
                        }else if($dato->numButaca == '9'){
                            $data9 = $dato->numButaca;
                        }else if($dato->numButaca == '10'){
                            $data10 = $dato->numButaca;
                        }else if($dato->numButaca == '11'){
                            $data11 = $dato->numButaca;
                        }else if($dato->numButaca == '12'){
                            $data12 = $dato->numButaca;
                        }else if($dato->numButaca == '13'){
                            $data13 = $dato->numButaca;
                        }else if($dato->numButaca == '14'){
                            $data14 = $dato->numButaca;
                        }else if($dato->numButaca == '15'){
                            $data15 = $dato->numButaca;
                        }else if($dato->numButaca == '16'){
                            $data16 = $dato->numButaca;
                        }else if($dato->numButaca == '17'){
                            $data17 = $dato->numButaca;
                        }else if($dato->numButaca == '18'){
                            $data18 = $dato->numButaca;
                        }else if($dato->numButaca == '19'){
                            $data19 = $dato->numButaca;
                        }else if($dato->numButaca == '20'){
                            $data20= $dato->numButaca;
                        }else if($dato->numButaca == '21'){
                            $data21= $dato->numButaca;
                        }else if($dato->numButaca == '22'){
                            $data22= $dato->numButaca;
                        }else if($dato->numButaca == '23'){
                            $data23= $dato->numButaca;
                        }else if($dato->numButaca == '24'){
                            $data24= $dato->numButaca;
                        }else if($dato->numButaca == '25'){
                            $data25= $dato->numButaca;
                        }else if($dato->numButaca == '26'){
                            $data26= $dato->numButaca;
                        }else if($dato->numButaca == '27'){
                            $data27= $dato->numButaca;
                        }else if($dato->numButaca == '28'){
                            $data28= $dato->numButaca;
                        }else if($dato->numButaca == '29'){
                            $data29= $dato->numButaca;
                        }else if($dato->numButaca == '30'){
                            $data30= $dato->numButaca;
                        }else if($dato->numButaca == '31'){
                            $data31= $dato->numButaca;
                        }else if($dato->numButaca == '32'){
                            $data32= $dato->numButaca;
                        }else if($dato->numButaca == '33'){
                            $data33= $dato->numButaca;
                        }else if($dato->numButaca == '34'){
                            $data34= $dato->numButaca;
                        }else if($dato->numButaca == '35'){
                            $data35= $dato->numButaca;
                        }else if($dato->numButaca == '36'){
                            $data36= $dato->numButaca;
                        }else if($dato->numButaca == '37'){
                            $data37= $dato->numButaca;
                        }else if($dato->numButaca == '38'){
                            $data38= $dato->numButaca;
                        }else if($dato->numButaca == '39'){
                            $data39= $dato->numButaca;
                        }else if($dato->numButaca == '40'){
                            $data40= $dato->numButaca;
                        }else if($dato->numButaca == '41'){
                            $data41= $dato->numButaca;
                        }else if($dato->numButaca == '42'){
                            $data42= $dato->numButaca;
                        }else if($dato->numButaca == '43'){
                            $data43= $dato->numButaca;
                        }else if($dato->numButaca == '44'){
                            $data44= $dato->numButaca;
                        }else if($dato->numButaca == '45'){
                            $data45= $dato->numButaca;
                        }else if($dato->numButaca == '46'){
                            $data46= $dato->numButaca;
                        }else if($dato->numButaca == '47'){
                            $data47= $dato->numButaca;
                        }else if($dato->numButaca == '48'){
                            $data48= $dato->numButaca;
                        }else if($dato->numButaca == '49'){
                            $data49= $dato->numButaca;
                        }else if($dato->numButaca == '50'){
                            $data50= $dato->numButaca;
                        }else if($dato->numButaca == '51'){
                            $data51= $dato->numButaca;   
                        }else if($dato->numButaca == '52'){
                            $data52= $dato->numButaca;
                        }else if($dato->numButaca == '53'){
                            $data53= $dato->numButaca;
                        }else if($dato->numButaca == '54'){
                            $data54= $dato->numButaca;
                        }else if($dato->numButaca == '55'){
                            $data55= $dato->numButaca;
                        }else if($dato->numButaca == '56'){
                            $data56= $dato->numButaca;
                        }else if($dato->numButaca == '57'){
                            $data57= $dato->numButaca;
                        }else if($dato->numButaca == '58'){
                            $data58= $dato->numButaca;
                        }else if($dato->numButaca == '59'){
                            $data59= $dato->numButaca;
                        }else if($dato->numButaca == '60'){
                            $data60= $dato->numButaca;
                        }else if($dato->numButaca == '61'){
                            $data61= $dato->numButaca;
                        }else if($dato->numButaca == '62'){
                            $data62= $dato->numButaca;
                        }else if($dato->numButaca == '63'){
                            $data63= $dato->numButaca;
                        }else if($dato->numButaca == '64'){
                            $data64= $dato->numButaca;
                        }else if($dato->numButaca == '65'){
                            $data65= $dato->numButaca;
                        }else if($dato->numButaca == '66'){
                            $data66= $dato->numButaca;
                        }else if($dato->numButaca == '67'){
                            $data67= $dato->numButaca;
                        }else if($dato->numButaca == '68'){
                            $data68= $dato->numButaca;
                        }else if($dato->numButaca == '69'){
                            $data69= $dato->numButaca;
                        }else if($dato->numButaca == '70'){
                            $data70= $dato->numButaca;
                        }else if($dato->numButaca == '71'){
                            $data71= $dato->numButaca;
                        }else if($dato->numButaca == '72'){
                            $data72= $dato->numButaca;
                        }else if($dato->numButaca == '73'){
                            $data73= $dato->numButaca;
                        }else if($dato->numButaca == '74'){
                            $data74= $dato->numButaca;
                        }else if($dato->numButaca == '75'){
                            $data75= $dato->numButaca;
                        }else if($dato->numButaca == '76'){
                            $data76= $dato->numButaca;
                        }else if($dato->numButaca == '77'){
                            $data77= $dato->numButaca;
                        }else if($dato->numButaca == '78'){
                            $data78= $dato->numButaca;
                        }else if($dato->numButaca == '79'){
                            $data79= $dato->numButaca;
                        }else if($dato->numButaca == '80'){
                            $data80= $dato->numButaca;
                        }else if($dato->numButaca == '81'){
                            $data81= $dato->numButaca;
                        }else if($dato->numButaca == '82'){
                            $data82= $dato->numButaca;
                        }else if($dato->numButaca == '83'){
                            $data83= $dato->numButaca;
                        }else if($dato->numButaca == '84'){
                            $data84= $dato->numButaca;
                        }else if($dato->numButaca == '85'){
                            $data85= $dato->numButaca;
                        }else if($dato->numButaca == '86'){
                            $data86= $dato->numButaca;
                        }else if($dato->numButaca == '87'){
                            $data87= $dato->numButaca;
                        }else if($dato->numButaca == '88'){
                            $data88= $dato->numButaca;
                        }else if($dato->numButaca == '89'){
                            $data89= $dato->numButaca;
                        }else if($dato->numButaca == '90'){
                            $data90= $dato->numButaca;
                        }else if($dato->numButaca == '91'){
                            $data91= $dato->numButaca;
                        }else if($dato->numButaca == '92'){
                            $data92= $dato->numButaca;
                        }else if($dato->numButaca == '93'){
                            $data93= $dato->numButaca;
                        }else if($dato->numButaca == '94'){
                            $data94= $dato->numButaca;
                        }else if($dato->numButaca == '95'){
                            $data95= $dato->numButaca;
                        }else if($dato->numButaca == '96'){
                            $data96= $dato->numButaca;
                        }else if($dato->numButaca == '97'){
                            $data97= $dato->numButaca;
                        }else if($dato->numButaca == '98'){
                            $data98= $dato->numButaca;
                        }else if($dato->numButaca == '99'){
                            $data99= $dato->numButaca;
                        }else if($dato->numButaca == '100'){
                            $data100= $dato->numButaca;
                        }else if($dato->numButaca == '101'){
                            $data101= $dato->numButaca;
                        }else if($dato->numButaca == '102'){
                            $data102= $dato->numButaca;
                        }else if($dato->numButaca == '103'){
                            $data103= $dato->numButaca;
                        }else if($dato->numButaca == '104'){
                            $data104= $dato->numButaca;
                        }else if($dato->numButaca == '105'){
                            $data105= $dato->numButaca;
                        }else if($dato->numButaca == '106'){
                            $data106= $dato->numButaca;
                        }else if($dato->numButaca == '107'){
                            $data107= $dato->numButaca;
                        }else if($dato->numButaca == '108'){
                            $data108= $dato->numButaca;
                        }else if($dato->numButaca == '109'){
                            $data109= $dato->numButaca;
                        }else if($dato->numButaca == '110'){
                            $data110= $dato->numButaca;
                        }else if($dato->numButaca == '111'){
                            $data111= $dato->numButaca;
                        }else if($dato->numButaca == '112'){
                            $data112= $dato->numButaca;
                        }else if($dato->numButaca == '113'){
                            $data113= $dato->numButaca;
                        }else if($dato->numButaca == '114'){
                            $data114= $dato->numButaca;
                        }else if($dato->numButaca == '115'){
                            $data115= $dato->numButaca;
                        }else if($dato->numButaca == '116'){
                            $data116= $dato->numButaca;
                        }else if($dato->numButaca == '117'){
                            $data117= $dato->numButaca;
                        }else if($dato->numButaca == '118'){
                            $data118= $dato->numButaca;
                        }else if($dato->numButaca == '119'){
                            $data119= $dato->numButaca;
                        }else if($dato->numButaca == '120'){
                            $data120= $dato->numButaca;
                        }else if($dato->numButaca == '121'){
                            $data121= $dato->numButaca;
                        }else if($dato->numButaca == '122'){
                            $data122= $dato->numButaca;
                        }else if($dato->numButaca == '123'){
                            $data123= $dato->numButaca;
                        }else if($dato->numButaca == '124'){
                            $data124= $dato->numButaca;
                        }else if($dato->numButaca == '125'){
                            $data125= $dato->numButaca;
                        }else if($dato->numButaca == '126'){
                            $data126= $dato->numButaca;
                        }else if($dato->numButaca == '127'){
                            $data127= $dato->numButaca;
                        }else if($dato->numButaca == '128'){
                            $data128= $dato->numButaca;
                        }else if($dato->numButaca == '129'){
                            $data129= $dato->numButaca;
                        }else if($dato->numButaca == '130'){
                            $data130= $dato->numButaca;
                        }else if($dato->numButaca == '131'){
                            $data131= $dato->numButaca;
                        }else if($dato->numButaca == '132'){
                            $data132= $dato->numButaca;
                        }else if($dato->numButaca == '133'){
                            $data133= $dato->numButaca;
                        }else if($dato->numButaca == '134'){
                            $data134= $dato->numButaca;
                        }else if($dato->numButaca == '135'){
                            $data135= $dato->numButaca;
                        }else if($dato->numButaca == '136'){
                            $data136= $dato->numButaca;
                        }else if($dato->numButaca == '137'){
                            $data137= $dato->numButaca;
                        }else if($dato->numButaca == '138'){
                            $data138= $dato->numButaca;
                        }else if($dato->numButaca == '139'){
                            $data139= $dato->numButaca;
                        }else if($dato->numButaca == '140'){
                            $data140= $dato->numButaca;
                        }else if($dato->numButaca == '141'){
                            $data141= $dato->numButaca;
                        }else if($dato->numButaca == '142'){
                            $data142= $dato->numButaca;
                        }else if($dato->numButaca == '143'){
                            $data143= $dato->numButaca;
                        }else if($dato->numButaca == '144'){
                            $data144= $dato->numButaca;
                        }else if($dato->numButaca == '145'){
                            $data145= $dato->numButaca;
                        }else if($dato->numButaca == '146'){
                            $data146= $dato->numButaca;
                        }else if($dato->numButaca == '147'){
                            $data147= $dato->numButaca;
                        }else if($dato->numButaca == '148'){
                            $data148= $dato->numButaca;
                        }else if($dato->numButaca == '149'){
                            $data149= $dato->numButaca;
                        }else if($dato->numButaca == '150'){
                            $data150= $dato->numButaca;
                        }else if($dato->numButaca == '151'){
                            $data151= $dato->numButaca;
                        }else if($dato->numButaca == '152'){
                            $data152= $dato->numButaca;
                        }else if($dato->numButaca == '153'){
                            $data153= $dato->numButaca;
                        }else if($dato->numButaca == '154'){
                            $data154= $dato->numButaca;
                        }else if($dato->numButaca == '155'){
                            $data155= $dato->numButaca;
                        }else if($dato->numButaca == '156'){
                            $data156= $dato->numButaca;
                        }else if($dato->numButaca == '157'){
                            $data157= $dato->numButaca;
                        }else if($dato->numButaca == '158'){
                            $data158= $dato->numButaca;
                        }else if($dato->numButaca == '159'){
                            $data159= $dato->numButaca;
                        }else if($dato->numButaca == '160'){
                            $data160= $dato->numButaca;
                        }else if($dato->numButaca == '161'){
                            $data161= $dato->numButaca;
                        }else if($dato->numButaca == '162'){
                            $data162= $dato->numButaca;
                        }else if($dato->numButaca == '163'){
                            $data163= $dato->numButaca;
                        }else if($dato->numButaca == '164'){
                            $data164= $dato->numButaca;
                        }else if($dato->numButaca == '165'){
                            $data165= $dato->numButaca;
                        }else if($dato->numButaca == '166'){
                            $data166= $dato->numButaca;
                        }else if($dato->numButaca == '167'){
                            $data167= $dato->numButaca;
                        }else if($dato->numButaca == '168'){
                            $data168= $dato->numButaca;
                        }else if($dato->numButaca == '169'){
                            $data169= $dato->numButaca;
                        }else if($dato->numButaca == '170'){
                            $data170= $dato->numButaca;
                        }else if($dato->numButaca == '171'){
                            $data171= $dato->numButaca;
                        }else if($dato->numButaca == '172'){
                            $data172= $dato->numButaca;
                        }else if($dato->numButaca == '173'){
                            $data173= $dato->numButaca;
                        }else if($dato->numButaca == '174'){
                            $data174= $dato->numButaca;
                        }else if($dato->numButaca == '175'){
                            $data175= $dato->numButaca;
                        }else if($dato->numButaca == '176'){
                            $data176= $dato->numButaca;
                        }else if($dato->numButaca == '177'){
                            $data177= $dato->numButaca;
                        }else if($dato->numButaca == '178'){
                            $data178= $dato->numButaca;
                        }else if($dato->numButaca == '179'){
                            $data179= $dato->numButaca;
                        }else if($dato->numButaca == '180'){
                            $data180= $dato->numButaca;
                        }else if($dato->numButaca == '181'){
                            $data181= $dato->numButaca;
                        }else if($dato->numButaca == '182'){
                            $data182= $dato->numButaca;
                        }else if($dato->numButaca == '183'){
                            $data183= $dato->numButaca;
                        }else if($dato->numButaca == '184'){
                            $data184= $dato->numButaca;
                        }else if($dato->numButaca == '185'){
                            $data185= $dato->numButaca;
                        }else if($dato->numButaca == '186'){
                            $data186= $dato->numButaca;
                        }else if($dato->numButaca == '187'){
                            $data187= $dato->numButaca;
                        }else if($dato->numButaca == '188'){
                            $data188= $dato->numButaca;
                        }else if($dato->numButaca == '189'){
                            $data189= $dato->numButaca;
                        }else if($dato->numButaca == '190'){
                            $data190= $dato->numButaca;
                        }else if($dato->numButaca == '191'){
                            $data191= $dato->numButaca;
                        }else if($dato->numButaca == '192'){
                            $data192= $dato->numButaca;
                        }else if($dato->numButaca == '193'){
                            $data193= $dato->numButaca;
                        }else if($dato->numButaca == '194'){
                            $data194= $dato->numButaca;
                        }else if($dato->numButaca == '195'){
                            $data195= $dato->numButaca;
                        }else if($dato->numButaca == '196'){
                            $data196= $dato->numButaca;
                        }else if($dato->numButaca == '197'){
                            $data197= $dato->numButaca;
                        }else if($dato->numButaca == '198'){
                            $data198= $dato->numButaca;
                        }else if($dato->numButaca == '199'){
                            $data199= $dato->numButaca;
                        }else if($dato->numButaca == '200'){
                            $data200 = $dato->numButaca;
                        }else if($dato->numButaca == '201'){
                            $data201 =$dato->numButaca;
                        }else if($dato->numButaca == '202'){
                            $data202 =$dato->numButaca;
                        }else if($dato->numButaca == '203'){
                            $data203 =$dato->numButaca;
                        }else if($dato->numButaca == '204'){
                            $data204 =$dato->numButaca;
                        }else if($dato->numButaca == '205'){
                            $data205 =$dato->numButaca;
                        }else if($dato->numButaca == '206'){
                            $data206 =$dato->numButaca;
                        }else if($dato->numButaca == '207'){
                            $data207 =$dato->numButaca;
                        }else if($dato->numButaca == '208'){
                            $data208 =$dato->numButaca;
                        }else if($dato->numButaca == '209'){
                            $data209 =$dato->numButaca;
                        }else if($dato->numButaca == '210'){
                            $data210 =$dato->numButaca;
                        }else if($dato->numButaca == '211'){
                            $data211 =$dato->numButaca;
                        }else if($dato->numButaca == '212'){
                            $data212 =$dato->numButaca;
                        }else if($dato->numButaca == '213'){
                            $data213 =$dato->numButaca;
                        }else if($dato->numButaca == '214'){
                            $data214 =$dato->numButaca;
                        }else if($dato->numButaca == '215'){
                            $data215 = $dato->numButaca;
                        }else if($dato->numButaca == '216'){
                            $data216 =$dato->numButaca;
                        }else if($dato->numButaca == '217'){
                            $data217 =$dato->numButaca;
                        }else if($dato->numButaca == '218'){
                            $data218 =$dato->numButaca;
                        }else if($dato->numButaca == '219'){
                            $data219 =$dato->numButaca;
                        }else if($dato->numButaca == '220'){
                            $data220 =$dato->numButaca;
                        }else if($dato->numButaca == '221'){
                            $data221 =$dato->numButaca;
                        }else if($dato->numButaca == '222'){
                            $data222 =$dato->numButaca;
                        }else if($dato->numButaca == '223'){
                            $data223 =$dato->numButaca;
                        }else if($dato->numButaca == '224'){
                            $data224 =$dato->numButaca;
                        }else if($dato->numButaca == '225'){
                            $data225 =$dato->numButaca;
                        }else if($dato->numButaca == '226'){
                            $data226 =$dato->numButaca;
                        }else if($dato->numButaca == '227'){
                            $data227 =$dato->numButaca;
                        }else if($dato->numButaca == '228'){
                            $data228 =$dato->numButaca;
                        }else if($dato->numButaca == '229'){
                            $data229 =$dato->numButaca;
                        }else if($dato->numButaca == '230'){
                            $data230 =$dato->numButaca;
                        }else if($dato->numButaca == '231'){
                            $data231 =$dato->numButaca;
                        }else if($dato->numButaca == '232'){
                            $data232 =$dato->numButaca;
                        }else if($dato->numButaca == '233'){
                            $data233 =$dato->numButaca;
                        }else if($dato->numButaca == '234'){
                            $data234 =$dato->numButaca;
                        }else if($dato->numButaca == '235'){
                            $data235 =$dato->numButaca;
                        }else if($dato->numButaca == '236'){
                            $data236 =$dato->numButaca;
                        }else if($dato->numButaca == '237'){
                            $data237 =$dato->numButaca;
                        }else if($dato->numButaca == '238'){
                            $data238 =$dato->numButaca;
                        }else if($dato->numButaca == '239'){
                            $data239 =$dato->numButaca;
                        }else if($dato->numButaca == '240'){
                            $data240 =$dato->numButaca;
                        }
 
                    
                    }
                }
        }
        return redirect()->back()
        ->with(['pointerEvent'=>$pointerEvent, 'pasarFecha' => $pasarFecha, 'pasarPrecio' => $pasarPrecio,'idEntrada'=>$idEntradaNuevo,'dia'=>$dia, 'hora'=>$hora, 'data1'=>$data1, 'data2'=>$data2, 'data3'=>$data3, 'data4'=>$data4, 'data5'=>$data5, 'data6'=>$data6, 'data7'=>$data7, 'data8'=>$data8, 'data9'=>$data9, 'data10'=>$data10, 'data11'=>$data11, 'data12'=>$data12, 'data13'=>$data13, 'data14'=>$data14, 'data15'=>$data15, 'data16'=>$data16, 'data17'=>$data17, 'data18'=>$data18, 'data19'=>$data19, 'data20'=>$data20, 'data21'=>$data21, 'data22'=>$data22, 'data23'=>$data23, 'data24'=>$data24, 'data25'=>$data25, 'data26'=>$data26, 'data27'=>$data27, 'data28'=>$data28, 'data29'=>$data29, 'data30'=>$data30, 'data31'=>$data31, 'data32'=>$data32, 'data33'=>$data33, 'data34'=>$data34, 'data35'=>$data35, 'data36'=>$data36, 'data37'=>$data37, 'data38'=>$data38, 'data39'=>$data39, 'data40'=>$data40, 'data41'=>$data41, 'data42'=>$data42, 'data43'=>$data43, 'data44'=>$data44, 'data45'=>$data45, 'data46'=>$data46, 'data47'=>$data47, 'data48'=>$data48, 'data49'=>$data49, 'data50'=>$data50, 'data51'=>$data51, 'data52'=>$data52, 'data53'=>$data53, 'data54'=>$data54, 'data55'=>$data55, 'data56'=>$data56, 'data57'=>$data57, 'data58'=>$data58, 'data59'=>$data59, 'data60'=>$data60, 'data61'=>$data61, 'data62'=>$data62, 'data63'=>$data63, 'data64'=>$data64, 'data65'=>$data65, 'data66'=>$data66, 'data67'=>$data67, 'data68'=>$data68, 'data69'=>$data69, 'data70'=>$data70, 'data71'=>$data71, 'data72'=>$data72, 'data73'=>$data73, 'data74'=>$data74, 'data75'=>$data75, 'data76'=>$data76, 'data77'=>$data77, 'data78'=>$data78, 'data79'=>$data79, 'data80'=>$data80, 'data81'=>$data81, 'data82'=>$data82, 'data83'=>$data83, 'data84'=>$data84, 'data85'=>$data85, 'data86'=>$data86, 'data87'=>$data87, 'data88'=>$data88, 'data89'=>$data89, 'data90'=>$data90, 'data91'=>$data91, 'data92'=>$data92, 'data93'=>$data93, 'data94'=>$data94, 'data95'=>$data95, 'data96'=>$data96, 'data97'=>$data97, 'data98'=>$data98, 'data99'=>$data99, 'data100'=>$data100, 'data101'=>$data101, 'data102'=>$data102, 'data103'=>$data103, 'data104'=>$data104, 'data105'=>$data105, 'data106'=>$data106, 'data107'=>$data107, 'data108'=>$data108, 'data109'=>$data109, 'data110'=>$data110, 'data111'=>$data111, 'data112'=>$data112, 'data113'=>$data113, 'data114'=>$data114, 'data115'=>$data115, 'data116'=>$data116, 'data117'=>$data117, 'data118'=>$data118, 'data119'=>$data119, 'data120'=>$data120, 'data121'=>$data121, 'data122'=>$data122, 'data123'=>$data123, 'data124'=>$data124, 'data125'=>$data125, 'data126'=>$data126, 'data127'=>$data127, 'data128'=>$data128, 'data129'=>$data129, 'data130'=>$data130, 'data131'=>$data131, 'data132'=>$data132, 'data133'=>$data133, 'data134'=>$data134, 'data135'=>$data135, 'data136'=>$data136, 'data137'=>$data137, 'data138'=>$data138, 'data139'=>$data139, 'data140'=>$data140, 'data141'=>$data141, 'data142'=>$data142, 'data143'=>$data143, 'data144'=>$data144, 'data145'=>$data145, 'data146'=>$data146, 'data147'=>$data147, 'data148'=>$data148, 'data149'=>$data149, 'data150'=>$data150, 'data151'=>$data151, 'data152'=>$data152, 'data153'=>$data153, 'data154'=>$data154, 'data155'=>$data155, 'data156'=>$data156, 'data157'=>$data157, 'data158'=>$data158, 'data159'=>$data159, 'data160'=>$data160, 'data161'=>$data161, 'data162'=>$data162, 'data163'=>$data163, 'data164'=>$data164, 'data165'=>$data165, 'data166'=>$data166, 'data167'=>$data167, 'data168'=>$data168, 'data169'=>$data169, 'data170'=>$data170, 'data171'=>$data171, 'data172'=>$data172, 'data173'=>$data173, 'data174'=>$data174, 'data175'=>$data175, 'data176'=>$data176, 'data177'=>$data177, 'data178'=>$data178, 'data179'=>$data179, 'data180'=>$data180, 'data181'=>$data181, 'data182'=>$data182, 'data183'=>$data183, 'data184'=>$data184, 'data185'=>$data185, 'data186'=>$data186, 'data187'=>$data187, 'data188'=>$data188, 'data189'=>$data189, 'data190'=>$data190, 'data191'=>$data191, 'data192'=>$data192, 'data193'=>$data193, 'data194'=>$data194, 'data195'=>$data195, 'data196'=>$data196, 'data197'=>$data197, 'data198'=>$data198, 'data199'=>$data199, 'data200'=>$data200, 'data201'=>$data201, 'data202'=>$data202, 'data203'=>$data203, 'data204'=>$data204, 'data205'=>$data205, 'data206'=>$data206, 'data207'=>$data207, 'data208'=>$data208, 'data209'=>$data209, 'data210'=>$data210, 'data211'=>$data211, 'data212'=>$data212, 'data213'=>$data213, 'data214'=>$data214, 'data215'=>$data215, 'data216'=>$data216, 'data217'=>$data217, 'data218'=>$data218, 'data219'=>$data219, 'data220'=>$data220, 'data221'=>$data221, 'data222'=>$data222, 'data223'=>$data223, 'data224'=>$data224, 'data225'=>$data225, 'data226'=>$data226, 'data227'=>$data227, 'data228'=>$data228, 'data229'=>$data229, 'data230'=>$data230, 'data231'=>$data231, 'data232'=>$data232, 'data233'=>$data233, 'data234'=>$data234, 'data235'=>$data235, 'data236'=>$data236, 'data237'=>$data237, 'data238'=>$data238, 'data239'=>$data239, 'data240'=>$data240]);
    }

}