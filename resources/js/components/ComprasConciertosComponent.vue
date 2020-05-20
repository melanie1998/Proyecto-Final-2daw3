<template>
<table class="table"  id="tablaComprasConciertos">
  <thead>
    <tr>
      <th scope="col">Usuario</th>
      <th scope="col">Artista</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Lugar</th>
      <th scope="col">Grada/Pista</th>
      <th scope="col">Cantidad Entradas</th>
      <th scope="col">Precio</th>
      <th scope="col">idEntrada</th>
    </tr>
  </thead>
  <tbody>
        <tr v-for= "dato  in datos" :key="dato.id">
         <td>{{dato.idUsuario}}</td>
         <td>{{dato.artista}}</td>
         <td>{{dato.fecha}}</td>
         <td>{{dato.hora}}</td>
         <td>{{dato.lugar}}</td>
         <td>{{dato.gradaPista}}</td>
         <td>{{dato.cantEntradas}}</td>
         <td>{{dato.precio}}</td>
         <td>{{dato.idEntrada}}</td>

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
                   $('#tablaComprasConciertos').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
                           
                        },
                         "lengthMenu": [ 6 ],
                    } );
                 });  
            },
           
            getData(){
                
                var url = "comprasConciertos";
                axios.get(url).then(response => { 
                this.datos = response.data
                this.mytable();
                });
            }
          
        }
        
    }

</script>
