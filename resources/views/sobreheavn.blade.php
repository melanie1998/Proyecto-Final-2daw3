<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
        <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />

        <title>Sobre Heavn</title>
    </head>
<style>

    html{
        scroll-behavior: smooth;  
    }

    body{
        margin: 0;
        font-family: 'Bree Serif', serif;
    }

    .header{
        margin: 0;
        position: relative;
        width: 100%;
        height: 100vh;
        background-image: url('Imagenes/sobrenosotros.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed;
        background-size: 100% 100%;
    }


    .negro{
        width: 100%;
        height: 100vh;
        background-color: rgb(0, 0, 0, 0.75);
    }

    .logo{
        position: absolute;
        margin-top: 5vh;
        margin-left: 6vw;
    }

    .sobrenosotros{
        position: relative;
        top: 25vh;
        font-size: 4em;
        color: white;
        letter-spacing: 2.5vh;
    }

    #nosotros{
        color: #2C6C8B;
    }

    .info{
        margin-top: 35vh;
        font-size: 1.5em;
        color: white;
        letter-spacing: 0.5vh;
    }

    #azul{
        color: #2C6C8B;
        font-size: 2em;
    }

    #azul2{
        color: #2C6C8B;
        font-size: 1.5em;
    }

    #heavn{
        color: #2C6C8B;
        font-size: 1.5em;
    }

    .volver{
        position: absolute;
        margin-top: 5vh;
        margin-left: 88vw;
        padding: 0% 2% 0% 2% ;
        background-color: #021620;
        border-radius: 50px;
        border: 2px solid white;
        cursor: pointer;
        user-select: none;
    }

    .volver:hover{
        transform: scale(1.25);
        transition: all .3s ease-in-out;
    }

    .volver a{
        text-decoration: none;
    }

    .volver h2{
        color: white;
    }

    #v{
        color: #2C6C8B;
        font-size: 1.2em;
    }

    .arriba{
        position: fixed;
        margin-top: 88vh;
        margin-left: 91vw;
        padding: 1% ;
        background-color: #021620;
        border-radius: 50px;
        border: 2px solid white;
        cursor: pointer;
        z-index: 4;
    }

    .arriba i{
        color: white;
        font-size: 2em;
    }

    /* Flecha animada */

    .arrow{
    position: absolute;
    top: 79%;
    left: 50%;
    transform: translate(-50%,-50%);
    user-select: none;
    }
    .arrow span{
    display: block;
    width: 20px;
    height: 20px;
    border-bottom: 5px solid silver;
    border-right: 5px solid #2C6C8B;
    transform: rotate(45deg);
    margin: -10px;
    animation: animate 2s infinite;
    }
    .arrow span:nth-child(2){
    animation-delay: -0.2s;
    }
    .arrow span:nth-child(3){
    animation-delay: -0.4s;
    }
    @keyframes animate {
    0%{
        opacity: 0;
        transform: rotate(45deg) translate(-20px,-20px);
    }
    50%{
        opacity: 1;
    }
    100%{
        opacity: 0;
        transform: rotate(45deg) translate(20px,20px);
    }
    }

    .desarrollo{
    margin-top: -8.5vh;
    position: relative;
    width: 100%;
    height: 100vh;
    background-color: #c9c9c9;
    box-shadow: inset 0px 00px 400px 75px rgba(0,0,0,0.9);

    }

    .quehacemos{
    position: relative;
    top: 10vh;
    font-size: 4em;
    color: white;
    letter-spacing:1.5vh;
    color: black;
    }

    #hacemos{
    color: #2C6C8B;
    }

    .info2{
    margin-top: 12vh;
    margin-left: 18.5vw;
    font-size: 1.4em;
    color: black;
    letter-spacing: 0.2vh;
    width: 60%;

    }

    .tarjetas{
    margin: auto;
    margin-top: 3vh;
    width: 75%;
    height: 52vh;
    text-align: center;

    }

    .tarjeta1{
    display: inline-block;
    position: relative;
    margin-top: 3vh;
    margin-right: 5vh;
    width: 22%;
    height: 46vh;
    background-image: url('Imagenes/musica.jpg');
    background-size: 100% 100%;
    color: white;
    border: 10px solid #222;

    }

    .negro2{
    position: absolute;
    background-color: #222;
    opacity: 0.8;
    width: 100%;
    height: 100%;
    }

    .tarjeta2{
    display: inline-block;
    position: relative;
    margin-top: 3vh;
    margin-right: 5vh;
    width: 22%;
    height: 46vh;
    background-image: url('Imagenes/cinema.jpg');
    background-size: 100% 100%;
    color: white;
    border: 10px solid #222;
    }

    .tarjeta3{
    display: inline-block;
    position: relative;
    margin-top: 3vh;
    margin-right: 5vh;
    width: 22%;
    height: 46vh;
    background-image: url('Imagenes/trailersnippet.jpg');
    color: white;
    border: 10px solid #222;
    }

    .encabezado{
    position: absolute;
    margin: 0;
    margin-top: 5vh;
    z-index: 3;
    }

    .encabezado i{
    position: absolute;
    font-size: 8em;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    }

    .encabezado h2{
    position: absolute;
    font-size: 2em;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    margin-top: 15vh;   
    }

    .encabezado h3{
    position: absolute;
    font-size: 1.5em;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    margin-top: 16.5vh;   
    }

    .encabezado p{
    margin-top: 24vh;
    }

    .creadores{
    margin: 0;
    margin-top: -8.39vh;
    position: relative;
    width: 100%;
    height: 100vh;
    background-image: url('Imagenes/sobrenosotros2.jpg');
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    background-size: 100% 100%;
    }

    .creadorestexto{
    position: relative;
    top: 10vh;
    font-size: 4em;
    color: white;
    letter-spacing: 1.5vh;
    color: white;
    }

    .perfilCreador{
    margin-top: 10vh;
    position: relative;
    display: inline-block;
    width: 400px;
    padding: 50px;
    border: 2px solid white;
    border-radius: 10px;
    margin-right: 3vw;
    margin-left: 3vw;
    letter-spacing: 0.5vh;
    background-color:rgba(0, 0, 0, 0.9)

    }

    .perfilCreador h3{
    color: white;
    text-align: center;
    font-size: 1.5em;
    }

    .perfilCreador h4{
    color: white;
    font-size: 1.2em;
    }

    .redessociales{
    display: inline-block;
    position: relative;  
    margin-top: 2vh;
    }

    .redessociales i{
    font-family: fontAwesome;
    font-size: 2.5em;
    margin-left: 3vh;
    margin-right: 3vh;
    color: white;
    font-style: normal;
    }

    .redessociales a{
    text-decoration: none;
    }

    #twitter{
    color: #00acee;
    }

    #instagram{
    color: #e1306c;
    }

    #facebook{
    color: #3b5998;
    }

    #github{
    color: #fafafa;
    }

    .contacto{
    position: relative;
    margin-top: 7vh;
    font-size: 1.7em;
    color: white;
    }

    .contacto h2{
    letter-spacing: 1vh;

    }

    .contacto h4{
    letter-spacing: 0.2vh;
    }

    .opinion{
    position: relative;
    width: 100%;
    height: 100vh;
    background-color: #c9c9c9;
    box-shadow: inset 0px 00px 400px 75px rgba(0,0,0,0.9);
    }

    .box{
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 600px;
    padding: 50px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.5);
    border-radius: 10px;
    }

    .box h2{
    margin: 0 0 30px;
    padding: 0;
    color: white;
    font-size: 2.5em;
    text-align: center;

    }

    .box .inputBox, .inputBox2{
    position: relative;
    }

    .box .inputBox input, .inputBox2 input{
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: white;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    background: transparent;
    }

    .box .inputBox label, .inputBox2 label{
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: white;
    pointer-events: none;
    transition: .5s;
    }

    .box .inputBox textarea{
    margin-top: 3vh;
    width: 100%;
    height: 15vh;
    padding: 10px 0;
    font-size: 16px;
    font-family: arial;
    color: white;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    background: transparent;
    resize: none;

    }

    .box .inputBox  input:focus ~ label,
    .box .inputBox  input:valid ~ label{
    top: -18px;
    left: 0;
    color: #03a9f4;
    font-size: 12px;
    }

    .box input[type="submit"]{
    background: transparent;
    margin-top: 8vh;
    border: none;
    outline: none;
    color: white;
    font-size: 1.2em;
    background: #03a9f4;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    }

    #valoracion{
    position: absolute;
    padding-top: 13px;
    color: white;
    font-size: 1.2em;
    }

    .rating{
    position: absolute;
    top: 76%;
    left: 50%;
    transform: translate(-50%, -50%) rotateY(180deg);
    display: flex;
    }

    .rating input{
    display: none;
    }

    .rating label{
    display: block;
    cursor: pointer;
    width: 40px;
    }

    .rating label:before{
    content: '\f005';
    font-family: fontAwesome;
    position: relative;
    display: block;
    font-size: 40px;
    color: #101010;

    }

    .rating label:after{
    content: '\f005';
    font-family: fontAwesome;
    position: absolute;
    display: block;
    font-size: 40px;
    color: #1f9cff;
    top: 0;
    opacity: 0;
    transition: .5s;
    text-shadow: 0 5px 5px rgba(0, 0, 0, .5);
    }

    .rating label:hover:after,
    .rating label:hover ~ label:after,
    .rating input:checked ~ label:after{
    opacity: 1;
    }

    .inicio{
    position: absolute;
    margin-top: 85vh;
    margin-left: 46vw;
    padding: 0% 2% 0% 2% ;
    background-color: #021620;
    border-radius: 50px;
    border: 2px solid white;
    cursor: pointer;
    user-select: none;
    }

    .inicio:hover{
    transform: scale(1.25);
    transition: all .3s ease-in-out;
    }

    .inicio a{
    text-decoration: none;
    }

    .inicio h2{
    color: white;
    }

    #i{
    color: #2C6C8B;
    font-size: 1.2em;
    }

    ::-webkit-scrollbar{
    width: 12px;
    }

    ::-webkit-scrollbar-thumb{
    background-color: #2C6C8B; 
    }

    ::-webkit-scrollbar-track{
    background-color: #222; 
    }
</style>

<script>

    function goBack() {
        window.history.back();
    }

</script>

<body>

    <div class="header" id="header">
        <div class="negro">
            <div class="logo">
                <img src="Imagenes/logo.png" width="12%">
            </div>
            <div class="volver" onclick="goBack()">
                <h2><span id="v">V</span>olver</h2>
            </div>
            <a href="#header">
                <div class="arriba">
                    <i class="material-icons">
                        keyboard_arrow_up
                    </i>
                </div>
            </a>
            <div class="sobrenosotros">
                <center>
                    <h2>Sobre <span id="nosotros">HEAVN</span></h2>
                </center>
            </div>
            <div class="info">
                <center>
                    <p> <span id="azul">S</span>omos dos estudiantes del instituto Plaiaundi que estamos terminando<br> el curso de Desarrollo de Aplicaciones Web, y mientras estamos de practicas,<br> como proyecto final hemos realizado este trabajo, <span id="heavn">HEAVN</span>.</p>
                </center>
            </div>
            <div class="arrow">
                <a href="#desarrollo">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
        </div>
    </div>

    <div class="desarrollo" id="desarrollo">
        <div class="logo">
            <img src="Imagenes/logo2.png" width="18%">
        </div>
        <div class="quehacemos">
            <center>
                <h2>Qué <span id="hacemos">Hacemos</span></h2>
            </center>
        </div>
        <div class="info2">
            <center>
                <p><span id="azul2"> HEAVN </span> es un servicio de venta de entradas, tanto para conciertos como para cine. Se le recomendará igualmente al usuario canciones, álbumes, conciertos próximos, películas y/o series, que dependerá de sus gustos. Tendrá la opción de elegir entre los diferentes géneros tanto de cine como de música, y podrá ver diferentes informaciones sobre cada apartado.
                </p>
            </center>
        </div>
        <div class="tarjetas">
            <div class="tarjeta1">
                <div class="encabezado">
                    <i class="material-icons">
                        music_note
                    </i>
                    <h2><span id="azul2">M</span>USICA</h2>
                    <p>Entérate de todas las novedades sobre tus artistas favoritos. No te quedes sin entradas, no lo dudes más, ¡cómpralas! </p>
                </div>
                <div class="negro2"></div>
            </div>
            <div class="tarjeta2">
                <div class="encabezado">
                    <i class="material-icons">
                        movie
                    </i>
                    <h2><span id="azul2">C</span>INE</h2>
                    <p>Todos los estrenos de tus películas y series preferidas ya disponibles en nuestra página. Reserva la mejor butaca y disfruta de los nuevos lanzamientos.</p>
                </div>
                <div class="negro2"></div>
            </div>
            <div class="tarjeta3">
                <div class="encabezado">
                    <i class="material-icons">
                        play_circle_outline
                    </i>
                    <h3><span id="azul2">T</span>RAILER<span id="azul2">-S</span>NIPPETS</h3>  
                    <p>No te pierdas los mejores avances. Visualiza los trailers y escucha los snippets totalmente gratis. ¡Sé el primero en enterarte de todas las novedades!</p>
                </div>
                <div class="negro2"></div>
            </div>   
        </div>
    </div>

    <div class="creadores">
        <div class="negro">
            <div class="logo">
                <img src="Imagenes/logo.png" width="12%">
            </div>
            <center>
            <div class="creadorestexto">
                <h2>Creadores</h2>
            </div>
            <div class="perfilCreador">
                <h3>Mikel Apezetxea</h3>
                <h4>mikelapezetxea2@gmail.com</h4>
                <div class="redessociales">
                    <a href=""><i id="twitter" class="fab fa-twitter"></i></a>
                    <a href=""><i id="instagram" class="fab fa-instagram"></i></a>
                    <a href=""><i id="facebook" class="fab fa-facebook-f"></i></a>
                    <a href=""><i id="github" class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="perfilCreador">
                <h3>Mélanie Miguel</h3>
                <h4>melaniemiguel16@hotmail.com</h4>
                <div class="redessociales">
                    <a href=""><i id="twitter" class="fab fa-twitter"></i></a>
                    <a href=""><i id="instagram" class="fab fa-instagram"></i></a>
                    <a href=""><i id="facebook" class="fab fa-facebook-f"></i></a>
                    <a href=""><i id="github" class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="contacto">
                <h2>Contactanos</h2>
                <h4>heavn@gmail.com</h4>
            </div>
            </center>
        </div>
    </div>

    <div class="opinion">
        <div class="logo">
            <img src="Imagenes/logo2.png" width="18%">
        </div>
        <div class="box">
            <h2>Danos tu Opinión</h2>
            <form method="POST" action="{{ route('instertarOpinion') }}">
                @csrf
                <div class="inputBox">

                    @if (Auth::check())
                        <input type="text" name="nombreUsuario"  value="{{Auth::user()->nombreApellido}}">
                        <label>Nombre</label>
                    @else
                        <input type="text" name="nombreUsuario" placeholder="Registrate para dar tu opinion" disabled>
                        <label style="margin-top: -3vh;">Nombre</label>
                    @endif
                    
                </div>
                <div class="inputBox">
                    @if (Auth::check())
                        <input type="text" name="email" value="{{Auth::user()->email}}">
                        <label>Email</label>
                    @else
                        <input type="text" name="email" placeholder="Registrate para dar tu opinion" disabled>
                        <label style="margin-top: -3vh;">Email</label>
                    @endif  
                </div>
                <div class="inputBox">
                    @if (Auth::check())
                        <textarea type="text" name="opinion" ></textarea>   
                    @else
                        <textarea type="text" name="opinion" placeholder="Registrate para dar tu opinion." disabled></textarea>
                    @endif
                    <label>Tu Opinión</label>
                </div>
                <label id="valoracion">Valoración</label>
                <div class="rating">
                    @if (Auth::check())
                        <input type="radio" name="valoracion" id="star1" value="5" ><label for="star1"></label>
                        <input type="radio" name="valoracion" id="star2" value="4" ><label for="star2"></label>
                        <input type="radio" name="valoracion" id="star3" value="3" ><label for="star3"></label>
                        <input type="radio" name="valoracion" id="star4" value="2" ><label for="star4"></label>
                        <input type="radio" name="valoracion" id="star5" value="1" ><label for="star5"></label>
                    @else
                        <input type="radio" name="valoracion" id="star1" value="5" disabled><label for="star1" ></label>
                        <input type="radio" name="valoracion" id="star2" value="4" disabled><label for="star2" ></label>
                        <input type="radio" name="valoracion" id="star3" value="3" disabled><label for="star3" ></label>
                        <input type="radio" name="valoracion" id="star4" value="2" disabled><label for="star4" ></label>
                        <input type="radio" name="valoracion" id="star5" value="1" disabled><label for="star5" ></label>
                    @endif
                </div>

                @if(Auth::check())
                    <input type="submit" name="" value="Enviar">
                @else
                    <input type="submit" name="" value="Enviar" disabled>
                @endif

            </form>
        </div>
        <center>
            <a href="/home">
                <div class="inicio" onclick="goBack()">
                    <h2><span id="i">I</span>nicio</h2>
                </div>
            </a>
        </center>
    </div>
</body>
</html>