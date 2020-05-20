<template>
<table class="table"  id="tablaComprasCine">
  <thead>
    <tr>
      <th scope="col">Usuario</th>
      <th scope="col">Titulo Pelicula</th>
      <th scope="col">Dia</th>
      <th scope="col">Hora</th>
      <th scope="col">Cantidad Entradas</th>
      <th scope="col">Numero de butaca/s</th>
      <th scope="col">Fila/s</th>
      <th scope="col">Precio</th>
      <th scope="col">idEntrada</th>
    </tr>
  </thead>
  <tbody>
        <tr v-for= "dato  in datos" :key="dato.id">
         <td>{{dato.idUsuario}}</td>
         <td>{{dato.tituloPelicula}}</td>
         <td>{{dato.dia}}</td>
         <td>{{dato.hora}}</td>
         <td>{{dato.numEntradas}}</td>
         <td>{{dato.numButaca}}</td>
         <td>{{dato.fila}}</td>
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
                   $('#tablaComprasCine').DataTable( {
                        "language": {
                            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
                           
                        },
                         "lengthMenu": [ 6 ],
                    } );
                 });  
            },
           
            getData(){
                
                  var url = "comprasCine";
                  axios.get(url).then(response => { 
                this.datos = response.data
                this.mytable();
                });
            }
          
        }
        
    }

</script>
