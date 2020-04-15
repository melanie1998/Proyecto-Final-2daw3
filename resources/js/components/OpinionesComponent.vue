<template>
<table class="table"  id="tablaUsuarios">
  <thead>
    <tr>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Email</th>
      <th scope="col">Opinion</th>
      <th scope="col">Valoracion</th>
    </tr>
  </thead>
  <tbody>
        <tr v-for= "dato  in datos" :key="dato.id">
         <td>{{ dato.nombreUsuario}}</td>
         <td>{{dato.email}}</td>
         <td>{{dato.opinion}}</td>
         <td>{{dato.valoracion}}</td>

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
                   $('#tablaUsuarios').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
                           
                        },
                         "lengthMenu": [ 10 ],
                    } );
                 });  
            },
           
            getData(){
                
                  var url = "opiniones";
                  axios.get(url).then(response => { 
                this.datos = response.data
                this.mytable();
                });
            }
          
        }
        
    }

</script>
