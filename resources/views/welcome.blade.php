<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src='jquery.transit.js'></script>
        <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />

        <title>Menu</title>

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
            margin-top: -10vh;
            background-color: rgb(12,12,12,0.98);
            background-size: cover;
            width: 100%;
            height: 100vh;
            z-index: -1;
        }

        /*MENU*/
        .menu{
            position: fixed;
            background-color: #ccc;
            margin-top: -10vh;
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

        .material-icons{
            font-size: 2.8em;
        }

        .contenido{
            margin: 0%;
            height: auto;
            font-family: 'Bree Serif', serif;
            transition: all 0.5s ease-in-out;
            user-select: none; 
        }

        .login{
            position: absolute;
            border: 5px solid white;
            float: right;
            margin-top: -5vh;
            margin-left: 85vw;
            padding: 1%;
            border-radius: 15px;
            color: #ccc;
            font-size: 2em;
            font-family: 'Bree Serif', serif; 
            cursor: pointer;
            transition: .5s ease-in-out; 
        }

        .login:hover{
            transform: scale(1.3);
            transform: all 2s ease;
        }

        .heaven{
            margin-top: 10vh;
            margin-left: 2vw;
            color: #ccc;
            font-size: 15em;
            letter-spacing: .12em;
        }

        #linea1{
            margin-top: -12%;
            border: 6px solid #ccc;
            width: 75%;
        }

        #linea2{
            border: 6px solid #ccc;
            width: 60%;
        }

        #linea3{
            border: 6px solid #ccc;
            width: 45%;
        }

        #linea4{
            border: 6px solid #ccc;
            width: 30%;
        }

        #linea5{
            border: 6px solid #ccc;
            width: 15%;
        }

        #linea6{
            border: 6px solid #ccc;
            width: 5%;
        }

        .eslogan{
            margin-top: 8vh;
            color: #ccc;
            font-size: 1.5em;
            font-family: 'Arial';  
        }

        .m-f{
            margin-top: 1%;
            color: #ccc;
            font-size: 5em;
        }

        .iconos{
            color: white;
        }
        #icono1{
            float: left; 
            margin: -15% 0% 0% 15%; 
            font-size: 12em; 
        }

        #icono2{
            float: right;
            margin: -16% 15% 0% 0%; 
            font-size: 12em; 
        }

        .boton{
            margin-top: -2%;
            margin-bottom: 4.4%;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input { 
            opacity: 0;
            width: 0;
            height: 0;
        }

        /*SLIDER*/
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #aaa;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #777777;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
            background-color: #222222;
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        /* MENU2 */
        .menu2{
            position: fixed;
            background-color: #ccc;
            margin-top: -10vh;
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

        .material-icons{
            font-size: 2.8em;
        }

        .stayathome{
            margin: auto;
            margin-top: -4vh;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 0.9em;
            color: #ccc;

        }
    </style>
    <script>
        bNegro = false;
        $(document).ready(function() {
            $("span").click(function(){  
                if(bNegro){
                    $(".fondo").css('background-color', 'rgb(12,12,12,0.98)');
                    $("h2,h3,h4,.iconos,.login").css({'color':'#ccc'});
                    $("#linea1, #linea2, #linea3, #linea4, #linea5, #linea6, .login").css({'border-color':'#ccc'});
                    $("button").css({'color':'#222'});
                    $("button").css('background-color','#ccc');
                    $(".contenido").css({'border-color':'#ccc'});
                    $(".menu").css('background-color','#ccc');
                    $(".menu a").css('color','#222');
                    $(".menu2").css('background-color','#ccc');
                    $(".menu2 a").css('color','#222');
                    $("img").attr("src", "Imagenes/logo.jpg");
                    $("body").attr("background-image", "Imagenes/logo2.jpg");
                    $(".stayathome").css('color','#ccc');
                    bNegro = false;
                
                }else{
                    $(".fondo").css('background-color', 'rgb(201,201,201,0.91)');
                    $("h2,h3,h4,.iconos, .login").css({'color':'#222'});
                    $("#linea1, #linea2, #linea3, #linea4, #linea5, #linea6, .login").css({'border-color':'#222'});
                    $("button").css({'color':'#ccc'});
                    $("button").css('background-color','#222');
                    $(".contenido").css({'border-color':'#222'});
                    $(".menu").css('background-color','#222');
                    $(".menu a").css('color','#ccc');
                    $(".menu2").css('background-color','#222');
                    $(".menu2 a").css('color','#ccc');
                    $("img").attr("src", "Imagenes/logo2.jpg");
                    $("body").attr("background-image", "Imagenes/logo.jpg");
                    $(".stayathome").css('color','#000');
                    bNegro = true;
                }
            });  

            $('.boton').on('keydown', function (e){
                if (e.keyCode == 32 )
                    return false;
            });   
    
        
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
    });
    </script>

    <body>
        <div class="fondo"></div>
        <div class="menus">
            <nav class="menu" >
                <div class="logo">
                    <img src="Imagenes/logo.jpg" style="width:100%">
                </div>
                <div class="opcionesmenu">
                    <a href="#" >
                        <i class="material-icons">
                            home
                        </i></a>
                    <a href="#">
                        <i class="material-icons">
                            info
                        </i></a>
                    <a href="#">
                        <i class="material-icons">
                            help_outline
                        </i></a>
                    <a href="#" >
                        <i class="material-icons">
                            settings
                        </i></a>
                </div>
            </nav>
            <nav class="menu2" style="display: none;">
                <center>
                <div class="logo2">
                    <img src="Imagenes/logo.jpg" style="width:100%">
                </div>
                <a href="/registrologin">
                    <i class="material-icons">
                        home
                    </i>HOME</h2></a>
                <a href="/sobreheavn" >
                    <i class="material-icons">
                        info
                    </i>SOBRE<br>HEAVN</a>
                <a href="/verOpiniones" >
                    <i class="material-icons">
                        help_outline
                    </i>OPINIONES</a>
                <a href="/opciones" >
                    <i class="material-icons">
                        settings
                    </i>OPCIONES</a>
                </center>
            </nav>
            
        </div>
        <main>
            <center>
                <div class="contenido">
                    <a href="/registrologin"><div class="login">LOG IN</div></a>
                    <h2 class="heaven"> H E A V N </h2>
                    <hr id="linea1"></hr>
                    <hr id="linea2"></hr>
                    <hr id="linea3"></hr>
                    <hr id="linea4"></hr>
                    <hr id="linea5"></hr>
                    <hr id="linea6"></hr>
                    <h4 class="eslogan"> Wave of good Instants</h4>
                    <h3 class="m-f">Music & Films</h3>
                    <div class="iconos">
                        <i class="material-icons" id="icono1">
                            music_video
                        </i>
                        <i class="material-icons" id="icono2">
                            theaters
                        </i>
                    </div>
                    <div class="boton">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="stayathome">#quedateencasa #stayathome</div>
                </div>
            </center>
        </main>
    </body>
    </html>