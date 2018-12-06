@extends('layouts.app')
@section('content')
<div class="container">
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- MAIN CONTENT -->
        <div id="main-content">
            <div class="container-fluid">
                <h1 class="sr-only">Dashboard</h1>
                <div class="section-heading clearfix">
                        <h2 class="section-title"><i class="fa fa-info-circle"></i> Detalles de Insumo</h2>
                        <!--a href="#" class="right">Nuevo producto</a-->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                <!-- PRODUCTOS -->
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel-content">
                                <!--h3 class="heading"><i class="fa fa-square"></i> En existencia para preparar</h3-->
                                <div class="table-responsive">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- ACCORDION -->
                                            <div class="panel-content">
                                                    <div class="form-group">
                                                        {!! Form::label('nombre', 'Nombre del insumo') !!}
                                                        {!! Form::label($insumo->nombre, null, ['class'=> 'form-control', 'required'=>'required'], array('disabled')) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('unidad', 'Unidad') !!}
                                                        {!! Form::label($insumo->unidad, null, ['class'=> 'form-control', 'required'=>'required'], array('disabled')) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('cantidad', 'Cantidad') !!}
                                                        {!! Form::label($insumo->cantidad, null, ['class'=> 'form-control', 'required'=>'required'], array('disabled')) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('precio_u', 'Precio Unitario') !!}
                                                        {!! Form::label($insumo->precio_u, null, ['class'=> 'form-control', 'required'=>'required'], array('disabled')) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('precio_t', 'Precio total') !!}
                                                        {!! Form::label($insumo->precio_t, null, ['class'=> 'form-control', 'required'=>'required'], array('disabled')) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('fecha', 'Fecha de ingreso') !!}
                                                        {!! Form::label($insumo->fecha, null, ['class'=> 'form-control', 'required'=>'required'], array('disabled')) !!}
                                                    </div>
                                                    <div class="form-group">
                                                        {!! Form::label('estado', 'Estado') !!}
                                                        {!! Form::label($insumo->estado, null, ['class'=> 'form-control', 'required'=>'required'], array('disabled')) !!}
                                                    </div>
                                                    <div>
                                                        <a href="{{ route('insumos.edit', $insumo->id) }}" class="btn btn-default btn-lg"><i></i> Editar</a>
                                                        <form id="delete-f" action="{{ route('insumos.destroy', $insumo->id) }}" method="POST" onsubmit="">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <div class="right">
                                                                <button id="btn-del" type="submit" class="btn btn-danger"><i class="fa fa-check-circle"></i> Eliminar</button>
                                                            </div>
                                                        </form>
                                                        <!--input type="hidden" name="_method" value="DELETE"-->
                                                        <!--button style="margin-left: 10px" onclick="showsweet()" type="submit" class="btn btn-danger btn-lg" ><i></i> Eliminar</button-->
                                                        <button style="margin-left: 10px" type="submit" class="btn btn-warning btn-lg"><i></i> Archivar</button>
                                                    </div>
                                                    <script>
                                                        /* por defecto al submit de eliminar */
                                                        $('#btn-del').on('click', function(e){
                                                            /*no se que sea esto pero a poco no se ve bien
                                                            chingon, a parte si lo quitas ya no funciona ;v v;*/
                                                            e.preventDefault();
                                                            /*alert mamador*/
                                                            swal({   
                                                                title: "Are you sure?",
                                                                text: "You will not be able to recover this lorem ipsum!",         type: "warning",   
                                                                showCancelButton: true,   
                                                                confirmButtonColor: "#DD6B55",
                                                                confirmButtonText: "Simón"
                                                                /*sin then no funciona porque saber que 
                                                                puto lenguaje de mierda es este alaverga*/
                                                            }).then( function (result) {
                                                                if(result.value) {
                                                                    $("#delete-f").submit();
                                                                } else
                                                                {
                                                                    console.log("canceled");
                                                                }
                                                            });
                                                        })
                                                        /* al parecer esto no es necesario
                                                        function showsweet() {
                                                            const swalWithBootstrapButtons = swal.mixin({
                                                            confirmButtonClass: 'btn btn-success',
                                                            cancelButtonClass: 'btn btn-danger',
                                                            buttonsStyling: false,
                                                            });
                                                        }*/
                                                    </script>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- SALES SUMMARY -->
                <!-- END SALES SUMMARY -->
            </div>
        </div>
        <!-- END MAIN CONTENT -->
        <div class="clearfix"></div>
        <footer>
            <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All
                Rights Reserved.</p>
        </footer>
    </div>
    <!-- END WRAPPER -->
</div>
@endsection