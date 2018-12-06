<template>
    <div>
        <modal-component @new="nuevoProducto"></modal-component>
        <table class="table table-striped no-margin">
            <thead>
                <tr>
                    <th>Order No.</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Date &amp; Time</th>
                    <th>Options</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr is="producto-component" 
                    v-for="(producto, index) in productos"
                    :key="producto.id=index"
                    :producto="producto"
                    @delete="delProducto(index)"
                    @edit="editProducto(producto, index)">
                    </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                productos: [{
                    id: 1,
                    nombre: 'papatoro',
                    coste_in: '50',
                    coste_out: '140',
                    receta: '',
                    descripcion: ''
                }]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            nuevoProducto(producto) {
                this.productos.push(producto);
            },
            delProducto(index) {
                this.productos.splice(index, 1)
            },editProducto(producto, index) {
                //aqui debería mandar producto e index al modal
                console.log(producto.nombre);
            }
        }
    }
</script>