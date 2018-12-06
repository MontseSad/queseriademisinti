<template>
    <tr>
        <td><a href="#">{{ producto.id }}</a></td>
        <td>{{ producto.nombre }}</td>
        <td>${{ producto.coste_in }}</td>
        <td>${{ producto.coste_out }}</td>
        <td><button class="btn btn-warning" v-on:click="onClickEdit()">Editar</button></td>
        <td><button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button></td>
        <!--td><span class="label label-success">DISPONIBLE</span></td-->
    </tr>
</template>

<script>
    export default {
        props: ['producto'],
        data() {
            return {
                editMode: false
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickDelete() {
                this.$emit('delete');
            },
            onClickEdit() {
                //this.editMode = true;
                this.$emit('edit');
                $("[data-toggle=modal]").trigger({ type: "click"});
            }
        }
    }
</script>
