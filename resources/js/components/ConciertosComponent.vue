<template>

<table class="table"  id="tablaConciertos">
  <thead>
    <tr>
      <th scope="col">Artista</th>
      <th scope="col">Fecha</th>
      <th scope="col">Lugar</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Fecha venta de entradas</th>
    </tr>
  </thead>
  <tbody>

        <tr v-for= "dato  in datos" :key="dato.id">

         <td>{{dato.nombreArtista}}</td>
         <td>{{dato.fecha}}</td>
         <td>{{dato.lugar}}</td>
         <td>{{dato.ciudad}}</td>
         <td>{{dato.fechaEntradas}}</td>

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
              
                datos: []
            }
        },

        methods:{
            mytable(){
                 $(function() {
                   $('#tablaConciertos').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
                           
                        },
                         "lengthMenu": [ 10 ],
                                         
                    } );
                 });  
            },
           
            getData(){
                
                var url = "conciertos";
                axios.get(url).then(response => { 
                this.datos = response.data
                this.mytable();
                });
            }
          
        }
        
    }

</script>