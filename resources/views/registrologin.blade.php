
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro/Login</title>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        -->
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Bree Serif', serif;
    }

    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #272727;
        
    }

    .registro{
        position: relative;
        min-height: 100vh;
        width: 50%;
        background: #c9c9c9;
        border-right: 3.5px solid red;
    }

    .login{
        transition: .5s ease-in-out; 
        position: relative;
        min-height: 100vh;
        width: 50%;
        background: #272727;
        border-left: 3.5px solid red;
    }

    .formregistro{
        margin: 8vh 0vh 8vh 15vh;
        height: 84vh;
        background-color: rgb(39, 39, 39, 0.2);
        border-radius: 12px 0px 0px 12px;
        border-left: 10px solid #272727;
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
    }

    .formlogin{
        margin: 8vh 15vh 8vh 0vh;
        height: 84vh;
        background-color: rgb(39, 39, 39, 0.2);
        border-radius: 0px 12px 12px 0px;
        border-right: 10px solid #c9c9c9;
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
    }
    #titulo1{
        padding-top: 5vh;
        color: black;
        z-index: 2;
        font-size: 3em;
    }

    #info{
        text-align: left;
        margin-top: 3vh;
        margin-left: 5vh;

    }

    #info2{
        text-align: left;
        margin-top: 3vh;
        margin-left: 10vh;
        margin-right: 10vh;
        font-size: 1.2em;


    }

    .imagenes{
        position: relative;
        margin-top: 3vh;
        display: inline-block;
    }


    #titulo2{
        padding-top: 5vh;
        color: white;
        z-index: 2;
        font-size: 3em;
    }

    .face {
        width: 30%;
        min-width: 100px;
        background-color: #272727;
        padding: 10px 10px;
        color: #028bca;
        display: flex;
        transition: .2s ease-in-out;
        margin-right: 10px;
        margin-top: 5vh;
        transform: scale(1.3);
        text-decoration: none; 
        border: 2px solid #028bca;
    }

    .face i {
        color: #028bca;
        font-size: 20px;
        padding-right: 10px;
        transition: .3s ease-in-out; 
    }

    .face span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
    }

    .face:hover {
        transform: scale(1.5);
        background: linear-gradient(to right, #6dc8f1 0%, #005786 100%); }
        .face:hover i {
        transform: translateX(6vw);
        color: #272727; }
        .face:hover span {
        opacity: 0; 
    }

    .email {
        width: 30%;
        min-width: 100px;
        background-color: #272727;
        padding: 10px 10px;
        color: #ff4d4d;
        display: flex;
        transition: .2s ease-in-out;
        margin-right: 10px;
        margin-top: 4vh;
        transform: scale(1.3);
        text-decoration: none; 
        border: 2px solid #ff4d4d;
    }

    .email i {
        color: #ff4d4d;
        font-size: 20px;
        padding-right: 10px;
        transition: .3s ease-in-out; 
    }

    .email span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
    }

    .email:hover {
        transform: scale(1.5);
        background: linear-gradient(to right, #ff7878 0%, red 100%); }
        .email:hover i {
        transform: translateX(6vw);
        color: #272727; }
        .email:hover span {
        opacity: 0; 
    }

    #sesion{
        margin-top: 6vh;
        margin-bottom: 2vh;
        font-size: 2em;
        color: white;
    }

    #form{
        position: relative; 
        margin-top: 3vh;
    }

    #form #email{
        width: 25vw;
        background: #373737;
        outline: none;
        border: none;
        padding: 10px;
        border-radius: 6px;
        color: #fff;
        font-style: 18px;
        border: none;
        border-bottom: 2px solid #fff;
        margin-bottom: 1vh;
    }

    #form .inputBox{
        position: relative;
    }

    #text{
        display: block;
        color: #fff;
        font-weight: 300;
        padding: 5px;
    }

    .checkbox{
        margin: 1.5vh 0vh 0vh 0vw;
        color: white;
    }

    #recuerdame{
        margin-top: 1vh;
    }

    .iniciarsesion{
        width: 40%;
        min-width: 100px;
        background-color: #272727;
        padding: 10px 10px;
        color: #FFF;
        text-align: center;
        display: flex;
        transition: .2s ease-in-out;
        margin-right: 10px;
        margin-top: 4vh;
        transform: scale(1.4);
        text-decoration: none; 
        cursor: pointer;
        border: 2px solid #FFF;
    }

    .iniciarsesion i {
        margin-left: 2vh;
        color: #FFF;
        font-size: 1.5em;
        padding-right: 10px;
        transition: .3s ease-in-out; 
    }

    .iniciarsesion span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
    }

    .iniciarsesion:hover {
        transform: scale(1.5);
        background: linear-gradient(to right, whitesmoke 0%, #6e6e6e 100%); 
    }

    .iniciarsesion:hover i {
        transform: translateX(7vw) scale(1.7);
        color: #272727;
    }

    .iniciarsesion:hover span {
        opacity: 0; 
    }

    .volver{
        position: absolute;
        margin: auto;
        border: 8px solid red;
        border-radius: 50%;
        width: 15vh;
        height: 15vh;
        z-index: 5;
        transform: scale(0.5);
        transition: .5s ease-in-out;
        cursor: pointer; 
        box-shadow: inset 0px 0px 20px 6px rgba(0,0,0,0.75);
        background: linear-gradient(to right, rgba(27,27,27,1) 0%, rgba(27,27,27,1) 49%, rgba(100,100,100,1) 50%, rgba(201, 201, 201,1) 51%, rgba(201, 201, 201,1) 100%);
    }

    .volver:hover{
        transform: scale(0.8);
    }

    .volver a{
        text-align: center;
        justify-content: center;
        text-decoration: none;
        user-select: none;
        display: inline-block;
        margin-top: 5vh;
        font-size: 2em;
    }

    .volver #a1{
        position: relative;
        color: #c9c9c9;
        width: 50%;
    }

    .volver #a2{
        position: relative;
        color: #272727;
        width: 50%;
    }

    .registrarse{
        width: 40%;
        min-width: 100px;
        background-color: #272727;
        padding: 10px 10px;
        color: #FFF;
        text-align: center;
        display: flex;
        transition: .2s ease-in-out;
        margin-right: 10px;
        margin-top: 3vh;
        transform: scale(1.3);
        text-decoration: none; 
        cursor: pointer;
        border: 2px solid #FFF;
    }

    .registrarse i {
        margin-left: 2vh;
        color: #FFF;
        font-size: 1.5em;
        padding-right: 10px;
        transition: .3s ease-in-out; 
    }

    .registrarse span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
    }

    .registrarse:hover {
        transform: scale(1.5);
        background: linear-gradient(to right, whitesmoke 0%, #6e6e6e 100%); 
    }

    .registrarse:hover i {
        transform: translateX(7.5vw) scale(1.7);
        color: #272727;
    }

    .registrarse:hover span {
        opacity: 0; 
    }

    .formularioReg{
        
        display: none;
        position: absolute;
        margin: auto;
        width: 24vw;
        height: 85vh;
        background-color: rgb(255, 255, 255, 0.9);
        z-index: 7;
        border-radius: 8px;
        border-top: 3px solid red;
        border-bottom: 3px solid red;
        border-left: 3px solid red;
        border-right: 3px solid red;
        box-shadow: inset 0px 0px 20px 2px rgba(255,0,0,0.75);
    }

    #registroform{
        position: relative; 

    }

    #registroform #email2{
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

    #registroform .email2{
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

    #registroform .inputBox{
        position: relative;
        
    }

    .inputBox .invalid-feedback{
        display: inline-block;
    }

    .inputBox p{
        font-size: 0.8em;
        color: darkred;
    }

    #text2{
        display: block;
        color: #292929;
        font-weight: 300;
        padding: 5px;
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

    .alerta{
        position: absolute;
        z-index: 8;
        margin-top: -40vh;
        margin-left: 40vw;
        padding: 2%;
        color: green;
        border: 2px solid green;
        background-color: lightgreen;
        border-radius: 15px;
        box-shadow: inset 0px 0px 5px 2px rgba(0,204,0,0.75);
    }

    .botonCerrarAlerta{
        position: absolute;
        top: -10px;
        right: 18px;
        transition: all 200ms;
        font-size: 40px;
        text-decoration: none;
        color: green;
        cursor: pointer;
    }

    .alerta2{
        position: absolute;
        z-index: 8;
        margin-top: -40vh;
        margin-left: 40vw;
        padding: 2%;
        color: red;
        border: 2px solid red;
        background-color: rgb(238, 144, 144);
        border-radius: 15px;
        box-shadow: inset 0px 0px 5px 2px rgba(204, 0, 0, 0.75);
    }

    .botonCerrarAlerta2{
        position: absolute;
        top: -10px;
        right: 18px;
        transition: all 200ms;
        font-size: 40px;
        text-decoration: none;
        color: red;
        cursor: pointer;
    }

    .negro{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.75);
        z-index: 3;
        display: none;

    }

    .enviarEmail{
        display: none;
        position: absolute;
        margin: auto;
        width: 24vw;
        height: 40vh;
        background-color: rgb(255, 255, 255, 0.9);
        z-index: 7;
        border-radius: 8px;
        border-top: 3px solid red;
        border-bottom: 3px solid red;
        border-left: 3px solid red;
        border-right: 3px solid red;
        box-shadow: inset 0px 0px 20px 2px rgba(255,0,0,0.75);
    }

    #tituloResetear{
        margin-top: 10vh;
        margin-bottom: 2vh;
        font-size: 2em;
        color: white;
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
        margin-right: 10px;
        margin-top: 4vh;
        text-decoration: none; 
        border: 2px solid #000;
        transform: scale(1.1);
        cursor: pointer;
    }

    .botonEnviarEnlace i {
        color: black;
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
        color: #272727; 
        
        }

    .botonEnviarEnlace:hover span {
        opacity: 0; 
    }

    #emailReseteo{
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

    #botonMostrarForm{
        cursor: pointer;
    }

    .botonCerrarenviarEmail{
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

    .inputBox2 p{
        font-size: 0.8em;
        color: darkred;
        margin-top: -9vh;
    }

</style>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
       
        @if ($message = Session::get('success'))
            <div class="alerta">
                <div class="botonCerrarAlerta">&times;</div>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($message = Session::get('warning'))
            <div class="alerta2">
                <div class="botonCerrarAlerta2">&times;</div>
                <strong>{{ $message }}</strong>
            </div>
        @endif

    <div class="registro">
        <div class="formregistro">    
            <center>
                <h2 id="titulo1">Registro</h2>
                <h2 id="info">¿Aún no tienes cuenta en HEAVN?<br>¡Registrate en nuestra aplicación para disfrutar de HEAVN al 100%! <br></h2>
            </center>    
                <div id="info2">
                    <ul>
                        <li>
                            HEAVN es un servicio de venta de entradas y punto de información tanto de canciones como de peliculas y series.
                        </li>   
                        <li>
                            Para disfrutar completamente de nuestros servicios, registrate GRATIS.
                        </li>
                        <li>
                            Disfruta de tus artistas favoritos y consigue tus entradas antes que nadie.
                        </li>
                        <li>
                            Para los amantes del cine, entérate de los últimos lanzamientos de películas y series y aprovecha para verlas en los mejores cines.
                        </li>
                        <li>
                            Rellena nuestro formulario de registro y experimenta con nuestra aplicación.
                        </li>
                    </ul>
                </div>
            <center>
                <div class="imagenes">
                    <img src="Imagenes/logo2.jpg" style="width:20%">
                    <img src="Imagenes/logo.jpg" style="width:20%">
                </div>
                <div class="registrarse">
                <i class="fas fa-sign-in-alt"></i>
                    <span>REGISTRATE</span>
                </div>
            </center>
        </div>
    </div>

    <div class="volver">
        <a href="../" id="a1">VOL</a><a href="../" id="a2">VER</a>
    </div>
    <div class="login">
        <div class="formlogin">
            <center>
                <h2 id="titulo2">Iniciar Sesión</h2>
                <a href="https://es-es.facebook.com/bcn.cat/" class="face" target="_blank">
                    <i class="fab fa-facebook"></i>
                    <span>Inicia Sesión con Facebook</span>
                </a>
                <a href="{{ url('/redirect') }}" class="email" target="_blank">
                    <i class="far fa-envelope"></i>
                    <span>Inicia Sesión con Gmail</span>
                    <iframe id="idlogoutframe" src="https:\accounts.google.com/logout" style="display:none"></iframe>
                </a>
                <form id="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h3 id="sesion">Cuenta de HEAVN</h3>
                    <div class="inputBox">
                        <span id="text">Email
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </span>
                        </span>
                            <input type="text" name="email" id="email" placeholder="Introduce tu Email" >
                        <br>
                        <span id="text">Contraseña
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </span>
                            <input type="password" name="password" id="email" placeholder="Introduce tu Contraseña">
                        <br>

                        <div id="botonMostrarForm" style="text-decoration: none">
                            <span id="text">
                                <i class="material-icons" style="position:absolute; margin-left: -3vh">
                                    help
                                </i>
                                ¿Has olvidado tu contraseña?
                            </span>
                        </div>

                        <div class="checkbox">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" id="recuerdame" for="remember">
                                {{ __('Recuerdame') }}
                            </label>   
                        </div>
                        <button type="submit" class="iniciarsesion">
                            <i class="material-icons" id="iconologin">account_circle</i>
                            <span>INICIAR SESIÓN</span>
                        </button>
                        
                    </div>
                </form>
            </center>
        </div>
    </div>

    <div class="formularioReg" style="{{ session()->get( 'datos' ) }}">
        <div class="botonCerrar">&times;</div>
            <center>
                <h3 id="sesion" style="color: black"><u>SIGN UP</u></h3>
                <form id="registroform" method="POST" action="{{ route('registro') }}">
                    @csrf
                        <div class="inputBox">
                            <span id="text2">Nombre de usuario
                            @error('usuario')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                            @enderror
                            </span>
                            <input type="text" name="usuario" id="email2" placeholder="Introduce tu nombre de usuario" value="{{old('usuario')}}">
                            
                            
                            <span id="text2">Nombre y Apellido
                            @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                            @enderror
                            </span>
                            <input type="text" name="nombre" id="email2" placeholder="Introduce tu nombre" value="{{old('nombre')}}">
                        
                            
                            <span id="text2">Email
                            @error('emailRegis')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                            @enderror
                            </span>
                            <input type="text" name="emailRegis"  id="email2" placeholder="Introduce tu email" value="{{old('emailRegis')}}" >
                                                    
                            <span id="text2">Telefono
                            @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                            @enderror
                            </span>
                            <input type="text" name="telefono" id="email2" placeholder="Introduce tu telefono"  value="{{old('telefono')}}">
                            
                            <span id="text2">Dirección
                            @error('direccion')
                                        <span class="invalid-feedback" role="alert">
                                            <p>{{ $message }}</p>
                                        </span>
                            @enderror
                            </span>
                            <input type="text" name="direccion" id="email2" placeholder="Introduce tu direccion" value="{{old('direccion')}}">
                            
                            <span id="text2">Contraseña
                                @error('password1')
                                    <span class="invalid-feedback" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                @enderror
                            </span>
                            <input type="password" name="password1" id="email2" placeholder="Introduce tu Contraseña">
            
                            <span id="text2">Foto de Perfil</span>
                            <input accept="" type="file" name="fotoPerfil">
                            
                            <button type="submit" class="Botonregistro">
                                <i class="material-icons" id="iconologin">account_circle</i>
                                <span>REGISTRARSE</span>
                            </button>      
                        </div>
                </form>
            </center>   
    </div>

    <div class="enviarEmail" style="{{ session()->get( 'displayBlock2' ) }}">
        <div class="botonCerrarenviarEmail">&times;</div>
            <center>
                <h3 id="tituloResetear" style="color: black"><u>RESTABLECER CONTRASEÑA</u></h3>
                <form id="resetearContrasena" method="POST" action="{{ route('resetearContrasena') }}">
                    @csrf

                        <div class="inputBox2">
                            <span id="text2">Introduce tu email para enviarte el enlace.</span>
                            <input type="text" name="emailReseteo" id="emailReseteo" placeholder="Introduce tu email" value="">
                            <input type="text" id="ponerEmail" value="" style="display:none;">
                           
                        
                            <button type="submit" class="botonEnviarEnlace">
                                <i class="fas fa-at"></i>
                                <span>ENVIAR</span>
                            </button>    
                            <p>{{ session()->get( 'mensaje' ) }}</p>
                       
                        </div>
                </form>
            </center>   
    </div>

<script>
    $( document ).ready(function() {

        

        $( ".registrarse" ).click(function() {
            $(".formularioReg").fadeIn();
            $(".negro").css('display', 'block');
        });
        
        $( ".botonCerrar" ).click(function() {
            $(".formularioReg").fadeOut();
            $(".negro").css('display', 'none');
        });

        $( ".botonCerrarAlerta" ).click(function() {
            $(".alerta").fadeOut();
        });

        $( ".botonCerrarAlerta2" ).click(function() {
            $(".alerta2").fadeOut();
        });

        $( "#botonMostrarForm" ).click(function() {
            $(".enviarEmail").fadeIn();
            $(".negro").css('display', 'block');
        });

        $( ".botonCerrarenviarEmail" ).click(function() {
            $(".enviarEmail").fadeOut();
            $(".negro").css('display', 'none');
        });
        
    });



</script>

<div class="negro" style="{{ session()->get( 'displayBlock' ) }}{{ session()->get( 'displayBlock2' ) }}"></div>

</body>
</html>
    