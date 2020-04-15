<template>

<table class="table"  id="tablaEscuchadasRec">
  <thead>
    <tr>
      <th scope="col">Artista</th>
      <th scope="col">Titulo</th>
      <th scope="col">Duracion</th>
      <th scope="col">Genero</th>
    </tr>
  </thead>
  <tbody>

      <tr v-for= "escuchadasRec  in escuchadasRec" :key="escuchadasRec.id">

        <td id="celda">{{escuchadasRec.artista}}</td>
        <td id="celda">{{escuchadasRec.titulo}}</td>
        <td  id="celda">{{escuchadasRec.duracion}}</td>
        <td  id="celda">{{escuchadasRec.genero}}</td>

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
              
                escuchadasRec: []
            }
        },

        

        methods:{
            mytable(){
                 $(function() {
                   $('#tablaEscuchadasRec').DataTable( {
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
                
                var url = "escuchadasRecientemente";
                axios.get(url).then(response => { 
                this.escuchadasRec = response.data
                this.mytable();
                });
            },  
        }
        
    }

</script>