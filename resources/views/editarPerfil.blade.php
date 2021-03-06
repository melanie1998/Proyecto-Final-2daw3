<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Editar Perfil</title>
</head>
<style>
    body{
        margin: 0;
        font-family: 'Bree Serif', serif;
        overflow: hidden;
    }   

    .fondoConcierto{
        position: absolute;
        width: 21.6vw;
        height: 99.9vh;
        background-repeat: no-repeat;
        z-index: -1;
    }

    .fondoCine{
        position: absolute;
        margin-left: 82.9vw;
        width: 21.6vw;
        height: 99.9vh;
        background-repeat: no-repeat;
        float: right;
        float: right;
        z-index: 2;
    }

    .formEditar{
        margin: auto;
        width: 65%;
        height: 100%;
        background: linear-gradient(to right, #c7914d, #0e1618 55%);
        z-index: 1;
        border-left: 8px solid #c9872f;
        border-right: 8px solid #222;
        box-shadow: inset 0px 0px 200px 6px rgba(0,0,0,0.75);
    }

    .encabezado{
        position: absolute;
        margin-top: 3vh;
        margin-left: 1.1vw;
        width: 61%;
        text-align: center;
        background: silver;
        border: 2px solid silver;
        border-left: 16px solid #c9872f;
        border-right: 16px solid #222;
        border-radius: 6px;
        box-shadow: inset 0px 0px 80px 6px rgba(22, 22, 22,0.75);
        z-index: 3;
    }

    .encabezado h2{
        font-size: 70; 
        color: #222;
    }

    .encabezado i{
        font-size: 0.8em;
    }

    .datos{
        position: absolute;
        margin-top: 28vh;
        margin-left: 1.1vw;
        width: 61%;
        height: 58vh;
        background: silver;
        border-radius: 6px;
        border: 2px solid silver;
        border-left: 16px solid #c9872f;
        border-right: 16px solid #222;
        box-shadow: inset 0px 0px 290px 6px rgba(22, 22, 22,0.75);
        z-index: 3;
    }

    .Botonguardar {
        width: 30%;
        min-width: 100px;
        background-color: #C9C9C9;
        padding: 10px 10px;
        color: black;
        display: flex;
        transition: .2s ease-in-out;
        margin-top: -6.5vh;
        margin-left: 27vw;
        text-decoration: none; 
        border: 2px solid #222;
        transform: scale(1.1);
        z-index: 3;
        border-radius: 6px;
        cursor: pointer;

    }

    .Botonguardar img {
        color: black;
        font-size: 20px;
        padding-right: 10px;
        transition: .3s ease-in-out; 
        margin-top: 0.3vh;
    }

    .Botonguardar span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
    }

    .Botonguardar:hover {
        transform: scale(1.2);
        background: linear-gradient(to right, silver 0%, green 100%);        
        }
        
    .Botonguardar:hover img {
        transform: translateX(7vw) scale(1.4);
        color: #272727; 
        
        }

    .Botonguardar:hover span {
        opacity: 0; 
    }

    .botonVolver {
        position: absolute;
        width: 20%;
        min-width: 100px;
        background-color: #C9C9C9;
        padding: 10px 10px;
        color: black;
        display: flex;
        transition: .2s ease-in-out;
        margin-top: -11vh;
        margin-left: 28vw;
        text-decoration: none; 
        border: 2px solid #222;
        transform: scale(1.1);
        z-index: 3;
        border-radius: 6px;
        cursor: pointer;
    }

    .botonVolver img {
        color: black;
        font-size: 20px;
        padding-right: 10px;
        transition: .3s ease-in-out; 
        margin-top: 0.3vh;
    }

    .botonVolver span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
    }

    .botonVolver:hover {
        transform: scale(1.2);
        background: linear-gradient(to right, silver 0%, red 100%);         
        }
        
    .botonVolver:hover img {
        transform: translateX(9vw) scale(1.3);
        color: #272727; 
        
        }

    .botonVolver:hover span {
        opacity: 0; 
    }

    .verCompra {
        position: absolute;
        width: 20%;
        min-width: 100px;
        background-color: #C9C9C9;
        padding: 10px 10px;
        color: black;
        display: flex;
        transition: .2s ease-in-out;
        margin-top: -11vh;
        margin-left: 52vw;
        text-decoration: none; 
        border: 2px solid #222;
        transform: scale(1.1);
        z-index: 3;
        border-radius: 6px;
        cursor: pointer;
    }

    .verCompra i {
        color: #666;
        font-size: 42px;
        padding-right: 10px;
        transition: .3s ease-in-out; 
        margin-top: 0.3vh;
    }

    .verCompra span {
        align-self: center;
        opacity: 1;
        transition: .2s ease-in-out; 
    }

    .verCompra:hover {
        transform: scale(1.2);
        background: linear-gradient(to right, silver 0%, darkcyan 100%);         
        }
        
    .verCompra:hover i {
        transform: translateX(8.8vw) scale(1.3);
        color: #272727; 
        
        }

    .verCompra:hover span {
        opacity: 0; 
    }

    /* FORMULARIO */
    #form{
        position: relative; 
        margin-top: 2vh;
        margin-left: 5vw;
        color: #222;
    }

    #sesion{
        margin-left: -5vw;
        font-size: 1.5em;
        text-align: center;
        color: #222;
    }

    #form #campo{
        font-family: arial;
        width: 25vw;
        background: transparent;
        outline: none;
        padding: 10px;
        border: none;
        border-bottom: 2px solid #222;
        border-radius: 6px;
        color: #000;
        font-style: 18px;
    }

    ::placeholder{
        color: #333;
    }

    #form .inputBox{
        position: relative;
    }

    .inputBox .invalid-feedback{
        display: inline-block;
    }

    .inputBox .invalid-feedback p{
        margin: 0;
    }

    .inputBox p{
        font-size: 0.8em;
        color: darkred;
    }

    #text{
        display: block;
        color: #222;
        font-weight: 300;
        padding: 5px;
    }

    .avatar{
        position: absolute;
        margin-top: -41vh;
        margin-left: 30vw;
        width: 40%;
        height: 41vh;
        text-align: center;
    }

    .introducirImg{
        margin-top: 5vh;
    }

    .introducirImg input{
        font-size: 1em;
    }
</style>
<body>
    <div class="fondoConcierto">
        <img src="{{asset('Imagenes/conciertoborde2.jpg')}}" height="101%">
    </div>
    <div class="fondoCine">
        <img src="{{asset('Imagenes/cineborde3.jpg')}}" height="101%">
    </div>

    <div class="formEditar">
        <div class="encabezado">
            <h2>MI PERFIL <i class="material-icons"> create</i></h2>
        </div>
        @foreach($datos as $datos)
            <div class="datos">
                <form id="form" method="POST" action="{{url('modificarPerfil/'.$datos->id)}}">
                    @csrf
                    <h3 id="sesion">Modifica los datos de tu cuenta HEAVN</h3>
                    <div class="inputBox">
                        <span id="text">Nombre Usuario 
                            @error('usuario')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                        </span>
                            <input type="text" name="usuario" id="campo" value="{{$datos->usuario}}">
                      
                       
                        <span id="text">Nombre y Apellido
                            @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                        @enderror
                        </span>
                            <input type="text" name="nombre" id="campo" placeholder="Introduce tu nombre y apellido" value="{{$datos->nombreApellido}}">
                        
                        <span id="text">Email  
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror</span>
                            <input type="text" name="email" id="campo" placeholder="Introduce tu Email" value="{{$datos->email}}">
                           
                        
                        <span id="text">Telefono
                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </span>
                            <input type="text" name="telefono" id="campo" placeholder="Introduce tu Telefono" value="{{$datos->telefono}}">
                         
                        <span id="text">Dirección
                            @error('direccion')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </span>
                            <input type="text" name="direccion" id="campo" placeholder="Introduce tu Dirección" value="{{$datos->direccion}}">
                  
                        <span id="text">Nueva Contraseña
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </span>
                            <input type="password" name="password" id="campo" placeholder="Introduce tu nueva Contraseña">
                  
                    </div>
                    <div class="avatar">
                        <div class="imagen">
                            <img src="{{asset('Imagenes/'.$datos->fotoPerfil)}}" style="max-height: 220px">
                        </div>
                        <div class="introducirImg">
                            <input accept="" type="file" name="fotoPerfil" >
                        </div>
                    </div>
                    
                    <center>
                        <button type="submit" class="Botonguardar">
                            <img src="{{asset('Imagenes/valid.png')}}" width="10%">
                            <span><b>GUARDAR DATOS</b></span>
                        </button>
                    </center>
   
                </form>
            </div>
        @endforeach
    </div>


    <center>
        <a href="{{url('home')}}">
            <button class="botonVolver">
                <img src="{{asset('Imagenes/invalid.png')}}" width="12%">
                <span><h4>VOLVER</h4></span>
            </button>
        </a>

        <a href="{{url('compras')}}">
            <button class="verCompra">
                <i class="material-icons"> shopping_cart</i>
                <span><h4>MIS COMPRAS</h4></span>
            </button>
        </a>
    </center>
</body>
</html>