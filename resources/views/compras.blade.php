<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Compras</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="{{ asset('jquery.transit.js') }}" defer></script>
     <script src="{{ asset('jquery.3.4.1.js') }}" ></script>
     <script src="{{ asset('jqueryui.js') }}" defer></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background: silver;
    }

    .fondo{
        width: 100vw;
        height: 100vh;
        background: linear-gradient(#440608 0%, #721619 5%, #721619 45%, #440608 49.5%, white 50%, #111111 50.5%, #333333 55%, #333333 95%, #111111 100%);
    }
    
    .comprasConcierto{
        top: 6.5vh;
        left: 10vw;
        width: 10vw;
        height: 17.5vw;
        background: url('Imagenes/taquillacine.jpg');
        background-size: cover;
        position: absolute;
        color: #fff;
        border: 4px solid #111;
    }

    .comprasCine{
        background: #222;
        bottom: 6.5vh;
        right: 10vw;
        width: 10vw;
        height: 17.5vw;
        background: url('Imagenes/taquillaconcierto2.jpg');
        background-size: cover;
        position: absolute;
        color: #fff;
        border: 4px solid #111;

    }

    h2{
        margin: auto;
        margin-top: 70%;
        font-size: 1.8em;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;

    }

    img{
        width: 100%;
        height: 100%;
    }

    .boton{
        position: absolute;
        margin-top: 47.32vh;
        margin-left: 46%;
        height: 5vh;
        width: 8vw;
        border: 2px solid white;
        border-radius: 15px;
        background: linear-gradient(#440608 0%, #721619 5%, #721619 45%, #440608 49.5%, #111111 50.5%, #333333 55%, #333333 95%, #111111 100%);
    }

    .boton:hover{
        transform: scale(1.25);
    }

    h3{
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        margin-top: 0.7vh;
        font-size: 1.8em;
        letter-spacing: 0.2em;
    }


    #tablaComprasConciertos{
        color: white;
 
    }

    #tablaComprasCine{
        color: white;
 
    }

    
    #tablaComprasCine_info{
        color: white;
    }

    #tablaComprasConciertos_info{
        color: white;
 
    }

    #tablaComprasCine_previous{
        color: white;
    }

    #tablaComprasCine_next{
        color: white;
    }


    .sorting{
        color: #021620;
    }
        
    td{
        background-color: #222;
        color: white;
    }

    th{
        color: white;
    }


    #tabla1{
        width: 58%;
        margin: auto;
        position: absolute;
        margin-left: 21vw;
        top: 7vh;

    }

    label{
        color: white
    }

    #tabla2{
        width: 58%;
        margin: auto;
        position: absolute;
        top: 58vh;
        margin-left: 21vw;

    }

</style>
<body>

    <a href="{{url('editar/'.Auth::user()->id) }}"><div class="boton">
        <h3>Volver</h3>
    </div></a>
    <div class="fondo">
        <div class="comprasConcierto">
            <h2>Compras<br>Conciertos</h2>
            
        </div>
       
        <div class="comprascine">
            <h2>Compras<br>Cine</h2>
        </div>
          
    </div>
    
    <div id="app">
        <div id="tabla1">
            <comprasconciertos-component></comprasconciertos-component>
        </div>
        <div id="tabla2">
            <comprascine-component></comprascine-component>
        </div>
    </div>

</body>
</html>