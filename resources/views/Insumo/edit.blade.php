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
                        <h2 class="section-title"><i class="fa fa-plus-circle"></i> Editar datos de insumo</h2>
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
                                            {!! Form::model($insumo, array('route' => array('insumos.update', $insumo->id), 'method' => 'PUT')) !!}
                                                @include('layouts.form_insumo')
                                            {!! Form::close() !!}
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