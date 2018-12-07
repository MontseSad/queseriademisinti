@extends('layouts.app')

@section('content')
<div class="container">
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- MAIN CONTENT -->
        <div id="main-content">
            <div class="container-fluid">
                <h1 class="sr-only">Dashboard</h1>
                <!-- END WEBSITE ANALYTICS -->
                <!-- SALES SUMMARY -->
                <div class="dashboard-section">
                    <div class="section-heading clearfix">
                        <h2 class="section-title"><i class="fa fa-shopping-basket"></i> Resumen de venta</h2>
                        <!--a href="#" class="right">View Sales Reports</a-->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel-content">
                                <h3 class="heading"><i class="fa fa-square"></i> Hoy</h3>
                                <ul class="list-unstyled list-justify large-number">
                                    <li class="clearfix">Ganancias <span>$215</span></li>
                                    <li class="clearfix">Ventas <span>$47</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="panel-content">
                                <h3 class="heading"><i class="fa fa-square"></i> Insumos pendientes para comprar</h3>
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Precio unitario</th>
                                                    <th>Precio total</th>
                                                    <th>Estado</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($insumos as $insumo)
                                                    <tr>
                                                        <td>{{ $insumo->nombre }}</td>
                                                        <td>{{ $insumo->precio_u }}</td>
                                                        <td>{{ $insumo->precio_t }}</td>
                                                        <td>{{ $insumo->estado }}</td>
                                                        <td> <a href="{{ route('insumos.show', $insumo->id) }}">Detalles</a> </td>
                                                        <!--td><button type="button" 
                                                            class="btn btn-primary right" 
                                                            data-toggle="modal" 
                                                            data-target="#large-modal"
                                                            data-id="{{ $insumo->id }}">Nuevo insumo</button></td-->
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        {!! $insumos->render(); !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-content">
                                <h3 class="heading"><i class="fa fa-square"></i> Insumos disponibles </h3>
                                @include('layouts.session_message')
                                <div class="table-responsive">
                                    <table class="table table-striped no-margin">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Precio unitario</th>
                                                <th>Precio total</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($disponibles as $insumo)
                                                    <tr>
                                                        <td>{{ $insumo->nombre }}</td>
                                                        <td>{{ $insumo->precio_u }}</td>
                                                        <td>{{ $insumo->precio_t }}</td>
                                                        <td>{{ $insumo->estado }}</td>
                                                        <td> <a href="{{ route('insumos.show', $insumo->id) }}">Detalles</a> </td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                    </table>
                                    {!! $disponibles->render(); !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<script>
    //swal("No mames!", "Está bien cagado este pedo!", "success");
</script>
@endsection
