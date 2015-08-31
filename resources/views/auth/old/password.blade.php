<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lembrar senha</title>

    <!-- Vendor CSS -->
    <link href="{{ asset('/css/material/animate-css/animate.min.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('/css/app.min.css') }}" rel="stylesheet">

    <script>
        function loadResetPasswordOnClick() {

            document.resetpassword.submit();

        }
    </script>
</head>

<body class="login-content">


    <!-- Forgot Password -->
    <div class="lc-block toggled" id="l-forget-password">
        <form name="resetpassword" class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <p class="text-left">Digite seu e-mail de login e clique no botão ao lado para recber o e-mail para criar uma nova senha.</p>


            <div class="form-group">                                                        
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="md md-email"></i></span>
                    <div class="fg-line">

                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    </div>
                </div>
            </div>

        </form>
        <a href="javascript:loadResetPasswordOnClick()" class="btn btn-login btn-danger btn-float"><i class="md md-arrow-forward"></i></a>

        <ul class="login-navigation">        
            <a class="btn btn-link" href="{{ url('/auth/login') }}">Login</a>
            {{-- 
            <a class="btn btn-link" href="{{ url('/auth/register') }}">Registrar</a>
            --}}
        </ul>

    </div>

    <!-- Javascript Libraries -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('/js/waves.min.js') }}"></script>
    <script src="{{ asset('/js/functions.js') }}"></script>
</body>
</html>