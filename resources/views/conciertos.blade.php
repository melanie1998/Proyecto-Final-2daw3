<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conciertos</title>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--  Jquery scripts -->
    <script src="{{ asset('jquery.transit.js') }}" defer></script>
    <script src="{{ asset('jquery.3.4.1.js') }}" ></script>
    <script src="{{ asset('jqueryui.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
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
        margin: auto;
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
        margin: 0;
        margin-top: 5vh;
        z-index: 100000;
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

    /* DATOS CONCIERTO */
    .fondodatos{
        position: absolute;
        margin-top: 14vh;
        background-color: rgb(39, 39, 39, 0.6);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        width: 100%;
        height: 166vh;
    }

    .datos{
        position: relative;
        display: inline-flex;
        margin-top: 11.5vh;
        margin-left: 0vw;
        padding-left: 12vw;
        width: 84%;
    }

   

    /* SLIDER */
    .slider2 {
        width: 105.5%;
        margin: auto;
        margin-left: 5vw;
        overflow: hidden;
        cursor: pointer;
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
        height: 64vh;
        width: 90%;
        border: 10px solid #111;
        filter: brightness(0.55);
        
    }

    li #nombre1{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 6em;
        margin-left: 34vw;
        margin-top: -50vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 25px #000, 0 0 30px #000;
    }

    li #nombre1:hover{
        color: rgba(0, 67, 253, 1);
    }

    li #nombre2{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 6em;
        margin-left: 38vw;
        margin-top: -50vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 25px #000, 0 0 30px #000;
    }

    li #nombre2:hover{
        color: red;
    }

    li #nombre3{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 6em;
        margin-left: 38vw;
        margin-top: -50vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 25px #000, 0 0 30px #000;
    }

    li #nombre3:hover{
        color: orangered;
    }

    li #nombre4{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 6em;
        margin-left: 34.5vw;
        margin-top: -50vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000, 0 0 25px #000, 0 0 30px #000;
    }

    li #nombre4:hover{
        color: rgb(173, 0, 253);
    }

    li #lugar1{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 2em;
        margin-left: 42vw;
        margin-top: -15vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;

    }

    li #lugar2{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 2em;
        margin-left: 40.5vw;
        margin-top: -15vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;
    }

    li #lugar3{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 2em;
        margin-left: 41.5vw;
        margin-top: -15vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;
    }

    li #lugar4{
        position: absolute;
        text-align: center;
        color: white;
        font-size: 2em;
        margin-left: 38.5vw;
        margin-top: -15vh;
        text-shadow: 0 0 5px #000, 0 0 10px #000, 0 0 15px #000, 0 0 20px #000;
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

    .proximo{
        margin-top: -2vh;
        background-color: rgb(39, 39, 39, 0.8);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        padding-top: 1vh;
        padding-bottom: 5vh;
        border-top: 10px solid black;
        border-bottom: 10px solid black;
    }

    .proximo h1{
        color: white;
    }

   
    .container{ 
        margin-top: 5vh;
        margin-left: 22vw;
    }

    label{
        color: white;
    }

    #tablaConciertos{
        background-color: white;
    }

    #tablaConciertos_info{
        color: white;
    }

    .sorting{
        color: #021620;
    }
        
    td{
        background-color: #222;
        color: white;
    }

    h1{
        margin-top: 5vh;
        margin-left: 2vw;
        letter-spacing: 1vh;
        font-size: 5em;
    }

    #concierto9{
        position: absolute;
        width: 14%;
        margin-left: -15vw;
        margin-top: -2vh;
    }

    #concierto10{
        position: absolute;
        width: 14%;
        margin-left: 59vw;
        margin-top: -56vh;
    }
    
    .info{
    position: absolute;
    margin-top: 3vh;
    margin-left: 20vw;
    padding: 2%;
    background-color: #222;
    border-radius: 50px;
    border: 2px solid white;
    cursor: pointer;
    user-select: none;
}

    .info:hover{
        transform: scale(1.1);
        transition: all .3s ease-in-out;
    }

    .info a{
        text-decoration: none;
    }

    .info h2{
        color: white;
    }

    .info #d{
        color: grey;
    }

    /* COUNTDOWN */
    @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');

    /* 1 */
    .countdown{
        position: absolute;
        margin-top: -35vh;
        margin-left: 30vw;
        font-family: 'Poppins', sans-serif;
        display: flex;
    }

    .countdown div{
        position: relative;
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        background: rgb(255, 255, 255, 0.5);
        box-shadow: inset 0px 0px 100px 6px rgba(2, 19, 61, 0.9);
        color: #fff;
        margin: 0 30px;
        font-size: 3em;
        font-weight: 500;
        transform: scale(1.3);
    }

    .countdown div:before{
        content: '';
        position: absolute;
        bottom: -30px;
        left: 0;
        width: 100%;
        height: 35px;
        background: rgba(0, 67, 253, 1);
        color: #fff;
        font-size: 0.35em;
        line-height: 35px;
        font-weight: 300;
    }

    .countdown #day:before{
        content: 'Días';
    }

    .countdown #hour:before{
        content: 'Horas';
    }

    .countdown #minute:before{
        content: 'Minutos';
    }

    .countdown #second:before{
        content: 'Segundos';
    }

    /* 2 */
    .countdown2{
        position: absolute;
        margin-top: -35vh;
        margin-left: 30vw;
        font-family: 'Poppins', sans-serif;
        display: flex;
    }

    .countdown2 div{
        position: relative;
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        background: rgb(255, 255, 255, 0.5);
        box-shadow: inset 0px 0px 100px 6px rgba(61, 2, 2, 0.9);
        color: #fff;
        margin: 0 30px;
        font-size: 3em;
        font-weight: 500;
        transform: scale(1.3);
    }

    .countdown2 div:before{
        content: '';
        position: absolute;
        bottom: -30px;
        left: 0;
        width: 100%;
        height: 35px;
        background: rgb(253, 0, 0);
        color: #fff;
        font-size: 0.35em;
        line-height: 35px;
        font-weight: 300;
    }

    .countdown2 #day2:before{
        content: 'Días';
    }

    .countdown2 #hour2:before{
        content: 'Horas';
    }

    .countdown2 #minute2:before{
        content: 'Minutos';
    }

    .countdown2 #second2:before{
        content: 'Segundos';
    }


    /* 3 */
    .countdown3{
        position: absolute;
        margin-top: -35vh;
        margin-left: 30vw;
        font-family: 'Poppins', sans-serif;
        display: flex;
    }

    .countdown3 div{
        position: relative;
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        background: rgb(255, 255, 255, 0.5);
        box-shadow: inset 0px 0px 100px 6px rgba(61, 24, 2, 0.9);
        color: #fff;
        margin: 0 30px;
        font-size: 3em;
        font-weight: 500;
        transform: scale(1.3);
    }

    .countdown3 div:before{
        content: '';
        position: absolute;
        bottom: -30px;
        left: 0;
        width: 100%;
        height: 35px;
        background: rgb(253, 93, 0);
        color: #fff;
        font-size: 0.35em;
        line-height: 35px;
        font-weight: 300;
    }

    .countdown3 #day3:before{
        content: 'Días';
    }

    .countdown3 #hour3:before{
        content: 'Horas';
    }

    .countdown3 #minute3:before{
        content: 'Minutos';
    }

    .countdown3 #second3:before{
        content: 'Segundos';
    }


    /* 4 */
    .countdown4{
        position: absolute;
        margin-top: -35vh;
        margin-left: 30vw;
        font-family: 'Poppins', sans-serif;
        display: flex;
    }

    .countdown4 div{
        position: relative;
        width: 100px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        background: rgb(255, 255, 255, 0.5);
        box-shadow: inset 0px 0px 100px 6px rgba(23, 2, 61, 0.9);
        color: #fff;
        margin: 0 30px;
        font-size: 3em;
        font-weight: 500;
        transform: scale(1.3);
    }

    .countdown4 div:before{
        content: '';
        position: absolute;
        bottom: -30px;
        left: 0;
        width: 100%;
        height: 35px;
        background: rgb(173, 0, 253);
        color: #fff;
        font-size: 0.35em;
        line-height: 35px;
        font-weight: 300;
    }

    .countdown4 #day4:before{
        content: 'Días';
    }

    .countdown4 #hour4:before{
        content: 'Horas';
    }

    .countdown4 #minute4:before{
        content: 'Minutos';
    }

    .countdown4 #second4:before{
        content: 'Segundos';
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
    });

</script>

<script type="text/javascript">
    //CONCIERTO1
    var countDate = new Date('Jun 16, 2020 21:00:00').getTime();
       
    function countdown1(){
        var now = new Date().getTime();
            gap = countDate - now;
        
            var second = 1000;
            var minute = second * 60;
            var hour = minute * 60;
            var day = hour * 24;
        
            var d = Math.floor(gap / (day));
            var h = Math.floor((gap % (day)) / (hour));
            var m = Math.floor((gap % (hour)) / (minute));
            var s = Math.floor((gap % (minute)) / second);
        
            document.getElementById('day').innerText = d;
            document.getElementById('hour').innerText = h;
            document.getElementById('minute').innerText = m;
            document.getElementById('second').innerText = s;
    }
       
       setInterval(function(){
        countdown1();
       },1000)

       //CONCIERTO2
       var countDate2 = new Date('Jun 30, 2020 21:00:00').getTime();
       
        function countdown2(){
            var now2 = new Date().getTime();
                gap2 = countDate2 - now2;
            
                var second2 = 1000;
                var minute2 = second2 * 60;
                var hour2 = minute2 * 60;
                var day2 = hour2 * 24;
            
                var d2 = Math.floor(gap2 / (day2));
                var h2 = Math.floor((gap2 % (day2)) / (hour2));
                var m2 = Math.floor((gap2 % (hour2)) / (minute2));
                var s2 = Math.floor((gap2 % (minute2)) / second2);
            
                document.getElementById('day2').innerText = d2;
                document.getElementById('hour2').innerText = h2;
                document.getElementById('minute2').innerText = m2;
                document.getElementById('second2').innerText = s2;
        }
        
        setInterval(function(){
            countdown2();
        },1000)

        //CONCIERTO3
       var countDate3 = new Date('Jul 12, 2020 21:00:00').getTime();
       
       function countdown3(){
           var now3 = new Date().getTime();
               gap3 = countDate3 - now3;
           
               var second3 = 1000;
               var minute3 = second3 * 60;
               var hour3 = minute3 * 60;
               var day3 = hour3 * 24;
           
               var d3 = Math.floor(gap3 / (day3));
               var h3 = Math.floor((gap3 % (day3)) / (hour3));
               var m3 = Math.floor((gap3 % (hour3)) / (minute3));
               var s3 = Math.floor((gap3 % (minute3)) / second3);
           
               document.getElementById('day3').innerText = d3;
               document.getElementById('hour3').innerText = h3;
               document.getElementById('minute3').innerText = m3;
               document.getElementById('second3').innerText = s3;
       }
       
        setInterval(function(){
            countdown3();
        },1000)

       //CONCIERTO4
       var countDate4 = new Date('Jul 31, 2020 21:00:00').getTime();
       
       function countdown4(){
           var now4 = new Date().getTime();
               gap4 = countDate4 - now4;
           
               var second4 = 1000;
               var minute4 = second4 * 60;
               var hour4 = minute4 * 60;
               var day4 = hour4 * 24;
           
               var d4 = Math.floor(gap4 / (day4));
               var h4 = Math.floor((gap4 % (day4)) / (hour4));
               var m4 = Math.floor((gap4 % (hour4)) / (minute4));
               var s4 = Math.floor((gap4 % (minute4)) / second4);
           
               document.getElementById('day4').innerText = d4;
               document.getElementById('hour4').innerText = h4;
               document.getElementById('minute4').innerText = m4;
               document.getElementById('second4').innerText = s4;
       }
       
        setInterval(function(){
            countdown4();
        },1000)
    </script>
<body>
    <div class="menus">
        <nav class="menu" >
            <div class="logo">
                <img src="{{asset('Imagenes/'.Auth::user()->fotoPerfil)}}" style="width:100%; max-height: 200px;">
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
                    <img src="{{asset('Imagenes/'.Auth::user()->fotoPerfil)}}" style="width:100%; max-height: 300px;">
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
                        <h2><center>COLDPLAY</center></h2>
                        <p>Coldplay <br> Viva La Vida (Live In São Paulo)<br> 2018</p>
                    </div>
                </div>
                <video id="video1" src="{{asset('Videos/coldplay.mp4')}}" loop></video>
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
                        <h2><center>POSTMALONE</center></h2>
                        <p>Post Malone <br> I Fall Apart <br>(Live at Camp Flog Gnaw 2018)</p>
                    </div>
                </div>
                <video id="video2" src="{{asset('Videos/postmalone.mp4')}}" loop></video>
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
                        <h2><center>THE 1975</center></h2>
                        <p>The 1975 <br> Somebody Else <br> live from The O2, London <br>on December 16th 2016</p>
                    </div>
                </div>
                <video id="video3" src="{{asset('Videos/the1975.mp4')}}" loop></video>
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
                        <h2><center>ED SHEERAN</center></h2>
                        <p>Ed Sheeran <br>Tenerife Sea Jumpers For Goalposts Live At Wembley Stadium <br>2015</p>
                    </div>
                </div>
                <video id="video4" src="{{asset('Videos/edsheeran.mp4')}}" loop></video>
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
                        <h2><center>HARD GZ</center></h2>
                        <p>HARD GZ <br> CAE LA NOCHE Y POSTUREO (DIRECTO) SALA EL TREN<br>2017</p>
                    </div>
                </div>
                <video id="video5" src="{{asset('Videos/hardgz.mp4')}}" loop ></video>
            </div>
            <div class="der"><i class="material-icons" id="botonder">
                chevron_right
            </i></div>
        </div>
    <div class="fondodatos"></div>
        <div class="datos"> 
            <hr id="linea">
            <!--
            <div id="tabs">
                <ul>
                  <li><a href="#tabs-1">Artistas</a></li>
                  <li><a href="#tabs-2">Grupos</a></li>
                  <li><a href="#tabs-3">Albums</a></li>
                </ul>
                <div id="tabs-1">
                  <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
                </div>
                <div id="tabs-2">
                  <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
                </div>
                <div id="tabs-3">
                  <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                  <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
                </div>
              </div>
              -->
        </div>
        <div class="slider2">
            <ul>
               <li><a href="ponerAgotado">
                    <img src="{{asset('Imagenes/concierto1.jpg')}}" alt="">
                    <h2 id="nombre1">ED SHEERAN</h2>
                    <h3 id="lugar1">WIZIK CENTER</h3>
            
                        <div class="countdown">
                             <div id="day">NA</div>
                             <div id="hour">NA</div>
                             <div id="minute">NA</div>
                             <div id="second">NA</div>
                        </div>
                  
                </a></li>
                <li><a href="ponerAgotado2">
                    <img src="{{asset('Imagenes/concierto2.jpg')}}" alt="">
                    <h2 id="nombre2">HARD GZ</h2>
                    <h3 id="lugar2">PALAU SANT JORDI</h3>
                    <div class="countdown2">
                        <div id="day2">NA</div>
                        <div id="hour2">NA</div>
                        <div id="minute2">NA</div>
                        <div id="second2">NA</div>
                   </div>
                </a></li>
                <li><a href="ponerAgotado3">
                    <img src="{{asset('Imagenes/concierto3.jpg')}}" alt="">
                    <h2 id="nombre3">THE 1975</h2>
                    <h3 id="lugar3">BILBAO ARENA</h3>
                    <div class="countdown3">
                        <div id="day3">NA</div>
                        <div id="hour3">NA</div>
                        <div id="minute3">NA</div>
                        <div id="second3">NA</div>
                   </div>
                </a></li>
                <li><a href="ponerAgotado4">
                    <img src="{{asset('Imagenes/concierto4.jpg')}}" alt="">
                    <h2 id="nombre4">BAD BUNNY</h2>
                    <h3 id="lugar4">ESTADIO DE LA CARTUJA</h3>
                    <div class="countdown4">
                        <div id="day4">NA</div>
                        <div id="hour4">NA</div>
                        <div id="minute4">NA</div>
                        <div id="second4">NA</div>
                   </div>
                </a></li>
            </ul>
        </div>
        <div class="proximo">
            <center><h1>PRÓXIMOS CONCIERTOS</h1></center>
            <div class="container">
                <div id="app">
                    <conciertos-component></conciertos-component>
                </div>
            </div>
        </div>

        <a href="/infoArtistas">
            <div class="info">
                <h2><span id="d">SI NO QUIERES PERDERTE NINGUNA NOVEDAD SOBRE TU ARTISTA FAVORITO, PULSA AQUÍ</h2>
            </div>
        </a>

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