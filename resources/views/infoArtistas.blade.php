<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion Artistas</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
        margin-top: -5vh;
        padding: 0;
        font-family: 'Bree Serif', serif;
        overflow-x: hidden;
    }

    /* SCROLLBAR */
    ::-webkit-scrollbar{
        width: 12px;
    }

    ::-webkit-scrollbar-thumb{
        background-color: #B9B9B9; 
    }

    ::-webkit-scrollbar-track{
        background-color: #222; 
    }

    /* SLIDER */

    .izq{
        position: relative;
        margin-left: 4.8%;
        margin-top: 16vh;   
        z-index: 6;
    }

    .der{
        position: relative;
        margin-top: 16vh;
        margin-left: 83.8%;
        z-index: 6;
    }

    #botonizq, #botonder{
        position: relative;
        font-size: 3em;
        cursor: pointer;
        user-select: none;
        background-color: darkgray;
        border-radius: 10px;
        border: 2px solid #222;
    }

    .fondoslider{
        position: absolute;
        background-color: rgb(39, 39, 39, 0.8);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        width: 100%;
        height: 36vh;
    }

    .slider{
        display: flex;
        margin: 5vh;
        margin-left: 4vw;
        width: 95%;
        transform: scale(0.91);
    }

    .video1{
        position: absolute;
        padding-left: -2%;
        margin-top: 2vh;
        margin-left: -5vh;
        width: 40%;
        height: 32vh;
        z-index: 1;
        transform: scale(0.60)
    }

    .video2{
        position: absolute;
        margin-top: 2vh;
        margin-left: 11.5vw;
        width: 40%;
        height: 32vh;
    
        z-index: 2;
        transform: scale(0.80)
    }

    .video3{
        position: absolute;
        margin-top: 2vh;
        margin-left: 27.5vw;
        width: 40%;
        height: 32vh;
    
        z-index: 3;
    }

    .video4{
        position: absolute;
        margin-top: 2vh;
        margin-left: 43.5vw;
        width: 40%;
        height: 32vh;
        z-index: 2;
        transform: scale(0.80)
    }

    .video5{
        position: absolute;
        margin-top: 2vh;
        margin-left: 58vw;
        width: 40%;
        height: 32vh;

        z-index: 1;
        transform: scale(0.60)
    }

    video{
        width: 100%;
        height: 100%;
        text-align: right;
    }

    .fondo{
        position: absolute;
        margin-left: 80%;
        height: 100%;
        width: 40%;
        font-size: 0.9vw;
        background-color: rgba(26, 26, 26, 1);
    }

    .texto{
        margin: 5% 2% 5% 2%;
        padding-left: 0.5vh;
        padding-right: 0.5vh;
        color: whitesmoke;
    }

    .texto h2{
        font-size: 2em;
    }

    .texto p{
        font-size: 1.2em;
    }


    .volumeup{
        position: absolute;
        color: white;
        margin-left: -25vw;
        margin-top: 28vh;
        font-size: 1.5vw;
        cursor: pointer;
        z-index: 6;
        border: 2px solid white;
        border-radius: 20%;
        user-select: none;
    }

    .volume{
        position: absolute;
        color: white;
        margin-left: -23vw;
        margin-top: 28vh;
        font-size: 1.5vw;
        cursor: pointer;
        z-index: 6;
        border: 2px solid white;
        border-radius: 20%;
        user-select: none;
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

     /* DATOS CONCIERTO */
     .fondodatos{
        position: absolute;
        margin-top: 9.3vh;
        background-color: rgb(39, 39, 39, 0.6);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        width: 100%;
        height: 64.8vh;
        border-top: 10px solid #222;
    }

    .datos{
        position: relative;
        display: inline-flex;
        margin-top: 16vh;
        margin-left: 0vw;
        padding-left: 12vw;
        width: 84%;
    }

   

    /* TABS    */

    #tabs{
        border: 2px solid #222;
        margin-top: -3vh;
        margin-left: -4vw;
        background-color: rgb(39, 39, 39, 0.6);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.95);
        width: 90%;
        height: 58vh;
    }

    #tabs-1, #tabs-2, #tabs-3, #tabs-4,#tabs-5{
        color: white;
    }

    .ui-tabs-nav{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    /* SLIDER */
    .slider2 {
        width: 25%;
        margin: 0;
        overflow: hidden;
        margin-top: -58vh;
        margin-left: 73.5vw;
    }

    .slider2 ul {
        display: flex;
        padding: 0;
        width: 400%;
        animation: cambio 15s infinite alternate linear;
    }

    .slider2 li {
        width: 100%;
        list-style: none;
    }

    .slider2 img {
        height: 58vh;
        width: 90%;
        border: 5px solid #222;
        filter: grayscale(97%);

    }

    
    @keyframes cambio {
        0% {margin-left: 0;}
        20% {margin-left: 0;}
        
        25% {margin-left: -100%;}
        45% {margin-left: -100%;}
        
        50% {margin-left: -200%;}
        70% {margin-left: -200%;}
        
        75% {margin-left: -300%;}
        100% {margin-left: -300%;}
    }

    .tabsSli{
        display:inline;

    }

    /* Inicio */

    .inicio{
        margin-top: 0vh;
    }

    .inicio h3{
        text-align: center;
        font-size: 1.3em;
        font-weight: bold;
    }

    .canciones{
        display: inline-block;
        margin-right: 1vw;
        width: 23%;
        height: 7vh;
    }

    .canciones .fondoImg{
        margin-top: 1vh;
        border-radius: 10px;
        border: 3px solid #0082fe;
    }

    .canciones p{
        text-align: center;
    }

    .botonPlay{
        display: none;
        position: absolute;
        z-index: 5;
        width: 5%;
        margin-top: 2vh;
        margin-left: 5.5vw;
        cursor: pointer;
    }

    /* Generos */
    .genero{
        display: inline-block;
        position: relative;
        margin-top: 4.5vh;
        margin-left: 3vw;
        margin-right: 3vw;
        width: 17%;
        height: 18vh;
        color: white;
        border: 5px solid #c9c9c9;   
    }

    .negro2{
        position: absolute;
        background-color: #222;
        opacity: 0.9;
        width: 100%;
        height: 100%;
    }

    .genero h4{
        position: absolute;
        text-decoration: none;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        margin-top: 2vh;
        font-size: 1.5em;
        z-index: 2;
    }

    .genero img{
        position: absolute;
        top: 3vh;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 35%;
        z-index: 2;
    }

    #pop{
        background-image: url('Imagenes/pop.jpg');
        background-size: 100% 100%;
    } 

    #indie{
        background-image: url('Imagenes/indie.jpg');
        background-size: 100% 100%;
    }

    #trap{
        background-image: url('Imagenes/trap.jpg');
        background-size: 100% 100%;
    }

    #electronica{
        background-image: url('Imagenes/electronica.jpg');
        background-size: 100% 100%;
    }
    
    #latino{
        background-image: url('Imagenes/latino.jpg');
        background-size: 100% 100%;
    }

    #rap{
        background-image: url('Imagenes/raphiphop.jpg');
        background-size: 100% 100%;
    }

   /* Nuestras Playlists */
   .container{ 
       transform: scale(0.85);
       margin-top: 0vh;
    }

    label{
        color: white;
    }

    #tablaPlaylist{
        background-color: white;


    }

    #tablaPlaylist_info{
        color: white;
    }

    #tablaEscuchadasRec{
        background-color: white;


    }

    #tablaEscuchadasRec_info{
        color: white;
    }

    #tablacancionesFav{
        background-color: white;


    }

    #tablacancionesFav_info{
        color: white;
    }

    .sorting{
        color: #021620;
    }

    tr{
        border: none;
    }

    td{
        background-color: #222;
        color: white;
        text-align: center;
        height: 5vh;
        border-style: none;
    }

    #celda{
        padding-top: 15px;
        outline: none;
        
    }

    .iconos{
        margin-left: -16.5px;
        position: absolute;
        width: 3%;
        cursor: pointer;
    }

    .iconosPlay{
        margin-left: -16.5px;
        position: absolute;
        width: 3%;
        cursor: pointer;
    }

    #botonRefresh{
        position: absolute;
        margin-left: 92%; 
        margin-top: 1%;
        cursor: pointer;
    }

    #botonRefresh img{
        width: 40%
    }

    
    #botonRefresh2{
        position: absolute;
        margin-left: 92%; 
        margin-top: 1%;
        cursor: pointer;
    }

    #botonRefresh2 img{
        width: 40%
    }


   
</style>
<script>
    var estaPlay=false;
    var estaPlay2=false;
    var estaPlay3=false;
    var estaPlay4=false;
    var estaPlay5=false;
    var estaPlay6=false;
    var estaPlay7=false;
    var estaPlay8=false;
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

        $( function() {
            $( "#tabs" ).tabs();
        });

        $('#cancion1').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion1').mouseleave(function (){
            if(!estaPlay){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 

        $('#cancion2').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion2').mouseleave(function (){
            if(!estaPlay2){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 

        $('#cancion3').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion3').mouseleave(function (){
            if(!estaPlay3){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 

        $('#cancion4').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion4').mouseleave(function (){
            if(!estaPlay4){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 

        $('#cancion5').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion5').mouseleave(function (){
            if(!estaPlay5){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 

        $('#cancion6').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion6').mouseleave(function (){
            if(!estaPlay6){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 

        $('#cancion7').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion7').mouseleave(function (){
            if(!estaPlay7){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 

        $('#cancion8').mouseenter(function (){
            $(".botonPlay", this).show();
            $('.fondoImg', this).css({ opacity: 0.1 });   
        }); 

        $('#cancion8').mouseleave(function (){
            if(!estaPlay8){
                $('.fondoImg', this).css({ opacity: 1 });
                $(".botonPlay", this).hide();
            }
        }); 
        
        $('#cancion1').click(function (){
            var a = document.getElementById("audio_playUno");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay2 = false;
                          estaPlay3 = false;
                          estaPlay4 = false;
                          estaPlay5 = false;
                          estaPlay6 = false;
                          estaPlay7 = false;
                          estaPlay8 = false;
                          $('#botonPlay2').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg2').css({ opacity: 1 });
                          $('#botonPlay2').hide();
                          $('#botonPlay3').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg3').css({ opacity: 1 });
                          $('#botonPlay3').hide();
                          $('#botonPlay4').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg4').css({ opacity: 1 });
                          $('#botonPlay4').hide();
                          $('#botonPlay5').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg5').css({ opacity: 1 });
                          $('#botonPlay5').hide();
                          $('#botonPlay6').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg6').css({ opacity: 1 });
                          $('#botonPlay6').hide();
                          $('#botonPlay7').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg7').css({ opacity: 1 });
                          $('#botonPlay7').hide();
                          $('#botonPlay8').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg8').css({ opacity: 1 });
                          $('#botonPlay8').hide();
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay=true;
             
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay=false;
                
            }
            
        });
        $('#cancion2').click(function (){
            var a = document.getElementById("audio_playDos");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay2){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay = false;
                          estaPlay3 = false;
                          estaPlay4 = false;
                          estaPlay5 = false;
                          estaPlay6 = false;
                          estaPlay7 = false;
                          estaPlay8 = false;
                          $('#botonPlay1').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg1').css({ opacity: 1 });
                          $('#botonPlay1').hide();
                          $('#botonPlay3').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg3').css({ opacity: 1 });
                          $('#botonPlay3').hide();
                          $('#botonPlay4').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg4').css({ opacity: 1 });
                          $('#botonPlay4').hide();
                          $('#botonPlay5').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg5').css({ opacity: 1 });
                          $('#botonPlay5').hide();
                          $('#botonPlay6').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg6').css({ opacity: 1 });
                          $('#botonPlay6').hide();
                          $('#botonPlay7').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg7').css({ opacity: 1 });
                          $('#botonPlay7').hide();
                          $('#botonPlay8').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg8').css({ opacity: 1 });
                          $('#botonPlay8').hide();
                            
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay2=true;
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay2=false;
            }
            
        });
        $('#cancion3').click(function (){
            var a = document.getElementById("audio_playTres");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay3){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay = false;
                          estaPlay2 = false;
                          estaPlay4 = false;
                          estaPlay5 = false;
                          estaPlay6 = false;
                          estaPlay7 = false;
                          estaPlay8 = false;
                          $('#botonPlay1').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg1').css({ opacity: 1 });
                          $('#botonPlay1').hide();
                          $('#botonPlay2').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg2').css({ opacity: 1 });
                          $('#botonPlay2').hide();
                          $('#botonPlay4').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg4').css({ opacity: 1 });
                          $('#botonPlay4').hide();
                          $('#botonPlay5').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg5').css({ opacity: 1 });
                          $('#botonPlay5').hide();
                          $('#botonPlay6').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg6').css({ opacity: 1 });
                          $('#botonPlay6').hide();
                          $('#botonPlay7').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg7').css({ opacity: 1 });
                          $('#botonPlay7').hide();
                          $('#botonPlay8').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg8').css({ opacity: 1 });
                          $('#botonPlay8').hide();
                            
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay3=true;
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay3=false;
            }
            
        });
        $('#cancion4').click(function (){
            var a = document.getElementById("audio_playCuatro");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay4){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay = false;
                          estaPlay2 = false;
                          estaPlay3 = false;
                          estaPlay5 = false;
                          estaPlay6 = false;
                          estaPlay7 = false;
                          estaPlay8 = false;
                          $('#botonPlay1').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg1').css({ opacity: 1 });
                          $('#botonPlay1').hide();
                          $('#botonPlay2').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg2').css({ opacity: 1 });
                          $('#botonPlay2').hide();
                          $('#botonPlay3').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg3').css({ opacity: 1 });
                          $('#botonPlay3').hide();
                          $('#botonPlay5').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg5').css({ opacity: 1 });
                          $('#botonPlay5').hide();
                          $('#botonPlay6').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg6').css({ opacity: 1 });
                          $('#botonPlay6').hide();
                          $('#botonPlay7').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg7').css({ opacity: 1 });
                          $('#botonPlay7').hide();
                          $('#botonPlay8').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg8').css({ opacity: 1 });
                          $('#botonPlay8').hide();
                            
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay4=true;
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay4=false;
            }
            
        });
        $('#cancion5').click(function (){
            var a = document.getElementById("audio_playCinco");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay5){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay = false;
                          estaPlay2 = false;
                          estaPlay3 = false;
                          estaPlay4 = false;
                          estaPlay6 = false;
                          estaPlay7 = false;
                          estaPlay8 = false;
                          $('#botonPlay1').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg1').css({ opacity: 1 });
                          $('#botonPlay1').hide();
                          $('#botonPlay2').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg2').css({ opacity: 1 });
                          $('#botonPlay2').hide();
                          $('#botonPlay3').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg3').css({ opacity: 1 });
                          $('#botonPlay3').hide();
                          $('#botonPlay4').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg4').css({ opacity: 1 });
                          $('#botonPlay4').hide();
                          $('#botonPlay6').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg6').css({ opacity: 1 });
                          $('#botonPlay6').hide();
                          $('#botonPlay7').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg7').css({ opacity: 1 });
                          $('#botonPlay7').hide();
                          $('#botonPlay8').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg8').css({ opacity: 1 });
                          $('#botonPlay8').hide();
                            
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay5=true;
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay5=false;
            }
            
        });
        $('#cancion6').click(function (){
            var a = document.getElementById("audio_playSeis");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay6){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay = false;
                          estaPlay2 = false;
                          estaPlay3 = false;
                          estaPlay4 = false;
                          estaPlay5 = false;
                          estaPlay7 = false;
                          estaPlay8 = false;
                          $('#botonPlay1').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg1').css({ opacity: 1 });
                          $('#botonPlay1').hide();
                          $('#botonPlay2').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg2').css({ opacity: 1 });
                          $('#botonPlay2').hide();
                          $('#botonPlay3').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg3').css({ opacity: 1 });
                          $('#botonPlay3').hide();
                          $('#botonPlay4').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg4').css({ opacity: 1 });
                          $('#botonPlay4').hide();
                          $('#botonPlay5').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg5').css({ opacity: 1 });
                          $('#botonPlay5').hide();
                          $('#botonPlay7').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg7').css({ opacity: 1 });
                          $('#botonPlay7').hide();
                          $('#botonPlay8').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg8').css({ opacity: 1 });
                          $('#botonPlay8').hide();
                            
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay6=true;
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay6=false;
            }
            
        });
        $('#cancion7').click(function (){
            var a = document.getElementById("audio_playSiete");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay7){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay = false;
                          estaPlay2 = false;
                          estaPlay3 = false;
                          estaPlay4 = false;
                          estaPlay6 = false;
                          estaPlay5 = false;
                          estaPlay8 = false;
                          $('#botonPlay1').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg1').css({ opacity: 1 });
                          $('#botonPlay1').hide();
                          $('#botonPlay2').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg2').css({ opacity: 1 });
                          $('#botonPlay2').hide();
                          $('#botonPlay3').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg3').css({ opacity: 1 });
                          $('#botonPlay3').hide();
                          $('#botonPlay4').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg4').css({ opacity: 1 });
                          $('#botonPlay4').hide();
                          $('#botonPlay5').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg5').css({ opacity: 1 });
                          $('#botonPlay5').hide();
                          $('#botonPlay6').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg6').css({ opacity: 1 });
                          $('#botonPlay6').hide();
                          $('#botonPlay8').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg8').css({ opacity: 1 });
                          $('#botonPlay8').hide();
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay7=true;
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay7=false;
            }
            
        });
        $('#cancion8').click(function (){
            var a = document.getElementById("audio_playOcho");
            var allAudios = document.getElementsByTagName('audio');
            if(!estaPlay8){
                if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          estaPlay = false;
                          estaPlay2 = false;
                          estaPlay3 = false;
                          estaPlay4 = false;
                          estaPlay6 = false;
                          estaPlay7 = false;
                          estaPlay5 = false;
                          $('#botonPlay1').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg1').css({ opacity: 1 });
                          $('#botonPlay1').hide();
                          $('#botonPlay2').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg2').css({ opacity: 1 });
                          $('#botonPlay2').hide();
                          $('#botonPlay3').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg3').css({ opacity: 1 });
                          $('#botonPlay3').hide();
                          $('#botonPlay4').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg4').css({ opacity: 1 });
                          $('#botonPlay4').hide();
                          $('#botonPlay5').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg5').css({ opacity: 1 });
                          $('#botonPlay5').hide();
                          $('#botonPlay6').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg6').css({ opacity: 1 });
                          $('#botonPlay6').hide();
                          $('#botonPlay7').attr("src", "Imagenes/playButtonAzul.png");
                          $('#fondoImg7').css({ opacity: 1 });
                          $('#botonPlay7').hide();
                        }
                      }
                    }
                a.play();
                $('.botonPlay', this).attr("src", "Imagenes/pauseAzul.png");
                estaPlay8=true;
            }else{
                a.pause();
                $('.botonPlay', this).attr("src", "Imagenes/playButtonAzul.png");
                estaPlay8=false;
            }
            
        });

        $('#botonRefresh').click(function (){
            location.reload();
        });

        $('#botonRefresh2').click(function (){
            location.reload();
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
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons icono"> close
                        </i>LOG OUT
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </center>
        </nav>
    </div>

    <div class="fondoslider"></div>
        <div class="slider">
            <div class="izq"><i class="material-icons" id="botonizq">
                chevron_left
            </i></div>
            <div class="video1">
                <div class="fondo" style="opacity: 0;">
                    <i class="material-icons volumeup" >
                        volume_up
                        </i>
                    <i class="material-icons volume" >
                        volume_off
                        </i>
                    <div class="texto">
                        <h2><center>BAD BUNNY</center></h2>
                        <p>Yo Perreo Sola <br> Video Oficial </p>
                    </div>
                </div>
                <video id="video1" src="{{asset('Videos/badbunny.mp4')}}" loop></video>
            </div>
            <div class="video2">
                <div class="fondo" style="opacity: 0;">
                    <i class="material-icons volumeup">
                        volume_up
                        </i>
                    <i class="material-icons volume">
                        volume_off
                        </i>
                    <div class="texto">
                        <h2><center>BILLIE EILISH</center></h2>
                        <p>-Bad Guy <br> Video Oficial </p>
                    </div>
                </div>
                <video id="video2" src="{{asset('Videos/billieeilish.mp4')}}" loop></video>
            </div>
            <div class="video3">
                
                <div class="fondo" style="opacity: 0;">
                    <i class="material-icons volumeup">
                        volume_up
                        </i>
                    <i class="material-icons volume">
                        volume_off
                        </i>
                    <div class="texto">
                        <h2><center>MARTIN GARRIX</center></h2>
                        <p>ft Dean Lewis <br> Used To Love <br> Video Oficial</p>
                    </div>
                </div>
                <video id="video3" src="{{asset('Videos/martingarrix.mp4')}}" loop></video>
            </div>
            <div class="video4">
                <div class="fondo" style="opacity: 0;">
                    <i class="material-icons volumeup">
                        volume_up
                        </i>
                    <i class="material-icons volume">
                        volume_off
                        </i>
                    <div class="texto">
                        <h2><center>MIRANDA</center></h2>
                        <p>Latidos<br>(prod. D3llano) <br> Video Oficial</p>
                    </div>
                </div>
                <video id="video4" src="{{asset('Videos/miranda.mp4')}}" loop></video>
            </div>
            <div class="video5">
                <div class="fondo" style="opacity: 0;">
                    <i class="material-icons volume">
                        volume_up
                        </i>
                    <i class="material-icons volumeup">
                        volume_off
                        </i>
                    <div class="texto">
                        <h2><center>DUKI</center></h2>
                        <p>Goteo <br> Video Oficial </p>
                    </div>
                </div>
                <video id="video5" src="{{asset('Videos/duki.mp4')}}" loop ></video>
            </div>
            <div class="der"><i class="material-icons" id="botonder">
                chevron_right
                </i></div>
        </div>

    <div class="tabsSli">
        <div class="fondodatos"></div>
            <div class="datos"> 
                <div id="tabs">
                    <ul>
                    <li><a href="#tabs-1">Inicio</a></li>
                    <li><a href="#tabs-2">Generos</a></li>
                    <li><a href="#tabs-3">Nuestra Playlist</a></li>
                    <li><a href="#tabs-4">Esuchadas recientemente</a></li>
                    <li><a href="#tabs-5">Tus Canciones favoritas</a></li>
                    </ul>
                    <div id="tabs-1">
                        <div class="inicio">
                            <h3>Lo Último</h3>
                            <div class="canciones" id="cancion1">
                                <audio id="audio_playUno" loop><source src="Audio/Physical.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay1" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg1" src="Imagenes/dualipa.jpg" width="100%" alt="">
                                <p>Dua Lipa - Physical</p>
                            </div>
                            <div class="canciones" id="cancion2">
                                <audio id="audio_playDos" loop><source src="Audio/Yo Perreo Sola.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay2" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg2" src="Imagenes/badbunny.jpg" width="100%" alt="">
                                <p>Bad Bunny - Yo perreo sola</p>
                            </div>
                            <div class="canciones" id="cancion3">
                                <audio id="audio_playTres" loop><source src="Audio/Used To Love.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay3" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg3" src="Imagenes/martingarrix.jpg" width="100%" alt="">
                                <p>Martin Garrix - Used to love</p>
                            </div>
                            <div class="canciones" id="cancion4">
                                <audio id="audio_playCuatro" loop><source src="Audio/Latidos.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay4" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg4" src="Imagenes/Miranda.jpg" width="100%" alt="">
                                <p>Miranda - Latidos</p>
                            </div>
                            <h3 style="margin-top: 2vh;">Top Canciones del momento</h3>
                            <div class="canciones" id="cancion5">
                                <audio id="audio_playCinco" loop><source src="Audio/Bad Guy.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay5" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg5" src="Imagenes/badguy.jpg" width="100%" alt="">
                                <p>Billie Eilish - Bad Guy</p>
                            </div>
                            <div class="canciones" id="cancion6">
                                <audio id="audio_playSeis" loop><source src="Audio/Perfect.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay6" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg6" src="Imagenes/Perfect.jpg" width="100%" alt="">
                                <p>Ed Sheeran - Perfect</p>
                            </div>
                            <div class="canciones" id="cancion7">
                                <audio id="audio_playSiete" loop><source src="Audio/Despacito.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay7" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg7" src="Imagenes/despacito.jpg" width="100%" alt="">
                                <p>Luis Fonsi - Despacito</p>
                            </div>
                            <div class="canciones" id="cancion8">
                                <audio id="audio_playOcho" loop><source src="Audio/Goteo.mp3" type="audio/mp3" /></audio>
                                <img class="botonPlay" id="botonPlay8" src="Imagenes/playButtonAzul.png">
                                <img class="fondoImg" id="fondoImg8" src="Imagenes/goteo.jpg" width="100%" alt="">
                                <p>Duki - Goteo</p>
                            </div>
                            <h3 style="margin-top: 2vh;">Top Artistas del momento</h3>
                            <div class="canciones">
                                <img class="fondoImg" src="Imagenes/hardgz.jpg" width="100%" alt="">
                                <p>Hard GZ</p>
                            </div>
                            <div class="canciones">
                                <img class="fondoImg" src="Imagenes/JBalvin.jpg" width="100%" alt="">
                                <p>JBalvin</p>
                            </div>
                            <div class="canciones">
                                <img class="fondoImg" src="Imagenes/postmalone.jpg" width="100%" alt="">
                                <p>Post Malone</p>
                            </div>
                            <div class="canciones">
                                <img class="fondoImg" src="Imagenes/Coldplay.jpg" width="100%" alt="">
                                <p>ColdPlay</p>
                            </div>
                        </div>
                    </div>
                    <div id="tabs-2">
                        <center> 
                            <div class="genero" id="pop">
                                <img src="Imagenes/pop.png" alt="">
                                <h4>Pop</h4>
                                <div class="negro2"></div>
                            </div>
                    
                        
                            <div class="genero" id="indie">
                                <img src="Imagenes/indie.png" alt="">
                                <h4>Indie</h4>
                                <div class="negro2"></div>
                            </div>
                        
                
                            <div class="genero" id="trap">
                                <img src="Imagenes/trap.png" alt="">
                                <h4>Trap</h4>
                                <div class="negro2"></div>
                            </div>
                
                            <div class="genero" id="electronica">
                                <img src="Imagenes/electronica.png" alt="">
                                <h4>Electronica</h4>
                                <div class="negro2"></div>
                            </div>
                    

                            <div class="genero" id="latino">
                                <img src="Imagenes/latino.png" alt="">
                                <h4>Latino</h4>
                                <div class="negro2"></div>
                            </div>

                            <div class="genero" id="rap">
                                <img src="Imagenes/raphiphop.png" alt="">
                                <h4>Rap</h4>
                                <div class="negro2"></div>
                            </div> 
                        </center>
                    </div>
                    <div id="app">
                        <div id="tabs-3">
                         
                            <div class="container">
                            
                                    <playlist-component></playlist-component>
                                
                            </div>
                        </div>
                        <div id="tabs-4">
                            <div id="botonRefresh" title="Actualizar">
                                <img src="Imagenes/refresh.png">
                            </div>
                            <div class="container"> 
                                    <escuchadas-component></escuchadas-component>
                            
                            </div>
                        </div>
            
                        <div id="tabs-5">
                            <div id="botonRefresh2" title="Actualizar">
                                <img src="Imagenes/refresh.png">
                            </div>
                            <div class="container">
                            
                                <cancionfav-component></cancionfav-component>
                        
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider2">

                <ul>
                    <li>
                        <img src="{{asset('Imagenes/listaGeneros.jpg')}}" alt="">
                   
                    </li>
                    <li>
                        <img src="{{asset('Imagenes/playlistCanciones.jpg')}}" alt="">
              
                    </li>
                    <li>
                        <img src="{{asset('Imagenes/listaCanciones.jpg')}}" alt="">
                   
                    </li>
                    <li>
                        <img src="{{asset('Imagenes/cancionesFav.jpg')}}" alt="">
                    
                    </li> 
                </ul>
            </div>
        </div>
<script>

    var block=false;
    function cambiarBlock(){
        block=false;
    }
    function reproducir(){
        for(i=1; i<6; i++){
            if($(`.video${i}`).css("z-index") == "3"){
                $(`#video${i}`).prop('muted', true);
                $(`#video${i}`).trigger("play");
            }else{
                $(`#video${i}`).trigger("pause");
            }
        }
    }

    $(document).ready(function(){
        reproducir();
        contador = 3; 
        contadorPos = 0;
        $(".video1, .video2, .video3, .video4, .video5").mouseover(function(){
            if($(this).css("z-index") == "3"){
                $(this).children(".fondo").transition({ opacity: 1}, 300);                    
            }
        });
        $(".video1, .video2, .video3, .video4, .video5").mouseleave(function(){
            if($(this).css("z-index") == "3"){
                $(this).children(".fondo").transition({ opacity: 0}, 300);
            }
        });
        $(".izq").click(function(){
            if(!block){
                block = true;
                setTimeout(cambiarBlock, 500);
                if(contadorPos == 0){
                    $(`.video1`).css({'z-index': '1'}, 500)
                    $(`.video2`).css({'z-index': '1'}, 500)
                    $(`.video3`).css({'z-index': '2'}, 500)
                    $(`.video4`).css({'z-index': '3'}, 500)
                    $(`.video5`).css({'z-index': '2'}, 500)

                    $(`.video1`).transition({ scale: 0.4, x:"23.3vw", opacity: 0}, 300);
                    $(`.video2`).transition({ scale: 0.6, x: "-23.3vw" }, 500);
                    $(`.video3`).transition({ scale: 0.8, x: "-20vw" }, 500);
                    $(`.video4`).transition({ scale: 1, x: "-16vw" }, 500);
                    $(`.video5`).transition({ scale: 0.8, x: "-18vw"}, 500);
                    $(`.video1`).transition({ scale: 0.6, x: "100.5vw", opacity: 1}, 200);
                    contadorPos++;

                }else if(contadorPos == 1){
                    $(`.video1`).css({'z-index': '2'}, 500)
                    $(`.video2`).css({'z-index': '1'}, 500)
                    $(`.video3`).css({'z-index': '1'}, 500)
                    $(`.video4`).css({'z-index': '2'}, 500)
                    $(`.video5`).css({'z-index': '3'}, 500)

                    $(`.video2`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video3`).transition({ scale: 0.6, x:"-50vw" }, 500);
                    $(`.video4`).transition({ scale: 0.8, x:"-40vw" }, 500);
                    $(`.video5`).transition({ scale: 1, x:"-30.5vw" }, 500);
                    $(`.video1`).transition({ scale: 0.8, x:"57.5vw" }, 500);
                    $(`.video2`).transition({ scale: 0.6, x:"77.5vw", opacity: 1}, 200);
                    contadorPos++;

                }else if(contadorPos == 2){
                    $(`.video1`).css({'z-index': '3'}, 500)
                    $(`.video2`).css({'z-index': '2'}, 500)
                    $(`.video3`).css({'z-index': '1'}, 500)
                    $(`.video4`).css({'z-index': '1'}, 500)
                    $(`.video5`).css({'z-index': '2'}, 500)

                    $(`.video3`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video4`).transition({ scale: 0.6, x:"-76.8vw" }, 500);
                    $(`.video5`).transition({ scale: 0.8, x:"-58.2vw" }, 500);
                    $(`.video1`).transition({ scale: 1, x:"30vw" }, 500);
                    $(`.video2`).transition({ scale: 0.8, x:"40vw" }, 500);
                    $(`.video3`).transition({ scale: 0.6, x:"50.8vw", opacity: 1}, 200);
                    contadorPos++;

                }else if(contadorPos == 3){
                    $(`.video1`).css({'z-index': '2'}, 500)
                    $(`.video2`).css({'z-index': '3'}, 500)
                    $(`.video3`).css({'z-index': '2'}, 500)
                    $(`.video4`).css({'z-index': '1'}, 500)
                    $(`.video5`).css({'z-index': '1'}, 500)

                    $(`.video4`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video5`).transition({ scale: 0.6, x:"-100.8vw" }, 500);
                    $(`.video1`).transition({ scale: 0.8, x:"17.5vw" }, 500);
                    $(`.video2`).transition({ scale: 1, x:"16vw" }, 500);
                    $(`.video3`).transition({ scale: 0.8, x:"20vw" }, 500);
                    $(`.video4`).transition({ scale: 0.6, x:"24.2vw", opacity: 1}, 200);
                    contadorPos++;
                
                }else if(contadorPos == 4){
                    $(`.video1`).css({'z-index': '1'}, 500)
                    $(`.video2`).css({'z-index': '2'}, 500)
                    $(`.video3`).css({'z-index': '3'}, 500)
                    $(`.video4`).css({'z-index': '2'}, 500)
                    $(`.video5`).css({'z-index': '1'}, 500)

                    $(`.video5`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video1`).transition({ scale: 0.6, x:"0vw" }, 500);
                    $(`.video2`).transition({ scale: 0.8, x:"0vw" }, 500);
                    $(`.video3`).transition({ scale: 1, x:"0vw" }, 500);
                    $(`.video4`).transition({ scale: 0.8, x:"0vw" }, 500);
                    $(`.video5`).transition({ scale: 0.6, x:"0vw", opacity: 1}, 200);
                    contadorPos=0;
                }
                reproducir(); 
            }
            
        });  

        $(".der").click(function(){
            
            if(!block){
                    block = true;
                    setTimeout(cambiarBlock, 500);
                if(contadorPos == 0){
                    $(`.video1`).css({'z-index': '2'}, 500)
                    $(`.video2`).css({'z-index': '3'}, 500)
                    $(`.video3`).css({'z-index': '2'}, 500)
                    $(`.video4`).css({'z-index': '1'}, 500)
                    $(`.video5`).css({'z-index': '1'}, 500)

                    $(`.video5`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video1`).transition({ scale: 0.8, x: "17.5vw" }, 500);
                    $(`.video2`).transition({ scale: 1, x: "16vw" }, 500);
                    $(`.video3`).transition({ scale: 0.8, x: "20vw" }, 500);
                    $(`.video4`).transition({ scale: 0.6, x: "23.9vw"}, 500);
                    $(`.video5`).transition({ scale: 0.6, x: "-101vw", opacity: 1}, 200);
                    contadorPos=4;

                }else if(contadorPos == 4){
                    $(`.video1`).css({'z-index': '3'}, 500)
                    $(`.video2`).css({'z-index': '2'}, 500)
                    $(`.video3`).css({'z-index': '1'}, 500)
                    $(`.video4`).css({'z-index': '1'}, 500)
                    $(`.video5`).css({'z-index': '2'}, 500)

                    $(`.video4`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video5`).transition({ scale: 0.8, x:"-58.1vw" }, 500);
                    $(`.video1`).transition({ scale: 1, x:"30vw" }, 500);
                    $(`.video2`).transition({ scale: 0.8, x:"40vw" }, 500);
                    $(`.video3`).transition({ scale: 0.6, x:"50.8vw" }, 500);
                    $(`.video4`).transition({ scale: 0.6, x:"-76.7vw", opacity: 1}, 200);
                    contadorPos--;

                }else if(contadorPos == 3){
                    $(`.video1`).css({'z-index': '2'}, 500)
                    $(`.video2`).css({'z-index': '1'}, 500)
                    $(`.video3`).css({'z-index': '1'}, 500)
                    $(`.video4`).css({'z-index': '2'}, 500)
                    $(`.video5`).css({'z-index': '3'}, 500)

                    $(`.video3`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video4`).transition({ scale: 0.8, x:"-40.1vw" }, 500);
                    $(`.video5`).transition({ scale: 1, x:"-32vw" }, 500);
                    $(`.video1`).transition({ scale: 0.8, x:"57.5vw" }, 500);
                    $(`.video2`).transition({ scale: 0.6, x:"77.5vw" }, 500);
                    $(`.video3`).transition({ scale: 0.6, x:"-50vw", opacity: 1}, 200);
                    contadorPos--;

                }else if(contadorPos == 2){
                    $(`.video1`).css({'z-index': '1'}, 500)
                    $(`.video2`).css({'z-index': '1'}, 500)
                    $(`.video3`).css({'z-index': '2'}, 500)
                    $(`.video4`).css({'z-index': '3'}, 500)
                    $(`.video5`).css({'z-index': '2'}, 500)

                    $(`.video2`).transition({ scale: 0.4, x:"-23.3vw", opacity: 0}, 300);
                    $(`.video3`).transition({ scale: 0.8, x:"-20.1vw" }, 500);
                    $(`.video4`).transition({ scale: 1, x:"-16vw" }, 500);
                    $(`.video5`).transition({ scale: 0.8, x:"-18vw" }, 500);
                    $(`.video1`).transition({ scale: 0.6, x:"100.8vw" }, 500);
                    $(`.video2`).transition({ scale: 0.6, x:"-23.3vw", opacity: 1}, 200);
                    contadorPos--;

                }else if(contadorPos == 1){
                    $(`.video1`).css({'z-index': '1'}, 500)
                    $(`.video2`).css({'z-index': '2'}, 500)
                    $(`.video3`).css({'z-index': '3'}, 500)
                    $(`.video4`).css({'z-index': '2'}, 500)
                    $(`.video5`).css({'z-index': '1'}, 500)

                    $(`.video1`).transition({ scale: 0.4, x:"0vw", opacity: 0}, 300);
                    $(`.video2`).transition({ scale: 0.8, x:"0vw" }, 500);
                    $(`.video3`).transition({ scale: 1, x:"0vw" }, 500);
                    $(`.video4`).transition({ scale: 0.8, x:"0vw" }, 500);
                    $(`.video5`).transition({ scale: 0.6, x:"0vw" }, 500);
                    $(`.video1`).transition({ scale: 0.6, x:"0vw", opacity: 1}, 200);
                    contadorPos--;
                }
                reproducir();
            }
            
        });
        
        $(".volume").click(function(){
            for(i=1; i<6; i++){
                if( $("video").prop('muted', true) ){
                    $(`#video${i}`).prop('muted', false);
                }else{
                    $(`#video${i}`).prop('muted', true);
                }      
            }
        });

        $(".volumeup").click(function(){
            for(i=1; i<6; i++){
                if( $("video").prop('muted', false) ){
                    $(`#video${i}`).prop('muted', true);
                }else{
                    $(`#video${i}`).prop('muted', false);
                }     
            }
        });
        
    });
</script>
    
</body>
</html>