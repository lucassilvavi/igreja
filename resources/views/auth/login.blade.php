<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Nome do Sistema</title>

        <link href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/Font-Awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/vendor/animate.css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/app.css')}}" rel="stylesheet">
        <style>
            @media screen and (min-width: 300px){
                .footer-version{
                    display: none;
                }
                .mds{
                    float:none;
                    text-align: center;
                }
                .rodape{
                    text-align: center;
                }
            }

            @media screen and (min-width: 760px){
                .footer-version{
                    text-align: left;
                    display: inline-block
                }

                .mds{
                    float:right;
                }

                .rodape{
                    text-align:left;
                }
            }

            .navbar{
                background-color: #2F4050 !important;
            }

            .navbar-brand{
                background-color: #2F4050 !important;
            }

            .btn-primary{
                background-color: #2F4050;
                border-color: #2F4050;
            }

            .btn-primary:hover{
                background-color: #293543;
                border-color: #293543;
            }

            .navbar-toggle.collapsed {
                background-color:inherit !important;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Login</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail </label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Senha</label>

                                    <div class="col-md-6">
                                        <a href="login.blade.php"></a>
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Lembre-me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-5 col-md-offset-3">
                                        <button type="submit" class="btn-block btn btn-primary">
                                            Logar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="http://siasc.app/assets/js/jquery-2.1.1.js"></script>
        <script src="http://siasc.app/assets/js/bootstrap.min.js"></script>

    </body>
</html>



