<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Popping', sans-serif;
    }

    html, body{
        scroll-behavior: smooth;
    }

    /* MENUTXOA */

    .menus{
        font-family: 'Bree Serif', serif;
    }

    .menu{
        position: fixed;
        background-color: #ccc;
        margin-top: 0vh;
        width: 5%;
        height: 100vh;
        overflow-x: hidden;
        z-index: 5;
        box-shadow: inset 0px 1px 50px #555;
    }

    .opcionesmenu{
        margin-top: 4.5vh;
    }

    .menu a{
        display: block;
        margin-top: 15%;
        padding: 0% 0% 20% 0%;
        text-decoration: none;
        color: #222;
        text-align: center;
    }

    .menu .logo{
        margin: 30% 0% 30% 0%;
        padding: 20% 0% 20% 0%;
    }

    .icono{
        font-size: 2.8em;
    }

    /* MENU2 */
    .menu2{
        position: fixed;
        background-color: #ccc;
        margin-top: 0vh;
        width: 11%;
        height: 100vh;
        overflow-x: hidden;
        z-index: 5;
        box-shadow: inset 0px 1px 100px #555;
        
    }
    
    .logo2{
        margin-top: -7vh;
    }

    .menu2 a{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin: 0% 0% 0% 10%;
        padding: 8% 0% 8% 0%;
        text-decoration: none;
        color: #222;
        text-align: center;
        font-family: 'Bree Serif', serif;
    }

    .menu2 a:hover{
        background-color: #777;
        margin: 0;
        padding-left: 15%;
        box-shadow: inset 0px 0px 20px 1px rgba(10,10,10,0.75);
    }

    .menu2 .material-icons{
        margin-right: 10%;
    }

    .menu2 a .active:hover {
        background-color: #222;
        color: #ccc;
    }

    .menu2 img{
        margin-top: 20px;
        padding: 20% 0% 5% 0%;
    }
    
    a{
        text-decoration: none;
    }

    /* PELICULA 1 */
    .header{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 100px 200px;
        z-index: 2;  
    }

    .header .logo{
        max-width: 120px;
    }

    .header .logo img{
        max-width: 100%;
    }

    .banner{
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 0 200px;
        background-image: url("Imagenes/bg.jpg");
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .banner .content{
        margin-top: -3vh;
        max-width: 550px;
    }

    .banner .content h2{
        text-transform: Uppercase;
        font-weight: 400;
        font-size: 2.5em;
        letter-spacing: 0.1em;
        color: white;
    }

    .banner .content h2 span{
        font-weight: 800;
    }

    .banner .content p{
        font-size: 1.2em;
        font-weight: 300;
        letter-spacing: 0.02em;
        line-height: 1.5em;
        color: white;
        margin: 15px 0 35px;
    }

    .play{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .play img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .carrito{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .carrito img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .info{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .info img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }


    .slide{
        position: absolute;
        bottom: 8vh;
        left: 18vw;
        width: 250px;
        height: 150px;
        background: url(Imagenes/joker.png);
        background-size: cover;
        cursor: pointer;
        animation: animate 15s linear infinite;
    }

    @keyframes animate{
        0%, 100%{
            background-position: top;
        }

        45%, 55%{
            background-position: bottom;
        }
    }

    .trailer{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 3;
        background: rgba(0,0,0,0.95);
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
    }

    .trailer.active{
        visibility: visible;
        opacity: 1;
    }

    .trailer video{
        max-width: 900px;
        outline: close;
    }

    .trailer .close{
        position: absolute;
        top: 30px;
        right: 30px;
        cursor: pointer;
        filter: invert(1);
        max-width: 32px;
    }

    /* PELICULA 2 */
    .header2{
        position: absolute;
        top: 100vh;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 100px 200px;
        z-index: 2;  
    }

    .header2 .logo{
        max-width: 300px;
        margin-left: 50vw;
    }

    .header2 .logo img{
        max-width: 100%;
    }

    .banner2{
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 0 200px;
        background-image: url("Imagenes/fondoharrypotter.jpg");
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .banner2 .content{
        margin-top: -3vh;
        max-width: 550px;
        margin-left: 50vw;
    }

    .banner2 .content h2{
        text-transform: Uppercase;
        font-weight: 400;
        font-size: 2.3em;
        letter-spacing: 0.05em;
        color: black;
    }

    .banner2 .content h2 span{
        font-weight: 800;
    }

    .banner2 .content p{
        font-size: 1.2em;
        font-weight: 300;
        letter-spacing: 0.02em;
        line-height: 1.5em;
        color: black;
        margin: 15px 0 35px;
    }

    .play2{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .play2 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .carrito2{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .carrito2 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .info2{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .info2 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }


    .slide2{
        position: absolute;
        bottom: 8vh;
        left: 68vw;
        width: 250px;
        height: 150px;
        background: url(Imagenes/harrypotter.jpg);
        background-size: cover;
        cursor: pointer;
        animation: animate2 15s linear infinite;
    }

    @keyframes animate2{
        0%, 100%{
            background-position: top;
        }

        45%, 55%{
            background-position: bottom;
        }
    }

    .trailer2{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        background: rgba(0,0,0,0.95);
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
    }

    .trailer2.active{
        visibility: visible;
        opacity: 1;
    }

    .trailer2 video{
        max-width: 900px;
        outline: close;
    }

    .trailer2 .close{
        position: absolute;
        top: 30px;
        right: 30px;
        cursor: pointer;
        filter: invert(1);
        max-width: 32px;
    }


    /* PELICULA3 */
    .header3{
        position: absolute;
        top: 200vh;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 100px 200px;
        z-index: 2;  
    }

    .header3 .logo{
        max-width: 400px;
    }

    .header3 .logo img{
        max-width: 100%;
    }

    .banner3{
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 0 200px;
        background-image: url("Imagenes/fondoannabelle.jpg");
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .banner3 .content{
        margin-top: -3vh;
        max-width: 550px;
    }

    .banner3 .content h2{
        text-transform: Uppercase;
        font-weight: 400;
        font-size: 2.5em;
        letter-spacing: 0.1em;
        color: white;
    }

    .banner3 .content h2 span{
        font-weight: 800;
    }

    .banner3 .content p{
        font-size: 1.2em;
        font-weight: 300;
        letter-spacing: 0.02em;
        line-height: 1.5em;
        color: white;
        margin: 15px 0 35px;
    }

    .play3{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .play3 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .carrito3{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .carrito3 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .info3{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: white;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .info3 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }


    .slide3{
        position: absolute;
        bottom: 8vh;
        left: 18vw;
        width: 250px;
        height: 150px;
        background: url(Imagenes/annabelle.jpg);
        background-size: cover;
        cursor: pointer;
        animation: animate3 15s linear infinite;
    }

    @keyframes animate3{
        0%, 100%{
            background-position: top;
        }

        45%, 55%{
            background-position: bottom;
        }
    }

    .trailer3{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 3;
        background: rgba(0,0,0,0.95);
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
    }

    .trailer3.active{
        visibility: visible;
        opacity: 1;
    }

    .trailer3 video{
        max-width: 900px;
        outline: close;
    }

    .trailer3 .close{
        position: absolute;
        top: 30px;
        right: 30px;
        cursor: pointer;
        filter: invert(1);
        max-width: 32px;
    }


    /* PELICULA 4 */
    .header4{
        position: absolute;
        top: 300vh;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 100px 200px;
        z-index: 2;  
    }

    .header4 .logo{
        max-width: 250px;
        margin-left: 50vw;
    }

    .header4 .logo img{
        max-width: 100%;
    }

    .banner4{
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 0 200px;
        background-image: url("Imagenes/fondoshrek.jpg");
        background-position: center;
        background-size: cover;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .banner4 .content{
        margin-top: -3vh;
        max-width: 550px;
        margin-left: 50vw;
    }

    .banner4 .content h2{
        text-transform: Uppercase;
        font-weight: 400;
        font-size: 1.8em;
        letter-spacing: 0.05em;
        color: black;
    }

    .banner4 .content h2 span{
        font-weight: 800;
    }

    .banner4 .content p{
        font-size: 1.2em;
        font-weight: 300;
        letter-spacing: 0.02em;
        line-height: 1.5em;
        color: black;
        margin: 15px 0 35px;
    }

    .play4{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .play4 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .carrito4{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .carrito4 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .info4{
        position: relative;
        margin-top: 2vh;
        display: inline-flex;
        justify-content: flex-start;
        align-content: center;
        color: black;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        letter-spacing: 1px;
        font-size: 1em;
    }

    .info4 img{
        margin-right: 10px;
        max-width: 50px;
        margin-top: -1.3vh;
        margin-right: 1vw;
    }

    .slide4{
        position: absolute;
        bottom: 8vh;
        left: 68vw;
        width: 250px;
        height: 150px;
        background: url(Imagenes/shrek.jpg);
        background-size: cover;
        cursor: pointer;
        animation: animate4 15s linear infinite;
    }

    @keyframes animate4{
        0%, 100%{
            background-position: top;
        }

        45%, 55%{
            background-position: bottom;
        }
    }

    .trailer4{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 3;
        background: rgba(0,0,0,0.95);
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        visibility: hidden;
        opacity: 0;
    }

    .trailer4.active{
        visibility: visible;
        opacity: 1;
    }

    .trailer4 video{
        max-width: 900px;
        outline: close;
    }

    .trailer4 .close{
        position: absolute;
        top: 30px;
        right: 30px;
        cursor: pointer;
        filter: invert(1);
        max-width: 32px;
    }

    .sci{
        position: fixed;
        z-index: 10;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        right: 0px;
        justify-content: center;
        align-items: center;
        flex-direction: column;   
    }

    .sci li{
        list-style: none;
        width: 3vw;
        height: 6.5vh;
        text-align: center;   
        display: flex; 
        justify-content: center;
        align-items: center;   
        background-color: rgb(34, 34, 34);
        border-left: 5px solid rgb(100,100,100);
    }

    .sci li:nth-child(1){
        border-top-left-radius: 20px;
    }

    .sci li:nth-child(5){
        border-bottom-left-radius: 20px;
    }


    .sci li a{
        list-style: none;
    }

    .sci li a img{
        filter: invert(1);
        transform: scale(0.7);
        width: 100%;
    }

    .proximamente{
        position: relative;
        width: 100%;
        min-height: 100vh;
        background-image: linear-gradient(#000 45%, wheat 50%, #000 55%);    
    }

    .proximamente h2{
        position: absolute;
        top: 46.5%;
        left: 22%;
        color: white;
        letter-spacing: 1em;
        font-size: 3.5em;

    }

    .peliculasarriba{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 95vw;
        height: 45vh;
    }

    .peliculasabajo{
        display: flex;
        justify-content: center;
        text-align: center;
        align-items: center;
        margin-top: 10vh;
        width: 95vw;
        height: 45vh;
    }

    .card{
        width: 12vw;
        height: 35vh;
        margin-left: 2vw;
        margin-right: 2vw;
        border:  3px solid wheat;
    }

    .card:hover{
        transform: scale(1.2);
    }

    .card img{
        width: 100%;
        height: 100%;
    }

    ::-webkit-scrollbar{
        width: 12px;
    }

    ::-webkit-scrollbar-thumb{
        background-color: #c9c9c9; 
    }

    ::-webkit-scrollbar-track{
        background-color: #222; 
    }

</style>
<script>

    $(document).ready(function() {
        $('.menus').mouseenter(function (){
            $(".menu2").show("slide", { direction: "left" }, 300);
            $(".contenido").css('margin-left', '5%');
            //$(".menu").toggle('slide');
        });  

        $('.menus').mouseleave(function (){
            $(".menu2").hide("slide", { direction: "left" }, 300);
            $(".contenido").css('margin-left', '0%');
            //$(".menu").toggle('slide');
        });

        $('.opcion1').mouseenter(function (){
            $("#concierto").attr("src","Imagenes/prueba.gif");
        });  

        $('.opcion1').mouseleave(function (){
            $("#concierto").attr("src","Imagenes/prueba.jpg");
        });  

        $('.opcion2').mouseenter(function (){
            $("#cine").attr("src","Imagenes/cine.gif");
        });  

        $('.opcion2').mouseleave(function (){
            $("#cine").attr("src","Imagenes/cine.jpg");
        }); 
    });

</script>
<body>
    <div class="menus">
        <nav class="menu" >
            <div class="logo">
                <img src="{{asset('Imagenes/'.Auth::user()->fotoPerfil)}}" style="width:100%">
            </div>
            <div class="opcionesmenu">
                <a href="#" >
                    <i class="material-icons icono">
                        home
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        person
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        info
                    </i></a>
                <a href="#">
                    <i class="material-icons icono">
                        help_outline
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        settings
                    </i></a>
                <a href="#" >
                    <i class="material-icons icono">
                        close
                    </i></a>
            </div>
        </nav>
        <nav class="menu2" style="display: none;">
            <center>
            <div class="logo2">
                <img src="{{asset('Imagenes/'.Auth::user()->fotoPerfil)}}" style="width:100%">
            </div>
            <a href="{{url('home') }}">
                <i class="material-icons icono">
                    home
                </i>HOME</h2></a>
            <a href="{{url('editar/'.Auth::user()->id) }}" >
                <i class="material-icons icono">
                    person
                </i>PERFIL</a>
            <a href="/sobreheavn" >
                <i class="material-icons icono">
                    info
                </i>SOBRE<br>HEAVN</a>
            <a href="/verOpiniones" >
                <i class="material-icons icono">
                    help_outline
                </i>OPINIONES</a>
            <a href="/opciones" >
                <i class="material-icons icono">
                    settings
                </i>OPCIONES</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons icono"> close
                            </i>LOG OUT
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </center>
        </nav>
    </div>
    <div class="header" id="pelicula1">
        <div class="logo"><img src="Imagenes/jokerlogo.png"></div>
    </div>
    <div class="banner">
        <div class="content">
            <h2>Pon una cara <span>Feliz </span></h2>
            <p>Arthur Fleck adora hacer reír a la gente, pero su carrera como comediante es un fracaso. El repudio social, la marginación y una serie de trágicos acontecimientos lo conducen por el sendero de la locura y, finalmente, cae en el mundo del crimen.</p>
            <a href="#pelicula1" class="play" onclick="toggle();"><img src="Imagenes/play.png">Ver Trailer</a>
            <br>
            <a href="/reservasCine1" class="carrito" style="margin-left: -0.2vw;"><img src="Imagenes/carrito.png">Comprar Entrada</a>
            <br>
            <a href="#" class="info"><img src="Imagenes/infoblanco.png">Ver más películas</a>
            <div class="slide"></div>
            <ul class="sci">
                <li><a href="#pelicula1"><img src="Imagenes/one.png"></a></li>
                <li><a href="#pelicula2"><img src="Imagenes/two.png"></a></li>
                <li><a href="#pelicula3"><img src="Imagenes/three.png"></a></li>
                <li><a href="#pelicula4"><img src="Imagenes/four.png"></a></li>
                <li><a href="#proximamente"><img src="Imagenes/five.png"></a></li>
            </ul>
        </div>
    </div>
    <div class="trailer">
        <video id="video" src="Videos/JokerTrailer.mp4" controls="true"></video>
        <img src="Imagenes/close.png" class="close" onclick="toggle();">
    </div>

    <div class="header2" id="pelicula2">
        <div class="logo"><img src="Imagenes/harrypotterlogo.png"></div>
    </div>
    <div class="banner2">
        <div class="content">
            <h2>Ningún sitio es <span>Seguro </span></h2>
            <p>Harry Potter y sus inseparables amigos Ron y Hermione tendrán que cargar sobre sus hombros con la tarea más difícil que un mago puede afrontar: destruir los horrocruxes que aún quedan en el mundo para poner fin al reinado de Lord Voldemort.</p>
            <a href="#pelicula2" class="play2" onclick="toggle2();"><img src="Imagenes/playnegro.png">Ver Trailer</a>
            <br>
            <a href="/reservasCine2" class="carrito2" style="margin-left: -0.2vw;"><img src="Imagenes/carritonegro.png">Comprar Entrada</a>
            <br>
            <a href="#" class="info2"><img src="Imagenes/info.png">Ver más películas</a>
            <div class="slide2"></div>
        </div>
    </div>
    <div class="trailer2">
        <video id="video2" src="Videos/HPTrailer.mp4" controls="true"></video>
        <img src="Imagenes/close.png" class="close" onclick="toggle2();">
    </div>

    <div class="header3" id="pelicula3">
        <div class="logo"><img src="Imagenes/annabellelogo.png"></div>
    </div>
    <div class="banner3">
        <div class="content">
            <h2>Todo será <span>Poseido </span></h2>
            <p>John Form encuentra el regalo perfecto para Mia, su esposa embarazada: una preciosa muñeca antigua llamada Annabelle. Una noche, una secta satánica les ataca brutalmente y provocan que un ente maligno se apodere de Annabelle.</p>
            <a href="#pelicula3" class="play3" onclick="toggle3();"><img src="Imagenes/play.png">Ver Trailer</a>
            <br>
            <a href="/reservasCine3" class="carrito3" style="margin-left: -0.2vw;"><img src="Imagenes/carrito.png">Comprar Entrada</a>
            <br>
            <a href="#" class="info3"><img src="Imagenes/infoblanco.png">Ver más películas</a>
            <div class="slide3"></div>
        </div>
    </div>
    <div class="trailer3">
        <video id="video3" src="Videos/AnnabelleTrailer.mp4" controls="true"></video>
        <img src="Imagenes/close.png" class="close" onclick="toggle3();">
    </div>

    <div class="header4" id="pelicula4">
        <div class="logo"><img src="Imagenes/shreklogo.png"></div>
    </div>
    <div class="banner4">
        <div class="content">
            <h2>Un peculiar cuento de <span>Hadas </span></h2>
            <p>Un ogro llamado Shrek vive en su pantano, pero su preciada soledad se ve súbitamente interrumpida por la invasión de los ruidosos personajes de los cuentos de hadas. Decidido a salvar su hogar, Shrek hace un trato con Farquaad y se prepara para rescatar a la princesa Fiona, quien será la esposa de Farquaad.</p>
            <a href="#pelicula4" class="play4" onclick="toggle4();"><img src="Imagenes/playnegro.png">Ver Trailer</a>
            <br>
            <a href="/reservasCine4" class="carrito4" style="margin-left: -0.2vw;"><img src="Imagenes/carritonegro.png">Comprar Entrada</a>
            <br>
            <a href="#" class="info4"><img src="Imagenes/info.png">Ver más películas</a>
            <div class="slide4"></div>
        </div>
    </div>
    <div class="trailer4">
        <video id="video4" src="Videos/ShrekTrailer.mp4" controls="true"></video>
        <img src="Imagenes/close.png" class="close" onclick="toggle4();">
    </div>

    <div class="proximamente" id="proximamente">
        <center>
        <div class="peliculasarriba">
            <div class="card">
                <img src="Imagenes/latrincherainfinita.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/vengadores.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/elhoyo.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/julieta.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/elirlandes.jpg" alt="">
            </div>
        </div>
        <h2>PROXIMAMENTE</h2>
        <div class="peliculasabajo">
            <div class="card">
                <img src="Imagenes/spiderman.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/firstlove.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/leyenda.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/contratiempo.jpg" alt="">
            </div>
            <div class="card">
                <img src="Imagenes/hogar.jpg" alt="">
            </div>
        </div>
        </center>
    </div>

    <script type="text/javascript">
        function toggle(){
            var trailer= document.querySelector('.trailer');
            var video= document.getElementById('video');
            trailer.classList.toggle('active');
            video.currentTime = 0;
            video.pause();
        }

        function toggle2(){
            var trailer= document.querySelector('.trailer2');
            var video= document.getElementById('video2');
            trailer.classList.toggle('active');
            video.currentTime = 0;
            video.pause();
        }

        function toggle3(){
            var trailer= document.querySelector('.trailer3');
            var video= document.getElementById('video3');
            trailer.classList.toggle('active');
            video.currentTime = 0;
            video.pause();
        }

        function toggle4(){
            var trailer= document.querySelector('.trailer4');
            var video= document.getElementById('video4');
            trailer.classList.toggle('active');
            video.currentTime = 0;
            video.pause();
        }
    </script>
</body>
</html>