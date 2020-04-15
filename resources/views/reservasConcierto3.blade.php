<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compra entradas</title>
        <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    </head>
    <style>
        body{
            margin: 0;
            background-image: url('Imagenes/BilbaoArena.jpg');
            background-position: center center;
            background-size: cover;
            font-family: 'Bree Serif', serif;
    
        }
    
        /* Encabezado */
        .encabezado{
            position: absolute;
            margin-top: 3vh;
            margin-left: 35vw;
            padding: 0 2% 0 2%;
            font-size: 2em;
            background-color: rgba(23, 23, 23, 0.8);
            color: whitesmoke;
            border: 5px solid #111;
    
        }
    
        /* Volver */
        .volver{
            position: fixed;
            margin-top: 85vh;
            margin-left: 45vw;
            padding: 1%;
            font-size: 3em;
            background-color: rgba(23, 23, 23, 0.8);
            color: whitesmoke;
            border: 5px solid #111;
        }
    
        .volver h4{
            margin: 0;
        }

        /* BOTON COMPRA */
        .btncomprar{
            position: relative;
            margin-top: 1.7vh;
            padding: 1%;
            font-size: 2em;
            background-color: rgba(23, 23, 23, 0.8);
            color: whitesmoke;
            border-top: 5px solid #c9c9c9;
            border-bottom: 5px solid #c9c9c9;
            cursor: pointer;
        }
    
    
        /* MAPA */
        .reservas{
            position: absolute;
            margin-top: 22vh;
            margin-left: 10vw;
            width: 49.5vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            color: whitesmoke;
            border: 5px solid #111;
        }
    
        .reservas h2{
            display: flex;
            justify-content: center;
            align-content: center;
            color: white;
    
        }   
    
        .escenario{
            position: absolute;
            margin-top: 10vh;
            margin-left: 1vw;
            width: 10vw;
            height: 40vh;
            background-color: #000;
            border: 3px solid whitesmoke;
    
        }
    
        .pista1{
            position: absolute;
            margin-top: 15vh;
            margin-left: 12vw;
            width: 12vw;
            height: 30vh;
            background-color: #222;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
        .pista2{
            position: absolute;
            margin-top: 15vh;
            margin-left: 25vw;
            width: 12vw;
            height: 30vh;
            background-color: #222;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
        .grada1{
            position: absolute;
            margin-top: 3vh;
            margin-left: 12vw;
            width: 25vw;
            height: 10vh;
            background-color: #555;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
    
    
        .grada2{
            position: absolute;
            margin-top: 47vh;
            margin-left: 12vw;
            width: 25vw;
            height: 10vh;
            background-color: #555;
            border: 3px solid whitesmoke;
            cursor: pointer;
        }
    
    
        .grada3{
            position: absolute;
            margin-top: 5vh;
            margin-left: 38vw;
            width: 10vw;
            height: 50vh;
            background-color: #777;
            border: 3px solid whitesmoke;
            cursor: pointer;
    
        }
    
        /* titulo */
        .datos{
            position: absolute;
            margin-top: 22vh;
            margin-left: 62vw;
            width: 29vw;
            height: 60vh;
            background-color: rgba(23, 23, 23, 0.8);
            border: 5px solid #111;
        }
    
        .formularioReg{
            display: block;
            position: absolute;
            margin: auto;
            width: 24vw;
            height: 85vh;
            background-color: rgb(255, 255, 255, 0.9);
            z-index: 7;
        }
    
        #formularioCompra{
            position: relative; 
    
        }
    
        #formularioCompra #email2{
            width: 18vw;
            background: #FFF;
            outline: none;
            border: none;
            padding: 10px;
            border-radius: 6px;
            color: #000;
            font-style: 18px;
            margin-bottom: 1vh;
            border: none;
            border-bottom: 2px solid #222;
        }
    
        #formularioCompra .email2{
            width: 18vw;
            background: #FFF;
            outline: none;
            border: none;
            padding: 10px;
            border-radius: 6px;
            color: #000;
            font-style: 18px;
            margin-bottom: 1vh;
            border: 2px solid black;
        }
    
        #titulo{
            margin-top: 5vh;
            margin-bottom: 2vh;
            font-size: 2em;
        }
    
        /* InputBox */
    
        .inputBox{
            display: block;
            position: relative;
            margin-top: 4vh;
            font-size: 1.8em;
            color: whitesmoke;
        }
    
        .inputBox .invalid-feedback{
            display: inline-block;
        }
    
        .inputBox p{
            font-size: 0.8em;
            color: darkred;
        }
    
       
        /* InputBox2 */
    
        .inputBox2{
            display: none;
            position: relative;
            margin-top: 4vh;
            font-size: 1.8em;
            color: whitesmoke;
        }
    
        .inputBox2 .invalid-feedback{
            display: inline-block;
        }
    
        .inputBox2 p{
            font-size: 0.8em;
            color: darkred;
        }
    
        /* InputBox3 */
    
        .inputBox3{
            display: none;
            position: relative;
            margin-top: 4vh;
            font-size: 1.8em;
            color: whitesmoke;
        }
    
        .inputBox3 .invalid-feedback{
            display: inline-block;
        }
    
        .inputBox3 p{
            font-size: 0.8em;
            color: darkred;
        }
    
        /* InputBox4 */
    
        .inputBox4{
            display: none;
            position: relative;
            margin-top: 4vh;
            font-size: 1.8em;
            color: whitesmoke;
        }
    
        .inputBox4 .invalid-feedback{
            display: inline-block;
        }
    
        .inputBox4 p{
            font-size: 0.8em;
            color: darkred;
        }
    
        /* InputBox5 */
    
        .inputBox5{
            display: none;
            position: relative;
            margin-top: 4vh;
            font-size: 1.8em;
            color: whitesmoke;
        }
    
        .inputBox5 .invalid-feedback{
            display: inline-block;
        }
    
        .inputBox5 p{
            font-size: 0.8em;
            color: darkred;
        }
    
        /* InputBox6 */
    
        .inputBox6{
            display: none;
            position: relative;
            margin-top: 4vh;
            font-size: 1.8em;
            color: whitesmoke;
        }
    
        .inputBox6 .invalid-feedback{
            display: inline-block;
        }
    
        .inputBox6 p{
            font-size: 0.8em;
            color: darkred;
        }
    
        #text2{
            display: block;
            color: whitesmoke;
            font-weight: 300;
            padding: 5px;
            margin-bottom: 1vh;
        }
    
        .Botonregistro {
            width: 30%;
            min-width: 100px;
            background-color: #C9C9C9;
            padding: 10px 10px;
            color: black;
            display: flex;
            transition: .2s ease-in-out;
            margin-right: 10px;
            margin-top: 3vh;
            text-decoration: none; 
            border: 2px solid #000;
            transform: scale(1.1);
            cursor: pointer;
        }
    
        .Botonregistro i {
            color: black;
            font-size: 20px;
            padding-right: 10px;
            transition: .3s ease-in-out; 
            margin-top: 0.3vh;
        }
    
        .Botonregistro span {
            align-self: center;
            opacity: 1;
            transition: .2s ease-in-out; 
        }
    
        .Botonregistro:hover {
            transform: scale(1.2);
            background: linear-gradient(to right, #6E6E6E 0%, whitesmoke 100%); 
            
            }
            
        .Botonregistro:hover i {
            transform: translateX(2.9vw) scale(1.5);
            color: #272727; 
            
            }
    
        .Botonregistro:hover span {
            opacity: 0; 
        }
    
        .botonCerrar{
            position: absolute;
            top: -5px;
            right: 30px;
            transition: all 200ms;
            font-size: 70px;
            font-weight: bold;
            text-decoration: none;
            color: #000;
            cursor: pointer;
        }
       
        a{
            text-decoration: none;
        }
       
    </style>
    <body>
        <div class="encabezado">
            <h2>SELECCIONA TU ENTRADA</h2>
        </div>
        <div class="reservas">
            <a href="generalConc3"><div class="escenario"><h2>Escenario</h2></div></a>
            <a href="pistaAConc3"><div class="pista1"><h2>Pista A</h2></div></a>
            <a href="pistaBConc3"><div class="pista2"><h2>Pista B</h2></div></a>
            <a href="grada1Conc3"><div class="grada1"><h2>Grada 1</h2></div></a>
            <a href="grada2Conc3"><div class="grada2"><h2>Grada 2</h2></div></a>
            <a href="grada3Conc3"><div class="grada3"><h2>Grada 3</h2></div></a>
        </div>
        <div class="datos">
            <center>   
            <!-- @csrf -->
                <div class="inputBox" style="{{ session()->get( 'displayBlock' ) }}{{ session()->get( 'displayNone1' ) }}{{ session()->get( 'displayNone2' ) }}{{ session()->get( 'displayNone3' ) }}{{ session()->get( 'displayNone4' ) }}{{ session()->get( 'displayNone5' ) }}">
                    <h3 id="titulo"><u>GENERAL</u></h3>
                    <span id="text2">Artista: THE 1975</span>
                    <span id="text2">Lugar: Bilbao Arena</span>
                    <span id="text2">Fecha: Martes, 12 de Julio 2020</span>
                    <span id="text2">Hora: 21:00</span>
                    <span id="text2">Entradas Disponibles: 10.000</span>
                    <span id="text2">Entradas Vendidas: 0</span>
                                            
                    <!--
                    <input type="text" name="direccion" id="email2" placeholder="Introduce tu direccion" value=""><br> 
                    <button type="submit" class="Botonregistro">
                        <i class="material-icons" id="iconologin">account_circle</i>
                        <span>REGISTRARSE</span>
                    </button>    
                    -->  
                </div>
                <form id="formularioCompra" method="POST" action="{{ route('registro') }}"></form>
                    <div class="inputBox2" style="{{ session()->get( 'displayBlock1' ) }}{{ session()->get( 'displayNone2' ) }}">
                        <h3 id="titulo"><u>PISTA A</u></h3>
                        <span id="text2">Entradas Disponibles: 3.000</span>
                        <span id="text2">Precio Entrada: 80€</span>
                        <span id="text2">Cantidad: </span>
                        <span id="text2">Precio Total: </span>
                        <span id="text2">Entradas Compradas: 0</span>
                        <div class="btncomprar">COMPRAR</div>
                    </div>
                </form>
    
                <form id="formularioCompra" method="POST" action="{{ route('registro') }}"></form>
                    <div class="inputBox3"  style="{{ session()->get( 'displayBlock2' ) }}{{ session()->get( 'displayNone3' ) }}">
                        <h3 id="titulo"><u>PISTA B</u></h3>
                        <span id="text2">Entradas Disponibles: 3.000</span>
                        <span id="text2">Precio Entrada: 60€</span>
                        <span id="text2">Cantidad: </span>
                        <span id="text2">Precio Total: </span>
                        <span id="text2">Entradas Compradas: 0</span>
                        <div class="btncomprar">COMPRAR</div>
                    </div>
                </form>
    
                <form id="formularioCompra" method="POST" action="{{ route('registro') }}"></form>
                    <div class="inputBox4" style="{{ session()->get( 'displayBlock3' ) }}{{ session()->get( 'displayNone4' ) }}">
                        <h3 id="titulo"><u>GRADA 1</u></h3>
                        <span id="text2">Entradas Disponibles: 2.000</span>
                        <span id="text2">Precio Entrada: 40€</span>
                        <span id="text2">Cantidad: </span>
                        <span id="text2">Precio Total: </span>
                        <span id="text2">Entradas Compradas: 0</span>
                        <div class="btncomprar">COMPRAR</div>
                    </div>
                </form>
    
                <form id="formularioCompra" method="POST" action="{{ route('registro') }}"></form>
                    <div class="inputBox5" style="{{ session()->get( 'displayBlock4' ) }}{{ session()->get( 'displayNone5' ) }}">
                        <h3 id="titulo"><u>GRADA 2</u></h3>
                        <span id="text2">Entradas Disponibles: 2.000</span>
                        <span id="text2">Precio Entrada: 40€</span>
                        <span id="text2">Cantidad: </span>
                        <span id="text2">Precio Total: </span>
                        <span id="text2">Entradas Compradas: 0</span>
                        <div class="btncomprar">COMPRAR</div>
                    </div>
                </form>
    
                <form id="formularioCompra" method="POST" action="{{ route('registro') }}"></form>
                    <div class="inputBox6" style="{{ session()->get( 'displayBlock5' ) }}">
                        <h3 id="titulo"><u>GRADA 3</u></h3>
                        <span id="text2">Entradas Disponibles: 2.000</span>
                        <span id="text2">Precio Entrada: 40€</span>
                        <span id="text2">Cantidad: </span>
                        <span id="text2">Precio Total: </span>
                        <span id="text2">Entradas Compradas: 0</span>
                        <div class="btncomprar">COMPRAR</div>
                    </div>
                </form>
            </center>   
        </div>
        <a href="/verConciertos">
            <div class="volver">
                <h4>VOLVER</h4>
            </div>
        </a>
    </body>
    </html>