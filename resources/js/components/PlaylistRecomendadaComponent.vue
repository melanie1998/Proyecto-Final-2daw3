<template>

<table class="table"  id="tablaPlaylist">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col">Artista</th>
      <th scope="col">Titulo</th>
      <th scope="col">Duracion</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>

      <tr v-for= "playlist  in playlist" :key="playlist.id">

        <td :id="`td${playlist.id}`"><audio :id="`audio_play${playlist.id}`" loop><source :src="`Audio/${playlist.titulo}.mp3`" type="audio/mp3" /></audio><img src="Imagenes/playButton.png" :id="`iconoPlay${playlist.id}`" class="iconosPlay"  @click="play(`${playlist.id}`)"></td>
          <td :id="`tdLike${playlist.id}`" >
            <!--Creo una etiqueta inventada para crear el for dentro y pasar los valores-->
            <my-component :id="`mytemplate${playlist.id}`" v-for="cancionesFav in cancionesFav"  v-bind:cancionesFav="cancionesFav" v-bind:key="cancionesFav.id">
              <div :id="`div${playlist.id}`" v-if="cancionesFav.id === playlist.id">
                <img src="Imagenes/heartfull.png" :id="`iconoLike${playlist.id}`" class="iconos" @click="like(`${playlist.id}`)">
              </div>
              <div :id="`div${playlist.id}`" width="3%" v-else="">
                <img  src="Imagenes/like.png" :id="`iconoLikeDos${playlist.id}`" class="iconos" @click="like(`${playlist.id}`)">
              </div>
            </my-component>
            <!--Hacemos una condicion para ver si el array esta vacío-->
              <div v-if="cancionesFav.length === 0" :id="`divDos${playlist.id}`" width="3%" >
                <img  src="Imagenes/like.png" :id="`iconoLikeTres${playlist.id}`" class="iconos" @click="like2(`${playlist.id}`)">
              </div>
           
          </td>

        <td id="celda" >{{playlist.artista}}</td>
        <td id="celda">{{playlist.titulo}}</td>
        <td  id="celda">{{playlist.duracion}}</td>
        <td  id="celda">{{playlist.genero}}</td>

      </tr>
  </tbody>
</table>


</template>
<script>

    import datables from 'datatables'
    export default {
   
        mounted(){
          this.getData();
  
        },

        data(){
            return{
              
                playlist: [],
                cancionesFav: [], 
            }
        },

        

        methods:{
            mytable(){
                 $(function() {
                   $('#tablaPlaylist').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
                           
                        },
                         "lengthMenu": [ 8 ],
                         'columnDefs': [ {
                          'targets': [0,1],
                          'orderable': false, 
                           
                        }]
                                         
                    } );
                 });  
                 
        
            },
           
            getData(){
                
                var url = "playlist";
                axios.get(url).then(response => { 
                this.playlist = response.data
                this.mytable();
                });

              //para pasar la id y que se quede la foto en blanco
                var url = "fotoLikeFull";
                axios.get(url).then(response => { 
                this.cancionesFav = response.data   
                     
                });
            },

          //funcion para hacer play/pause a las canciones
            play: function(id) {
              $(`#td${id}`).each(function(){    
                 $(`#audio_play${id}`).each(function(){   
                  var a = document.getElementById(`audio_play${id}`) 
                  var allAudios = document.getElementsByTagName('audio');
                  if (a.paused) {
                      for(var i = 0; i<allAudios.length; i++){
                        if(allAudios[i] != a.target){
                          allAudios[i].pause();
                          $(`.iconosPlay`).attr("src", "Imagenes/playButton.png");
                        }
                      }
                      a.play();
                      var url = `escuchadaRec/${id}`;
                      axios.get(url).then(response => { 
                      this.escuchadaRec = response.data
                      });
                      $(`#iconoPlay${id}`).attr("src", "Imagenes/pause.png");
                  } else {
                      a.pause();
                      $(`#iconoPlay${id}`).attr("src", "Imagenes/playButton.png");
                  }
                }) 
              })     
            },

          //funcion para pasar pasar los likes de vacio a lleno
            like: function(id) {
              $(`#tdLike${id}`).each(function(){    
                $(`#mytemplate${id}`).each(function(){  
                  $(`#div${id}`).each(function(){  
                      if ($(`#iconoLike${id}`).attr('src') === 'Imagenes/like.png') {
                            $(`#iconoLike${id}`).attr('src', 'Imagenes/heartfull.png');
                            var url = `meterLike/${id}`;
                            axios.get(url).then(response => { 
                            this.meterLike = response.data           
                            });
                      }else if ($(`#iconoLike${id}`).attr('src') === 'Imagenes/heartfull.png'){
                            $(`#iconoLike${id}`).attr('src', 'Imagenes/like.png');
                            var url = `borrarLike/${id}`;
                            axios.get(url).then(response => { 
                            this.borrarLike = response.data           
                            });
                      }else if ($(`#iconoLikeDos${id}`).attr('src') === 'Imagenes/like.png'){
                            $(`#iconoLikeDos${id}`).attr('src', 'Imagenes/heartfull.png');
                              var url = `meterLike/${id}`;
                              axios.get(url).then(response => { 
                              this.meterLike = response.data           
                              });
                                  
                      } else {
                            $(`#iconoLikeDos${id}`).attr('src', 'Imagenes/like.png');
                            var url = `borrarLike/${id}`;
                            axios.get(url).then(response => { 
                            this.borrarLike = response.data           
                            });
                      }
                  })
                })
              })
            },

          //funcion para pasar los corazones de vacio a lleno en caso de array vacio
            like2: function(id) {
              $(`#tdLike${id}`).each(function(){    
                $(`#divDos${id}`).each(function(){  
                     if ($(`#iconoLikeTres${id}`).attr('src') === 'Imagenes/like.png') {
                          $(`#iconoLikeTres${id}`).attr('src', 'Imagenes/heartfull.png');
                          var url = `meterLike/${id}`;
                          axios.get(url).then(response => { 
                          this.meterLike = response.data           
                          });
                      }else {
                          $(`#iconoLikeTres${id}`).attr('src', 'Imagenes/like.png');
                          var url = `borrarLike/${id}`;
                          axios.get(url).then(response => { 
                          this.borrarLike = response.data           
                          });
                      }
                })
              })
            },
        }
        
    }

</script>