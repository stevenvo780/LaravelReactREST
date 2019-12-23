<template>
    <div class="modal fade" id="addPedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Añadir pedido</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div id="modalAñadirOros" class="modal-body">
              <div class="container marketing">
                  <div class="row align-items-center">
                    <div class="col-lg-12">
                    <form @submit.prevent="saveProducto">
                          <div class="form-group">
                            <label for="exampleInputEmail1">producto</label>
                            <input type="text" class="form-control" name="producto" v-model="producto" id="descripcionP" >
                          </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                    </div>
                  </div>
              </div>
        </div>
          <div id="agregarOroBoton" class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
    </div>
</div>
</template>

<script>
    export default {
        data(){
            return {
                producto: null,
            }
        },
        methods: {
            saveProducto: function(){
                axios.post('http://localhost:8000/pedido',{
                    producto: this.producto
                })
                .then(function(res){
                    console.log(res);
                    $('#addPedido').modal('hide');
                })
                .catch(function(err){
                    console.log(err);
                });
            }
        }
    }
</script>

<style>

</style>
