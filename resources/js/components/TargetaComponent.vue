<template>
    <div class="row">
        <Carga v-show="loading" width="20px" ></Carga>
        <div class="col-lg-3" v-for="producto in productos">
              <br>
            <div class="card" style="width: 18rem;">
              <img style="height: 150px; width: 150px;margin: 20px" src="images/" class="card-img-top rounded-circle mx-auto d-block" >
              <div class="card-body">
                <h5 class="card-title">{{producto.name}}</h5>
                <p class="card-text"><p>{{producto.descripcion}}</p>
                <a href="/productos/" class="btn btn-primary">ver mas</a>

              </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                productos: [],
                loading: true
            }
        },
        mounted() {
            axios
            .get('http://localhost:8000/productos')
            .then((response) => {
                this.productos = response.data
                this.loading = false
            })
        }
    }
</script>
