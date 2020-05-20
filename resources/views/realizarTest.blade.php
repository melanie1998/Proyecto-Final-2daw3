<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="Imagenes/logo2.jpg" type="image/jpg" />

    <title>Test</title>
</head>
<style>

    body{
        margin: 0;
        background: #272727;
        font-family: 'Arial';
        background-image: url('Imagenes/logo2.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: 70%;
    }

    .fondo{
        width: 100%;
        height: 100vh;
        background-color: rgb(39, 39, 39, 0.90);
        box-shadow: inset 0px 0px 400px 6px rgba(0,0,0,0.75);
        display: flex;
        justify-content: center;
    }


    /* PREGUNTA 1 */
    .pregunta1{
        display: block;
        position: absolute;
        margin-left: -2vw;
        height: 100vh;
        width: 100%;
    }

    .pregunta1 h2{
        margin-top: 8vh;
        margin-left: 2vw;
        font-size: 3em;
        color: white;
    }

    .genero{
        display: inline-block;
        position: relative;
        margin-top: 3vh;
        margin-left: 5vw;
        margin-bottom: 4vh;
        width: 25%;
        height: 28vh;
        color: white;
        border: 5px solid #c9c9c9;   
    }

    .genero:hover{
        border: 5px solid green;   

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

    #documental{
        background-image: url('Imagenes/documental.jpg');
        background-size: 100% 100%;
    } 

    #cienciaficcion{
        background-image: url('Imagenes/cienciaficcion.jpg');
        background-size: 100% 100%;
    }

    #comedia{
        background-image: url('Imagenes/comedia.jpg');
        background-size: 100% 100%;
    }

    #miedo{
        background-image: url('Imagenes/miedo.jpg');
        background-size: 100% 100%;
    }
    
    #drama{
        background-image: url('Imagenes/drama.jpg');
        background-size: 100% 100%;
        }

    #suspense{
        background-image: url('Imagenes/suspense.jpg');
        background-size: 100% 100%;
    }
    
    /* PREGUNTA 2 */

    .pregunta2{
        display: block;
        position: absolute;
        height: 100vh;
        margin-top: 100vh;
        width: 60%;
        pointer-events:none;
        background-color: #222; 
        opacity: 0.2;
    }

    .pregunta2 h2{
        margin-top: 8vh;
        font-size: 3em;
        color: white;
    }

    .pregunta2 a{
        text-decoration: none;
        color: white;   
    }

    .pelicula{
        position: relative;
        margin-top: 1vh;
        margin-bottom: 1vh;
        width: 52%;
        height: 8vh;
        background-color: rgb(20,20,20,0.8);
        border: 5px solid silver;
        display: inline-block;
        justify-content: center;
        text-align: center;
    }

    .pelicula h4{
        font-size: 1.2em;
        position: absolute;
        top: 3vh;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    /* PREGUNTA 3 */
    .pregunta3{
        display: block;
        position: absolute;
        height: 100vh;
        margin-top: 200vh;
        width: 60%;
        pointer-events:none;
        background-color: #222; 
        opacity: 0.2;
    }

    .pregunta3 h2{
        margin-top: 8vh;
        font-size: 3em;
        color: white;
    }

    .pregunta3 a{
        text-decoration: none;
        color: white;   
    }

    .serie{
        position: relative;
        margin-top: 1vh;
        margin-bottom: 1vh;
        width: 52%;
        height: 8vh;
        background-color: rgb(20,20,20,0.8);
        border: 5px solid silver;
        display: inline-block;
        justify-content: center;
        text-align: center;
    }

    .serie h4{
        font-size: 1.2em;
        position: absolute;
        top: 3vh;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    /* PREGUNTA 4 */
    .pregunta4{
        display: block;
        position: absolute;
        margin-left: -2vw;
        margin-top: 300vh;
        height: 100vh;
        width: 70%;
        pointer-events:none;
        background-color: #222; 
        opacity: 0.2;
    }

    .pregunta4 h2{
        margin-top: 8vh;
        margin-left: 2vw;
        font-size: 3em;
        color: white;
    }

    .genero{
        display: inline-block;
        position: relative;
        margin-top: 3vh;
        margin-left: 5vw;
        margin-bottom: 4vh;
        width: 25%;
        height: 28vh;
        color: white;
        border: 5px solid #c9c9c9;   
    }

    .genero:hover{
        border: 5px solid green;   

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

    /*PREGUNTA 5*/
    .pregunta5{
        display: block;
        position: absolute;
        margin-top: 400vh;
        height: 100vh;
        width: 60%;
        pointer-events:none;
        background-color: #222; 
        opacity: 0.2;
    }

    .pregunta5 h2{
        margin-top: 8vh;
        font-size: 3em;
        color: white;
    }

    .pregunta5 a{
        text-decoration: none;
        color: white;   
    }

    .cancion{
        position: relative;
        margin-top: 1vh;
        margin-bottom: 1vh;
        width: 52%;
        height: 8vh;
        background-color: rgb(20,20,20,0.8);
        border: 5px solid silver;
        display: inline-block;
        justify-content: center;
        text-align: center;
    }

    .cancion h4{
        font-size: 1.2em;
        position: absolute;
        top: 3vh;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    /*PREGUNTA 6*/
    .pregunta6{
        display: block;
        position: absolute;
        margin-top: 500vh;
        height: 100vh;
        width: 60%;
        pointer-events:none;
        background-color: #222; 
        opacity: 0.2;
    }

    .pregunta6 h2{
        margin-top: 8vh;
        font-size: 3em;
        color: white;
    }

    .pregunta6 a{
        text-decoration: none;
        color: white;   
    }

    .artista{
        position: relative;
        margin-top: 1vh;
        margin-bottom: 1vh;
        width: 52%;
        height: 8vh;
        border: 5px solid silver;
        display: inline-block;
        justify-content: center;
        text-align: center;
    }

    .artista h4{
        font-size: 1.2em;
        position: absolute;
        top: 3vh;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    /* COLORES */
    #color1{
        background-color: rgb(255, 183, 183, 0.40)
    }

    #color1:hover{
        border: 5px solid rgb(255, 183, 183, 1)
    }

    #color2{
        background-color: rgb(118, 215, 196, 0.40)
    }

    #color2:hover{
        border: 5px solid rgb(118, 215, 196, 1)
    }

    #color3{
        background-color: rgb(249, 231, 159, 0.40)
    }

    #color3:hover{
        border: 5px solid rgb(249, 231, 159, 1)
    }

    #color4{
        background-color: rgb(240, 178, 122, 0.40)
    }

    #color4:hover{
        border: 5px solid rgb(240, 178, 122, 1)
    }

    #color5{
        background-color: rgb(174, 214, 241, 0.40)
    }

    #color5:hover{
        border: 5px solid rgb(174, 214, 241, 1)
    }

    #color6{
        background-color: rgb(125, 206, 160, 0.40)
    }

    #color6:hover{
        border: 5px solid rgb(125, 206, 160, 1)
    }
</style>

<body>
    <div class="fondo">
        <div class="pregunta1" id="pregunta1" style="{{ session()->get( 'colorGris' ) }}{{ session()->get( 'colorGris2' ) }}{{ session()->get( 'colorGris3' ) }}{{ session()->get( 'colorGris4' ) }}{{ session()->get( 'colorGris5' ) }}{{ session()->get( 'disabled1' ) }}{{ session()->get( 'disabled2' ) }}{{ session()->get( 'disabled3' ) }}{{ session()->get( 'disabled4' ) }}{{ session()->get( 'disabled5' ) }}">
            <center> 
                <h2>¿Qué género de cine te gusta más?</h2>
                <a href="pregunta1/Documental">
                    <div class="genero" id="documental">
                        <img src="Imagenes/documentales.png" alt="">
                        <h4>Documental</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta1/Ciencia Ficcion" >
                    <div class="genero" id="cienciaficcion">
                        <img src="Imagenes/cienciaficcion.png" alt="">
                        <h4>Ciencia Ficcion</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta1/Domedia">
                    <div class="genero" id="comedia">
                        <img src="Imagenes/comedia.png" alt="">
                        <h4>Comedia</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta1/Terror" >
                    <div class="genero" id="miedo">
                        <img src="Imagenes/miedo.png" alt="">
                        <h4>Miedo</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta1/Drama" >
                    <div class="genero" id="drama">
                        <img src="Imagenes/drama.png" alt="">
                        <h4>Drama</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta1/Suspense">
                    <div class="genero" id="suspense">
                        <img src="Imagenes/suspense.png" alt="">
                        <h4>Suspense</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
            </center>
        </div>

        <div class="pregunta2" id="pregunta2"  style="{{ session()->get( 'color' ) }}{{ session()->get( 'enabled1' ) }}">
            <center> 
                <h2>¿Que película elegirias?</h2>
                <a href="pregunta2/Harry Potter y las Reliquias de la Muerte 1">
                    <div class="pelicula" id="color1">
                        <h4>Harry Potter y Las Reliquias de la Muerte: Parte I</h4>
                    </div>
                </a>
                <a href="pregunta2/El Sexto Sentido" >
                    <div class="pelicula" id="color2">
                        <h4>El Sexto Sentido</h4>
                    </div>
                </a>
                <a href="pregunta2/Annabelle Vuelve a Casa" >
                    <div class="pelicula" id="color3">
                        <h4>Annabelle</h4>
                    </div>
                </a>
                <a href="pregunta2/Star Wars Episodio IX - El ascenso de Skywalker" >
                    <div class="pelicula" id="color4">
                        <h4>Star Wars</h4>
                    </div>
                </a>
                <a href="pregunta2/Joker"   >
                    <div class="pelicula" id="color5">
                        <h4>Joker</h4>
                    </div>
                </a>
                <a href="pregunta2/Shrek"  >
                    <div class="pelicula" id="color6">
                        <h4>Shrek</h4>
                    </div>
                </a>
            </center>
        </div>

        <div class="pregunta3" id="pregunta3"  style="{{ session()->get( 'color2' ) }}{{ session()->get( 'enabled2' ) }}">
            <center> 
                <h2>¿Que serie elegirias?</h2>     
                <a href="pregunta3/Prision Break" >
                    <div class="serie" id="color3">
                        <h4>Prison Break</h4>
                    </div>
                </a>
                <a href="pregunta3/Los 100" >
                    <div class="serie" id="color6">
                        <h4>Los 100</h4>
                    </div>
                </a>
                <a href="pregunta3/Vis a vis" >
                    <div class="serie" id="color2">
                        <h4>Vis a vis</h4>
                    </div>
                </a>
                <a href="pregunta3/Sex Education" >
                    <div class="serie" id="color5">
                        <h4>Sex Education</h4>
                    </div>
                </a>
                <a href="pregunta3/A los gatos ni tocarlos Un asesino en internet">
                    <div class="serie" id="color1">
                        <h4>A los gatos ni tocarlos: Un asesino en internet</h4>
                    </div>
                </a>
                <a href="pregunta3/Big bang theory" >
                    <div class="serie" id="color4">
                        <h4>Big bang theory</h4>
                    </div>
                </a>
            </center>
        </div>
        <div class="pregunta4" id="pregunta4"  style="{{ session()->get( 'color3' ) }}{{ session()->get( 'enabled3' ) }}">
            <center> 
                <h2>¿Qué género de música te gusta más?</h2>          
                <a href="pregunta4/Pop" >
                    <div class="genero" id="pop">
                        <img src="Imagenes/pop.png" alt="">
                        <h4>Pop</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta4/Indie Alternative" >
                    <div class="genero" id="indie">
                        <img src="Imagenes/indie.png" alt="">
                        <h4>Indie</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta4/Trap" >
                    <div class="genero" id="trap">
                        <img src="Imagenes/trap.png" alt="">
                        <h4>Trap</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta4/Electronica">
                    <div class="genero" id="electronica">
                        <img src="Imagenes/electronica.png" alt="">
                        <h4>Electronica</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta4/Latino"  >
                    <div class="genero" id="latino">
                        <img src="Imagenes/latino.png" alt="">
                        <h4>Latino</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
                <a href="pregunta4/Rap" >
                    <div class="genero" id="rap">
                        <img src="Imagenes/raphiphop.png" alt="">
                        <h4>Rap</h4>
                        <div class="negro2"></div>
                    </div>
                </a>
            </center>
        </div>

        <div class="pregunta5" id="pregunta5"  style="{{ session()->get( 'color4' ) }}{{ session()->get( 'enabled4' ) }}">
            <center> 
                <h2>¿Que canción elegirias?</h2>
                <a href="pregunta5/Perfect" >
                    <div class="cancion" id="color4">
                        <h4>Perfect - Ed Sheeran</h4>
                    </div>
                </a>
                <a href="pregunta5/The Scientist" >
                    <div class="cancion" id="color1">
                        <h4>The scientist - Coldplay</h4>
                    </div>
                </a>
                <a href="pregunta5/Cambios"  >
                    <div class="cancion" id="color5">
                        <h4>Cambios - Hard GZ</h4>
                    </div>
                </a>
                <a href="pregunta5/Goteo"  >
                    <div class="cancion" id="color2">
                        <h4>Goteo - Duki</h4>
                    </div>
                </a>
                <a href="pregunta5/Lonely Together"  >
                    <div class="cancion" id="color6">
                        <h4>Lonely Together - Avicii</h4>
                    </div>
                </a>
                <a href="pregunta5/Tusa" >
                    <div class="cancion" id="color3">
                        <h4>Tusa - Karol G</h4>
                    </div>
                </a>
            </center>
        </div>

        <div class="pregunta6" id="pregunta6"  style="{{ session()->get( 'color5' ) }}{{ session()->get( 'enabled5' ) }}">
            <center> 
                <h2>¿Que artista te representa más?</h2>
                <a href="pregunta6/Ed Sheeran">
                    <div class="artista" id="color6">
                        <h4>Ed Sheeran</h4>
                    </div>
                </a>
                <a href="pregunta6/The 1975">
                    <div class="artista" id="color5" >
                        <h4>The 1975</h4>
                    </div>
                </a>
                <a href="pregunta6/J Balvin">
                    <div class="artista" id="color4"  >
                        <h4>J Balvin</h4>
                    </div>
                </a>
                <a href="pregunta6/Martin Garrix">
                    <div class="artista" id="color3" >
                        <h4>Martin Garrix</h4>
                    </div>
                </a>
                <a href="pregunta6/Bad Bunny">
                    <div class="artista" id="color2"  >
                        <h4>Bad Bunny</h4>
                    </div>
                </a>
                <a href="pregunta6/Hard GZ">
                    <div class="artista" id="color1"  >
                        <h4>Hard GZ</h4>
                    </div>
                </a>
            </center>
        </div>
    </div>  
</body>
</html>