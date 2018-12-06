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
                        <h2 class="section-title"><i class="fa fa-info-circle"></i> Detalles de producto</h2>
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
                                                        <td><label><b> Nombre del producto: </b><label></td>
                                                        <span class="text-right"> {{ $quesero->name }}<span></td>
                                                    </div>
                                                    <div class="form-group">
                                                        <td><label><b>Coste de producción: </b><label></td>
                                                        <td><span>  {{ $quesero->birth }}<span></td>
                                                    </div>
                                                    <div class="form-group">
                                                        <td><label><b>Coste de venta: </b><label></td>
                                                        <td><span> {{ $quesero->birth }}<span></td>
                                                    </div>
                                                    <div class="form-group">
                                                        <td><label><b>Receta: </b><label></td>
                                                        <td><span> {{ $quesero->birth }}<span></td>
                                                    </div>
                                                    <div class="form-group">
                                                        <td><label><b>Descripción: </b><label></td>
                                                        <td><span> {{ $quesero->birth }}<span></td>
                                                    </div>
                                                    <a href="{{ route('queseros.edit', $quesero->id) }}" class="btn btn-warning"><i class="fa fa-check-circle"></i> Editar</a>
                                            </div>
                                            <form action="{{ route('queseros.destroy', $quesero->id) }}" method="POST" onsubmit="return confirm('Are you sure abour that?');">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <div class="right">
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-check-circle"></i> Eliminar</button>
                                                </div>
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