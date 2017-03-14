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
                        <div class="panel-heading">Reset Password</div>
                        <div class="panel-body">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Send Password Reset Link
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
