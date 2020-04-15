<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
    
</head>
<style>

   body{
        margin: 0;
        padding: 0;
        overflow: hidden;
        font-family: 'Bree Serif', serif;
    }

    .opcion1{
        position: relative;
        width: 100%;
        height: 50vh;
        border-bottom: 5px solid red;
        
    }

    .opcion1{
        filter: grayscale(100%);
        cursor: pointer;
    }

    .opcion1:hover{
        filter: grayscale(0%);
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 30px #000, 0 0 40px #fff, 0 0 55px #fff;
    }

    .opcion2{
        position: relative;
        width: 100%;
        height: 50vh;
        border-top: 5px solid red;
        cursor: pointer;
    }

    .opcion2{
        filter: grayscale(100%);
    }

    .opcion2:hover{
        filter: grayscale(0%);
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 30px #000, 0 0 40px #fff, 0 0 55px #fff;
    }

    .textConcierto{
        position: relative;
        z-index: 5;
        color: silver;
        margin-top: -45vh;
        font-size: 5em;
        
    }

    .textCine{
        position: relative;
        z-index: 5;
        color: silver;
        margin-top: -50vh;
        font-size: 5em;
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
        ;
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
    <a href="/verConciertos"><div class="opcion1">
        <img id="concierto" src="Imagenes/prueba.jpg" width="100%" height="100%">
        <center>
            <div class="textConcierto">
                <h2>CONCIERTO</h2>
            </div>
        </center>
    </div></a>
    <a href="/verCine"><div class="opcion2">
        <img id="cine" src="Imagenes/cine.jpg" height="100%" width="100%">
        <center>
            <div class="textCine">
                <h2>CINE</h2>
            </div>
        </center>
    </div></a>
</body>
</html>