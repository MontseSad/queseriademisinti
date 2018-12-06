@extends('layouts.quesero_app')

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
                        <h2 class="section-title"><i class="fa fa-shopping-basket"></i> Producción anterior</h2>
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
                                <h3 class="heading"><i class="fa fa-square"></i> Today</h3>
                                <ul class="list-unstyled list-justify large-number">
                                    <li class="clearfix">Produccion <span>115</span></li>
                                    <li class="clearfix">Leche (litros) <span>47</span></li>
                                </ul>
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
@endsection
