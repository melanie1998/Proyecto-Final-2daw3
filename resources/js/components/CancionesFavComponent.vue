<template>

<table class="table"  id="tablacancionesFav">
  <thead>
    <tr>
      <th scope="col">Artista</th>
      <th scope="col">Titulo</th>
      <th scope="col">Duracion</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>

      <tr v-for= "cancionesFav  in cancionesFav" :key="cancionesFav.id">

      <td id="celda">{{cancionesFav.artista}}</td>
        <td id="celda">{{cancionesFav.titulo}}</td>
        <td  id="celda">{{cancionesFav.duracion}}</td>
        <td  id="celda">{{cancionesFav.genero}}</td>

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
              
                cancionesFav: []
                
            }
        },

        

        methods:{
            mytable(){
                 $(function() {
                   $('#tablacancionesFav').DataTable( {
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
                
                var url = "cancionesFav";
                axios.get(url).then(response => { 
                this.cancionesFav = response.data
                this.mytable();
                
             
                });
            },  

      
        }
        
    }

</script>