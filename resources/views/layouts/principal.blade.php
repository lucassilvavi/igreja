<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name='language' content='pt-br'/>
        <meta name='country' content='Brazil'/>
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

        <title>@yield('title')</title>

        <!-- Bootstrap -->
        <link href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{asset('assets/vendor/Font-Awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Data Tables -->
        <link href="{{asset('assets/vendor/datatables/media/css/dataTables.foundation.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css')}}" rel="stylesheet">

        <!-- Toastr - Notificações -->
        <link href="{{asset('assets/vendor/toastr/toastr.min.css')}}" rel="stylesheet">
        <!-- Metis Menu -->
        <link href="{{asset('assets/vendor/metisMenu/dist/metisMenu.min.js')}}" rel="stylesheet">
        <!-- Animate CSS -->
        <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
        <!-- Bootstrap Datepicker -->
        <link href="{{asset('assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet">


        <link href="{{asset('assets/css/buttons.dataTables.min.css')}}" rel="stylesheet">


        <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">

        @section('style')

        @show

    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="nav-header">
                            <!-- Logo do Sistema -->
                            <div class="dropdown profile-element text-center">
                                <span>
                                    <img alt="image" height="60" width="60" src="{{url('assets/img/mds.png')}}"/>
                                </span>
                                <br>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    Sistema Cadastro de Membros IPBS Brasília
                                    <br>
                                    <span style="font-size: 11px"> V 1.0.0</span>
                                </a>

                            </div>
                            <!-- Sigla do Sistema -->
                            <div class="logo-element">
                                SIGLA
                            </div>
                        </li>
                        @include('layouts.menu')
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper" class="white-bg dashbard-1">
                <div class="row border-bottom gray-bg">
                    <nav class="navbar navbar-static-top " role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary botao-menu" href="#">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="navbar-left title-form-breadcrumb">
                                <h3>@yield('title-form')</h3>
                                <ol class="breadcrumb">
                                    @yield('breadcrumb')
                                </ol>
                            </div>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted nome-cpf"></span>
                            </li>
                            <li> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li><a href="{{ url('/register') }}">Register</a></li>

                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Sair
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>

                    </nav>
                    <h3 class="mobile-title-form">@yield('title-form')</h3>
                </div>

                <div class="row white-bg">
                    <div class="col-lg-12">
                        <div class="wrapper wrapper-content">
                            <div class="container-fluid ">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#wrapper -->

        <!-- scripts -->
        <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/vendor/metisMenu/dist/metisMenu.min.js')}}"></script>

        <!-- Toastr - Notificações -->
        <script src="{{asset('assets/vendor/toastr/toastr.min.js')}}"></script>

        <!-- Data Tables -->
        <script src="{{asset('assets/vendor/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/dataTableDefaults.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/vendor/pdfmake/build/pdfmake.js')}}"></script>
        <script src="{{asset('assets/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/vendor/jszip/dist/jszip.min.js')}}"></script>

        <!-- Bootstrap Datepicker -->
        <script src="{{asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/js/datepickerDefaults.js')}}"></script>

        <!-- jQuery Mask Plugin -->
        <script src="{{asset('assets/vendor/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

        @section('scripts')

        @show

        {!! Toastr::message() !!}

    </body>

</html>