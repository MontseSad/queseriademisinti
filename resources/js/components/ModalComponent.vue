<template>
    <div id="large-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" v-on:load="cargar()">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Agregar nuevo producto</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- ACCORDION -->
                            <div class="panel-content">
                                <h2 class="heading"><i class="fa fa-square"></i>Formulario de producto</h2>
                                <!--form v-on:submit.prevent="nuevoProducto()" ref="addGroupForm" :model="addGroupForm">
                                    <div class="form-group">
                                        <label>Nombre del producto</label>
                                        <input type="text" id="nombre" class="form-control" v-model="addGroupForm.nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Coste de producción</label>
                                        <input type="number" name="coste_in" class="form-control price" v-model="addGroupForm.coste_in" required>
                                        <span class="help-block">999.99</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Coste de venta</label>
                                        <input name="coste_out" type="number" class="form-control price" v-model="addGroupForm.coste_out" required>
								        <span class="help-block">999.99</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Receta</label>
                                        <textarea class="form-control" rows="5" cols="30" v-model="addGroupForm.receta" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Descripción</label>
                                        <textarea class="form-control" rows="2" cols="30" v-model="addGroupForm.descripcion"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Save changes</button>
                                </form-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
               producto: [],
               id
            }
        },
        mounted() {
            $("#large-modal").on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var id = button.data('id');
                const params = id;
                axios.get('productos.show${id}',params).then((response) => {
                    this.producto.data;
                });
                console.log(producto.nombre);
            })
            console.log("hola")
        },
        methods: {
            cargar()
            {
                console.log("Hola");
            }
            /*nuevoProducto() {
                const params = {
                    nombre: this.addGroupForm.nombre,
                    coste_in: this.addGroupForm.coste_in,
                    coste_out: this.addGroupForm.coste_out,
                    receta: this.addGroupForm.receta,
                    descripcion: this.addGroupForm.descripcion
                };
                axios.post('/productos', params).then((response) => console.log(response));
                let producto = {
                    id: 2,
                    nombre:  this.addGroupForm.nombre,
                    coste_in: this.addGroupForm.coste_in,
                    coste_out: this.addGroupForm.coste_out,
                    receta: this.addGroupForm.receta,
                    descripcion: this.addGroupForm.descripcion
                };
                this.$emit('new', producto);
                this.addGroupForm.descripcion = '';
                this.addGroupForm.nombre = '';
                this.addGroupForm.coste_in = '';
                this.addGroupForm.coste_out= '';
                this.addGroupForm.receta = '';
                this.id += 1;
                $("[data-dismiss=modal]").trigger({ type: "click"});
            }*/
        }
    }
</script>