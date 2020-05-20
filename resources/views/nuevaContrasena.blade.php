
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src='jquery.transit.js'></script>
        <link rel="shortcut icon" href="{{asset('Imagenes/logo2.jpg')}}" type="image/jpg" />

        <title>Cambiar contraseña</title>

    </head>
    <style>
    *{
        font-family: 'Bree Serif', serif;

    }

    body{
        margin: 0;
        background-image: url('Imagenes/logo2.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 60%;
    }
    .fondo{
        position: absolute;
        background-color: rgb(12,12,12,0.975);
        background-size: cover;
        width: 100%;
        height: 100vh;
        z-index: -1;
        margin-top: -15%;
    }

    .enviarEmail{
        margin: auto;
        margin-top: 15%;
        width: 24vw;
        height: 40vh;
        background-color: transparent;
        z-index: 7;
        border-radius: 8px;
        border-top: 3px solid rgb(16, 115, 165);
        border-bottom: 3px solid rgb(16, 115, 165);
        border-left: 3px solid rgb(16, 115, 165);
        border-right: 3px solid rgb(16, 115, 165);
        box-shadow: inset 0px 0px 20px 2px rgba(16, 115, 165,0.75);
    }

    #tituloResetear{
        margin-top: 6vh;
        margin-bottom: 2vh;
        font-size: 2em;
        color: c9c9c9;
    }

    #emailReseteo{
        margin-top: 2vh;
        width: 70%;
    }

    .botonEnviarEnlace{
        width: 30%;
        min-width: 100px;
        background-color: #C9C9C9;
        padding: 10px 10px;
        color: black;
        display: flex;
        transition: .2s ease-in-out;
        margin-top: 4vh;
        text-decoration: none; 
        border: 2px solid #000;
        transform: scale(1.1);
        cursor: pointer;
    }

    .botonEnviarEnlace i {
        color: rgba(16, 115, 165,0.75);
        font-size: 20px;
        padding-right: 10px;
        transition: .3s ease-in-out; 
        margin-top: 0.3vh;
    }

    .botonEnviarEnlace span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
        
    }

    .botonEnviarEnlace:hover {
        transform: scale(1.2);
        background: linear-gradient(to right, #6E6E6E 0%, whitesmoke 100%); 
        
        }
        
    .botonEnviarEnlace:hover i {
        transform: translateX(2.9vw) scale(1.5);
        color: rgba(0, 170, 255, 0.75); 
        
        }

    .botonEnviarEnlace:hover span {
        opacity: 0; 
    }

    .nuevaContraseña{
        width: 18vw;
        background: #FFF;
        outline: none;
        border: none;
        padding: 10px;
        margin-top: 1vh;
        border-radius: 6px;
        color: #000;
        font-style: 18px;
        margin-bottom: 1vh;
        border: none;
        border-bottom: 2px solid #222;
    }

    #botonMostrarForm{
        cursor: pointer;
    }

    .volver{
        position: absolute;
        top: 30px;
        right: 50px;
        transition: all 200ms;
        font-size: 32px;
        font-weight: bold;
        text-decoration: none;
        color: #c9c9c9;
        cursor: pointer;
    }

    #text2{
        display: block;
        color: silver;
        font-weight: 300;
        padding: 5px;
    }

    .inputBox2 p{
        font-size: 1em;
        color: red;
        margin-top: -9vh;
    
    }

    #mensaje{
        display: none;
    }

    .invalid-feedback{
        font-size: 1em;
        color: red;
        margin-top: -9vh;
    
    }

    </style>


    <body>
        <div class="fondo"></div>
        <div class="enviarEmail">
            <a href="{{url('registrologin') }}" style="text-decoration: none"><div class="volver">VOLVER</div></a>
                <center>
                    <h3 id="tituloResetear"><u>RESTABLECER CONTRASEÑA</u></h3>
                    <form id="resetearContrasena" method="POST" action="{{ url('cambiarContrasena/'.$email) }}">
                        @csrf
                            <div class="inputBox2">
                                <span id="text2">Introduce tu nueva Contraseña.</span>
                                <input type="password" name="nuevaContraseña" class="nuevaContraseña" placeholder="Nueva Contraseña" value="">
                                <input type="password" name="confirmarContraseña" class="nuevaContraseña" placeholder="Repite la contraseña" value="">                       
                                <button type="submit" class="botonEnviarEnlace">
                                    <i class="fas fa-check"></i>
                                    <span>ENVIAR</span>
                                </button>    
                                <p id="mensaje" style="{{ session()->get( 'displayBlock' ) }}">{{ session()->get( 'mensaje' ) }}</p>      
                                @error('nuevaContraseña')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                                @enderror                     
                            </div>
                    </form>
                </center>   
        </div>
    </body>
    </html>