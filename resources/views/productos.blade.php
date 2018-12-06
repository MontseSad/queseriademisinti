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
                        <h2 class="section-title"><i class="fa fa-shopping-basket"></i> Productos</h2>
                        <!--button type="button" class="btn btn-primary right" data-toggle="modal" data-target="#large-modal">Nuevo producto</button-->
                        <!--modal-component></modal-component-->
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
                                @include('layouts.session_message')
                                <h3 class="heading"><i class="fa fa-square"></i> En existencia para preparar</h3>
                                <div class="table-responsive">
                                        <table class="table table-striped no-margin">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nombre</th>
                                                    <th>Coste</th>
                                                    <th>Precio</th>
                                                    <th>Descripción</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($productos as $producto)
                                                    <tr>
                                                        <td>{{ $producto->id }}</td>
                                                        <td>{{ $producto->nombre }}</td>
                                                        <td>{{ $producto->precio_in }}</td>
                                                        <td>{{ $producto->precio_out }}</td>
                                                        <td>{{ $producto->descripcion }}</td>
                                                        <td> <a href="{{ route('productos.show', $producto->id) }}">Detalles</a> </td>
                                                        <!--td><button type="button" 
                                                            class="btn btn-primary right" 
                                                            data-toggle="modal" 
                                                            data-target="#large-modal"
                                                            data-id="{{ $producto->id }}">Nuevo producto</button></td-->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {!! $productos->render(); !!}
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
@section('javascript')
<script>
    $(function() {
        toastr['info']('Hello, welcome to DiffDash, a unique admin dashboard.');
    });
</script>
@endsection