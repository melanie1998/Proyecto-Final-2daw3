<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src='jquery.transit.js'></script>

    <title>Slider</title>
</head>
<style>
body{
    background-image: url('Imagenes/backgroundblanco.jpg');
    margin: 0;
    transition: all 1s ease-in-out;
}

.izq{
    position: absolute;
    margin-left: 3%;
    margin-top: 16vh;   
    z-index: 6;
}

.der{
    position: absolute;
    margin-top: 16vh;
    margin-left: 90%;
    z-index: 6;
}

.material-icons{
    font-size: 3em;
    cursor: pointer;
    user-select: none;
}

.slider{
    display:flex;
    margin: auto;
    margin-top: 5vh;
    width: 95%;
    height: 36vh;
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
    font-size: 0.8vw;
    background-color: rgba(255,255, 255, 1);
}

.texto{
    margin: 5% 2% 5% 2%;
}
</style>
<body>
    <div class="slider">
        <div class="izq"><i class="material-icons">
            chevron_left
        </i></div>
        <div class="video1">
            <div class="fondo" style="opacity: 0;">
                <div class="texto">
                    <h2><center>LEAGUE OF LEGENDS</center></h2>
                    Battlerite is a free-to-play team-based action game based on multiplayer online battle arena (MOBA) gameplay developed and published by Stunlock Studios. The game is considered a spiritual successor to Bloodline Champions and is created by the same developers. An early access version of the game was released in September 2016, selling over 440,000 copies within three months.
                </div>
            </div>
            <video id="video1" src="Videos/lol.mp4" autoplay muted loop></video>
        </div>
        <div class="video2">
            <div class="fondo" style="opacity: 0;">
                <div class="texto">
                    <h2><center>MINECRAFT</center></h2>
                    Battlerite is a free-to-play team-based action game based on multiplayer online battle arena (MOBA) gameplay developed and published by Stunlock Studios. The game is considered a spiritual successor to Bloodline Champions and is created by the same developers. An early access version of the game was released in September 2016, selling over 440,000 copies within three months.
                </div>
            </div>
            <video id="video2" src="Videos/minecraft.mp4" autoplay muted loop></video>
        </div>
        <div class="video3">
            <div class="fondo" style="opacity: 0;">
                <div class="texto">
                    <h2><center>BATTLERITE</center></h2>
                    Battlerite is a free-to-play team-based action game based on multiplayer online battle arena (MOBA) gameplay developed and published by Stunlock Studios. The game is considered a spiritual successor to Bloodline Champions and is created by the same developers. An early access version of the game was released in September 2016, selling over 440,000 copies within three months.
                </div>
            </div>
            <video id="video3" src="Videos/prueba.mp4" autoplay muted loop></video>
        </div>
        <div class="video4">
            <div class="fondo" style="opacity: 0;">
                <div class="texto">
                    <h2><center>FORTNITE</center></h2>
                    Battlerite is a free-to-play team-based action game based on multiplayer online battle arena (MOBA) gameplay developed and published by Stunlock Studios. The game is considered a spiritual successor to Bloodline Champions and is created by the same developers. An early access version of the game was released in September 2016, selling over 440,000 copies within three months.
                </div>
            </div>
            <video id="video4" src="Videos/isiwin.mp4" autoplay muted loop></video>
        </div>
        <div class="video5">
            <div class="fondo" style="opacity: 0;">
                <div class="texto">
                    <h2><center>MINECRAFT</center></h2>
                    Battlerite is a free-to-play team-based action game based on multiplayer online battle arena (MOBA) gameplay developed and published by Stunlock Studios. The game is considered a spiritual successor to Bloodline Champions and is created by the same developers. An early access version of the game was released in September 2016, selling over 440,000 copies within three months.
                </div>
            </div>
            <video id="video5" src="Videos/minecraft2.mp4" autoplay muted loop></video>
        </div>
        <div class="der"><i class="material-icons">
            chevron_right
        </i></div>
    </div>
    <script>
        var block=false;
        function cambiarBlock(){
            block=false;
        }
        $(document).ready(function(){
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
                    /*
                    if($(this).css("z-index") == "3"){
                        $(this).children("video").autoplay="true";
                        $(this).children("video").loop="true";
                        $(this).children("video").muted="false";
                    }else{
                        $(this).children("video").autoplay="false";
                        $(this).children("video").loop="false";
                        $(this).children("video").muted="true";
                    }
                    */
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
                    /*
                    if($(this).css("z-index") == "3"){
                        $(this).children("video").autoplay="true";
                        $(this).children("video").loop="true";
                        $(this).children("video").muted="false";
                    }else{
                        $(this).children("video").autoplay="false";
                        $(this).children("video").loop="false";
                        $(this).children("video").muted="true";
                    }
                    */
                }
            });
        });
        </script>
</body>
</html>