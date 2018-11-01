<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.meta')
    <title>@yield('title')</title>
    @include('layouts.partials.css')
    @section('unique-css')
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('includes.navigation')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('title')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @yield('panel-title')
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          @yield('content')
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('layouts.partials.js')
    @yield('unique-js')
</body>

</html>
